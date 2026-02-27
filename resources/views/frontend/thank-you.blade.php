@extends('layouts.frontend.app')

@section('content')
    <style>
        body {
            min-height: 100vh;
            transition: background-color 0.4s ease, color 0.4s ease;
        }

        .thankyou-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        body.dark-mode .thankyou-section {
            background: linear-gradient(135deg, #121212, #1c1c1c);
        }

        .thankyou-card {
            max-width: 480px;
            width: 100%;
            padding: 3rem 2.5rem;
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            text-align: center;
            position: relative;
            transition: background-color 0.4s ease, color 0.4s ease;
        }

        body.dark-mode .thankyou-card {
            background-color: #1f1f1f;
            color: #eee;
        }

        .success-gif {
            width: 140px;
            margin: 0 auto 1.5rem;
            display: block;
        }

        .btn-home {
            border-radius: 50px;
            font-weight: 600;
            padding: 0.75rem 2.5rem;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            border: none;
            color: #fff;
            transition: background 0.3s ease;
        }

        .btn-home:hover {
            background: #3b5bcc;
            color: #fff;
        }

        .theme-toggle {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: transparent;
            border: none;
            font-size: 1.5rem;
            color: inherit;
            cursor: pointer;
            user-select: none;
            z-index: 10;
        }

        /* Confetti canvas */
        #confetti-canvas {
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 9999;
        }
    </style>

    <!-- Confetti Canvas -->
    <canvas id="confetti-canvas"></canvas>

    <div class="thankyou-section">
        <div class="thankyou-card shadow">

            <!-- Theme Toggle Button -->
            <button class="theme-toggle" aria-label="Toggle dark/light theme" title="Toggle dark/light theme">🌙</button>

            <!-- Success GIF -->
            <img src="{{ asset('assets/frontend/images/success.gif') }}" alt="Success" class="success-gif">

            <h2 class="fw-bold mb-3">
                Thank You{{ isset($details['name']) ? ', ' . e($details['name']) : '' }}! 🎉
            </h2>
            <p class="mb-4 fs-5">
                Your message has been successfully received.<br>Our team will get back to you shortly.
            </p>

            <a href="{{ route('home') }}" class="btn btn-home">
                Back to Home
            </a>

        </div>
    </div>


    <script>
        // Auto redirect after 5 seconds
        setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, 5000);

        // Theme toggle logic
        const toggleBtn = document.querySelector('.theme-toggle');
        const body = document.body;

        // Load saved theme from localStorage or default to light
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-mode');
            toggleBtn.textContent = '☀️';
        }

        toggleBtn.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            if (body.classList.contains('dark-mode')) {
                toggleBtn.textContent = '☀️';
                localStorage.setItem('theme', 'dark');
            } else {
                toggleBtn.textContent = '🌙';
                localStorage.setItem('theme', 'light');
            }
        });

        // Confetti animation
        (function() {
            const canvas = document.getElementById('confetti-canvas');
            const ctx = canvas.getContext('2d');
            let W, H;
            let confetti = [];

            const colors = ['#4e73df', '#1cc88a', '#f6c23e', '#e74a3b', '#6f42c1'];

            function resize() {
                W = window.innerWidth;
                H = window.innerHeight;
                canvas.width = W;
                canvas.height = H;
            }
            window.addEventListener('resize', resize);
            resize();

            function randomRange(min, max) {
                return Math.random() * (max - min) + min;
            }

            class Confetto {
                constructor() {
                    this.x = randomRange(0, W);
                    this.y = randomRange(-20, H);
                    this.size = randomRange(7, 12);
                    this.color = colors[Math.floor(Math.random() * colors.length)];
                    this.speedX = randomRange(-2, 2);
                    this.speedY = randomRange(1, 3);
                    this.angle = randomRange(0, 2 * Math.PI);
                    this.spin = randomRange(0.05, 0.1);
                }
                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;
                    this.angle += this.spin;

                    if (this.y > H) {
                        this.x = randomRange(0, W);
                        this.y = -10;
                    }
                }
                draw(ctx) {
                    ctx.save();
                    ctx.translate(this.x, this.y);
                    ctx.rotate(this.angle);
                    ctx.fillStyle = this.color;
                    ctx.fillRect(-this.size / 2, -this.size / 2, this.size, this.size * 0.4);
                    ctx.restore();
                }
            }

            function createConfetti(num) {
                confetti = [];
                for (let i = 0; i < num; i++) {
                    confetti.push(new Confetto());
                }
            }

            function animate() {
                ctx.clearRect(0, 0, W, H);
                confetti.forEach(c => {
                    c.update();
                    c.draw(ctx);
                });
                requestAnimationFrame(animate);
            }

            createConfetti(100);
            animate();
        })();
    </script>
@endsection
