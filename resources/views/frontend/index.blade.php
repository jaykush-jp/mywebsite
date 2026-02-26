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
            <img src="{{ asset('assets/frontend/images/main.png') }}" alt="Designer Image">
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-container">

            <!-- LEFT SIDE IMAGE -->
            <div class="about-img">
                <img src="{{ asset('assets/frontend/images/roof.jpeg') }}" alt="">
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
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                        </p>

                        <div class="skill">
                            <span>Adobe Photoshop</span>
                            <div class="progress">
                                <div style="width:80%"></div>
                            </div>
                            <small>80%</small>
                        </div>

                        <div class="skill">
                            <span>HTML / CSS</span>
                            <div class="progress">
                                <div style="width:95%"></div>
                            </div>
                            <small>95%</small>
                        </div>

                        <div class="skill">
                            <span>Javascript</span>
                            <div class="progress">
                                <div style="width:88%"></div>
                            </div>
                            <small>88%</small>
                        </div>

                        <div class="skill">
                            <span>WordPress</span>
                            <div class="progress">
                                <div style="width:89%"></div>
                            </div>
                            <small>89%</small>
                        </div>
                    </div>

                    <!-- EXPERIENCE SECTION -->
                    <div class="content" id="experience">
                        <h2>Experience</h2>

                        <div class="exp-box">
                            <h3>Art & Creative Director</h3>
                            <strong>2014-2015 — Google Inc.</strong>
                            <p>A small river named Duden flows by their place and supplies it with necessary regelialia.
                            </p>
                        </div>

                        <div class="exp-box">
                            <h3>WordPress Developer</h3>
                            <strong>2015-2017 — Google Inc.</strong>
                            <p>A small river named Duden flows by their place and supplies it with necessary regelialia.
                            </p>
                        </div>

                        <div class="exp-box">
                            <h3>UI/UX Designer</h3>
                            <strong>2018-2020 — Google Inc.</strong>
                            <p>A small river named Duden flows by their place and supplies it with necessary regelialia.
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
                    <img src="{{ asset('assets/frontend/images/web.jpg') }}" alt="UI & UX Design Icon" />
                </div>
                <h3>UI & UX Design</h3>
                <p>
                    Far far away, behind the word mountains, far from the countries Vokalia
                    and Consonantia, there live the blind texts.
                </p>
                <a href="#" class="read-more">Read more →</a>
            </div>

            <div class="service-card fade-up">
                <div class="service-icon">
                    <img src="{{ asset('assets/frontend/images/web.jpg') }}" alt="Web Development Icon" />
                </div>
                <h3>Web Development</h3>
                <p>
                    Far far away, behind the word mountains, far from the countries Vokalia
                    and Consonantia, there live the blind texts.
                </p>
                <a href="#" class="read-more">Read more →</a>
            </div>

            <div class="service-card fade-up">
                <div class="service-icon">
                    <img src="{{ asset('assets/frontend/images/web.jpg') }}" alt="Graphic Design Icon" />
                </div>
                <h3>Graphic Design</h3>
                <p>
                    Far far away, behind the word mountains, far from the countries Vokalia
                    and Consonantia, there live the blind texts.
                </p>
                <a href="#" class="read-more">Read more →</a>
            </div>

        </div>

        <p class="contact-me">
            Have any works you want to done by me? <a href="#">Contact Me</a>
        </p>

        <p class="bottom-text">
            Far far away, behind the word mountains, far from the countries Vokalia
            and Consonantia, there live the blind texts.
        </p>
    </section>

    <!-- Counter Section -->
    <section class="py-5" style="background: #0A74DA;">
        <div class="container">
            <div class="row text-center text-white align-items-center">

                <!-- Counter Box 1 -->
                <div class="col-md-4 mb-4">
                    <img src="ICON-1.png" alt="" style="width:60px; margin-bottom:10px;">
                    <h2 class="counter m-0" data-target="3000">0</h2>
                    <p class="fw-bold mt-1">HAPPY CUSTOMER</p>
                </div>

                <!-- Counter Box 2 -->
                <div class="col-md-4 mb-4">
                    <img src="ICON-2.png" alt="" style="width:60px; margin-bottom:10px;">
                    <h2 class="counter m-0" data-target="320">0</h2>
                    <p class="fw-bold mt-1">PROJECT COMPLETED</p>
                </div>

                <!-- Counter Box 3 -->
                <div class="col-md-4 mb-4">
                    <img src="ICON-3.png" alt="" style="width:60px; margin-bottom:10px;">
                    <h2 class="counter m-0" data-target="1000">0</h2>
                    <p class="fw-bold mt-1">CUPS OF COFFEE</p>
                </div>

            </div>
        </div>
    </section>



    <!-- CONTACT -->
    <section id="contact" class="contact-section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column: Form -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-3">Contact Me</h2>
                    <p class="mb-4">Have a question or want to work together? Send me a message!</p>

                    <form method="POST" action="">
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
                            <textarea class="form-control form-control-lg" name="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                    </form>
                </div>

                <!-- Right Column: Image / Contact Info -->
                <div class="col-lg-6 text-center text-lg-start">
                    <img src="https://thumbs.dreamstime.com/b/beautiful-rain-forest-ang-ka-nature-trail-doi-inthanon-national-park-thailand-36703721.jpg"
                        alt="Contact Image" class="img-fluid rounded mb-4 shadow">
                    <div class="contact-info">
                        <h4>Get in Touch</h4>
                        <p><strong>📍Address:</strong> Noida, Uttar Pradesh, India</p>
                        <p><strong>📧 Email:</strong> jaykush.work@gmail.com</p>
                        <p><strong>📞 Phone:</strong> +91 8193054955</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
