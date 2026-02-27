@extends('layouts.frontend.app')

@section('content')
    <!-- ================= HERO SECTION ================ -->
    <section class="hero">
        <div class="hero-left">
            <span class="tag">Hi There!</span>
            <h1>I am <span class="name">Jay Kushwah</span></h1>
            <h2>A <span class="typing-text"></span></h2>

            <p>
                Laravel Backend Developer building fast, scalable & secure web applications.
            </p>

            <div class="buttons">
                <a href="#contact" class="btn primary">Hire Me</a>
                <a href="#" class="btn primary">View Portfolio</a>
            </div>

            <div class="social">
                <a href="#" class="social-icon">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="hero-right">
            <img src="{{ asset('assets/frontend/images/main.webp') }}" alt="Designer Image">
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-container">

            <!-- LEFT SIDE IMAGE -->
            <div class="about-img">
                <img src="{{ asset('assets/frontend/images/roof.web') }}" alt="">
            </div>

            <!-- RIGHT SIDE CONTENT -->
            <div class="about-content">

                <!-- TABS -->
                <div class="tabs">
                    <button class="tab-btn active" data-tab="about">ABOUT ME</button>
                    <button class="tab-btn" data-tab="skills">SKILLS</button>
                    <button class="tab-btn" data-tab="experience">EXPERIENCE</button>
                </div>

                <!-- TAB CONTENT AREA -->
                <div class="tab-content">

                    <!-- ABOUT SECTION -->
                    <div class="content active" id="about">
                        <h3>My Story</h3>
                        <p>
                            I am a passionate Web and Backend Developer with over 2.5 years of hands-on experience in web
                            design and development.
                            After completing my college, I started my professional journey with a 6-month internship where I
                            built a strong foundation in real-world development practices.
                        </p>


                        <p>
                            Since then, I have worked with multiple companies, continuously improving my skills and adapting
                            to new technologies and challenges.
                            My expertise lies in building fast, scalable, and secure web applications with a strong focus on
                            clean code, performance, and user experience.
                        </p>
                        <h6>I have 2.5+ years of professional experience in Web Design and Development.</h6>
                        <p>
                            I specialize in backend development (Laravel/PHP) along with modern frontend technologies, and I
                            am always eager to learn, grow, and create impactful digital solutions that solve real-world
                            problems.
                        </p>
                    </div>

                    <!-- SKILLS SECTION -->
                    <div class="content" id="skills">
                        <h2>Skills</h2>
                        <p>
                            Main experience in Laravel development and backend technologies.
                        </p>

                        <div class="row">

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Laravel</span>
                                    <div class="progress">
                                        <div style="width:90%"></div>
                                    </div>
                                    <small>90%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>CodeIgniter</span>
                                    <div class="progress">
                                        <div style="width:50%"></div>
                                    </div>
                                    <small>50%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>PHP</span>
                                    <div class="progress">
                                        <div style="width:70%"></div>
                                    </div>
                                    <small>70%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>HTML / CSS</span>
                                    <div class="progress">
                                        <div style="width:95%"></div>
                                    </div>
                                    <small>95%</small>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Bootstrap</span>
                                    <div class="progress">
                                        <div style="width:90%"></div>
                                    </div>
                                    <small>90%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>JavaScript</span>
                                    <div class="progress">
                                        <div style="width:70%"></div>
                                    </div>
                                    <small>70%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>AJAX</span>
                                    <div class="progress">
                                        <div style="width:40%"></div>
                                    </div>
                                    <small>40%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Flutter</span>
                                    <div class="progress">
                                        <div style="width:50%"></div>
                                    </div>
                                    <small>50%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Java</span>
                                    <div class="progress">
                                        <div style="width:40%"></div>
                                    </div>
                                    <small>40%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Python</span>
                                    <div class="progress">
                                        <div style="width:30%"></div>
                                    </div>
                                    <small>30%</small>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>MySQL</span>
                                    <div class="progress">
                                        <div style="width:70%"></div>
                                    </div>
                                    <small>70%</small>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Github</span>
                                    <div class="progress">
                                        <div style="width:90%"></div>
                                    </div>
                                    <small>90%</small>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Gitlab</span>
                                    <div class="progress">
                                        <div style="width:60%"></div>
                                    </div>
                                    <small>60%</small>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Forge</span>
                                    <div class="progress">
                                        <div style="width:60%"></div>
                                    </div>
                                    <small>60%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Photoshop</span>
                                    <div class="progress">
                                        <div style="width:50%"></div>
                                    </div>
                                    <small>50%</small>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="skill">
                                    <span>Canva</span>
                                    <div class="progress">
                                        <div style="width:80%"></div>
                                    </div>
                                    <small>80%</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- EXPERIENCE SECTION -->
                    <div class="content" id="experience">
                        <h2>Experience</h2>
                        <div class="exp-box">
                            <h4>Frontend & Backend Developer</h4>
                            <strong>2023 – 2024 — Abhisan Technology Private Limited</strong>
                            <p>
                                Worked on full-stack web development projects using Laravel, PHP,
                                JavaScript, and MySQL. Developed responsive UI components,
                                implemented backend logic, created RESTful APIs, and collaborated
                                with cross-functional teams to deliver high-quality applications.
                            </p>
                        </div>

                        <div class="exp-box">
                            <h4>Full Stack Developer</h4>
                            <strong>2024 – Present — Help Together Group (Digital Marketing Agency)</strong>
                            <p>
                                Leading end-to-end development of web applications, including
                                frontend design, backend architecture, API integration, and
                                deployment. Improving website performance, SEO optimization,
                                and implementing secure authentication systems.
                            </p>
                        </div>
                        <div class="exp-box">
                            <h4>Laravel Developer</h4>
                            <strong>2023 – Present</strong>
                            <p>
                                Developing and maintaining scalable web applications using Laravel.
                                Building responsive user interfaces, designing RESTful APIs,
                                optimizing database performance, and managing full-stack development
                                projects from concept to deployment.
                            </p>
                        </div>
                        <div class="exp-box">
                            <h4>WordPress Developer</h4>
                            <strong>2023 – Present (Learning & Practice)</strong>
                            <p>
                                Developed and customized WordPress themes and plugins.
                                Managed website maintenance, performance optimization,
                                and implemented SEO best practices.
                            </p>
                        </div>
                        <div class="exp-box">
                            <h4>Graphic Designer</h4>
                            <strong>2023 – Present (Learning & Practice)</strong>
                            <p>
                                Created engaging visual content including social media creatives, posts,
                                banners, logos, and marketing materials for digital and print platforms.
                                Designed brand identity assets and performed basic video editing to
                                produce promotional content.
                            </p>
                        </div>

                        <div class="exp-box">
                            <h4>UI/UX Designer</h4>
                            <strong>2023 – Present</strong>
                            <p>
                                Designed user-centered web and mobile interfaces by conducting user research,
                                creating wireframes, prototypes, and high-fidelity UI designs.
                                Built responsive layouts and design systems while ensuring accessibility
                                and modern UI/UX standards.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Portfolio Section (drop into your page) -->
    <section class="portfolio-section py-3">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-4">
                <div class="section-subtitle">— PORTFOLIO —</div>
                <h2 class="section-title">My Latest Work</h2>
            </div>

            <!-- Filter Buttons -->
            <div class="d-flex justify-content-center mb-4">
                <div class="btn-group" role="group" aria-label="filters">
                    <button class="btn btn-outline-primary active filter-btn" data-filter="all">All</button>
                    <button class="btn btn-outline-primary filter-btn" data-filter="web">Web</button>
                    <button class="btn btn-outline-primary filter-btn" data-filter="app">App</button>
                    <button class="btn btn-outline-primary filter-btn" data-filter="logo">Logo</button>
                </div>
            </div>

            <!-- Grid -->
            <div class="portfolio-grid">
                <!-- Item: Web -->
                <a href="project-details.html" class="text-decoration-none">
                    <div class="p-item" data-category="web">
                        <div class="p-thumb">
                            <img src="https://media.istockphoto.com/id/1210917316/photo/medical-technology-concept-remote-medicine-electronic-medical-record.jpg?s=612x612&w=0&k=20&c=SlHbCd8XuyIPe4WewEU3RQdoGNVzLoer0drGFMhKjuo="
                                alt="Project 1">
                            <div class="p-overlay">
                                <h5>Creative Design</h5>
                                <p>Web / Branding</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Item: App -->
                <div class="p-item" data-category="app">
                    <div class="p-thumb">
                        <img src="https://img.freepik.com/premium-photo/internet-internet-technology-world_1316263-208055.jpg"
                            alt="Project 2">
                        <div class="p-overlay">
                            <h5>Tablet Illustration</h5>
                            <p>App / Illustration</p>
                        </div>
                    </div>
                </div>

                <!-- Item: Logo -->
                <div class="p-item" data-category="logo">
                    <div class="p-thumb">
                        <img src="https://media.istockphoto.com/id/1371339413/photo/co-working-team-meeting-concept-businessman-using-smart-phone-and-digital-tablet-and-laptop.jpg?s=612x612&w=0&k=20&c=ysEsVw3q2axYt3oVZAuQjtHRlN3lY-U_e0ikK5yKIXQ="
                            alt="Project 3">
                        <div class="p-overlay">
                            <h5>Sale Poster</h5>
                            <p>Logo / Print</p>
                        </div>
                    </div>
                </div>

                <!-- Item: Web -->
                <div class="p-item" data-category="web">
                    <div class="p-thumb">
                        <img src="https://www.shutterstock.com/image-photo/businessman-using-technology-ai-working-600nw-2284088327.jpg"
                            alt="Project 4">
                        <div class="p-overlay">
                            <h5>Dashboard UI</h5>
                            <p>Web / UI</p>
                        </div>
                    </div>
                </div>

                <!-- add more items as needed, keeping data-category values (web/app/logo) -->
            </div>
        </div>
    </section>

    <section class="services-section">
        <h2 class="services-title">
            This is My Expertise, The Services I'll Provide My Clients
        </h2>

        <div class="services-container">

            <div class="service-card fade-up">
                <div class="service-icon">
                    <i class="fas fa-pencil-ruler fa-3x"></i>
                </div>
                <h3>UI & UX Design</h3>
                <p>
                    I design clean, modern, and user-friendly interfaces that improve user
                    experience and increase engagement.
                </p>
                <a href="#" class="read-more">Read more →</a>
            </div>

            <div class="service-card fade-up">
                <div class="service-icon">
                    <i class="fas fa-code fa-3x"></i>
                </div>
                <h3>Web Development</h3>
                <p>
                    I build fast, secure, and fully responsive websites using modern
                    technologies tailored to your business needs.
                </p>
                <a href="#" class="read-more">Read more →</a>
            </div>

            <div class="service-card fade-up">
                <div class="service-icon">
                    <i class="fas fa-paint-brush fa-3x"></i>
                </div>
                <h3>Graphic Design</h3>
                <p>
                    Creative branding, logo design, and marketing materials that make your
                    business stand out visually.
                </p>
                <a href="#" class="read-more">Read more →</a>
            </div>

        </div>

        <p class="contact-me">
            Have any works you want to done by me? <a href="#">Contact Me</a>
        </p>

        <p class="bottom-text">
            Let’s work together to create something amazing and impactful for your business.
        </p>
    </section>

    <!-- Counter Section -->
    <section class="counter-section">
        <div class="container">
            <div class="row text-center text-white align-items-center">

                <!-- Counter Box 1 -->
                <div class="col-md-4 counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-smile fa-3x"></i>
                    </div>
                    <h2 class="counter m-0" data-target="60">0</h2>
                    <p class="fw-bold mt-2">HAPPY CUSTOMERS</p>
                </div>

                <!-- Counter Box 2 -->
                <div class="col-md-4 counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-laptop-code fa-3x"></i>
                    </div>
                    <h2 class="counter m-0" data-target="35">0</h2>
                    <p class="fw-bold mt-2">PROJECTS COMPLETED</p>
                </div>

                <!-- Counter Box 3 -->
                <div class="col-md-4 counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-coffee fa-3x"></i>
                    </div>
                    <h2 class="counter m-0" data-target="70">0</h2>
                    <p class="fw-bold mt-2">CUPS OF COFFEE</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="contact-section py-3 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column: Form -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-3">Contact Me</h2>
                    <p class="mb-4">Have a question or want to work together? Send me a message!</p>
                    @if (session('success'))
                        <div class="alert alert-success text-center">{{ session('success') }}</div>
                    @endif
                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" name="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" name="email"
                                placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control form-control-lg" name="message" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                    </form>
                </div>

                <!-- Right Column: Image / Contact Info -->
                <div class="col-lg-6 text-start text-lg-start">
                    <div class="map-container" style="margin-top:20px;">
                        <h2>Our Location</h2>
                        {{-- <p>Visit us at our office:</p> --}}
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7007.420751166786!2d77.32455295!3d28.578458499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce451af8dfa65%3A0xdb0cafb4b06c1fb!2sSector%2019%2C%20Noida%2C%20Uttar%20Pradesh%20201301!5e0!3m2!1sen!2sin!4v1772188409994!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="contact-info">
                            {{-- <h4>Get in Touch</h4> --}}
                            <p><strong>📍Address:</strong> Noida, Uttar Pradesh, India</p>
                            <p><strong>📧 Email:</strong> jaykush.work@gmail.com</p>
                            <p><strong>📞 Phone:</strong> +91 8193054955</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
