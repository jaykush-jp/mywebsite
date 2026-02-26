<footer class="custom-footer">

    <div class="container py-4">
        <div class="row align-items-start">

            <!-- LEFT IMAGE -->
            <div class="col-md-3 text-end text-md-start mb-3 mb-md-0">
                <div class="profile-circle">
                    <img src="{{ asset('assets/frontend/images/dp.webp') }}" alt="Profile Photo" class="profile-img">
                </div>
            </div>

            <!-- CENTER CONTENT -->
            <div class="col-md-6 text-start text-md-start">
                <h4 class="name">Jay <span>Prakash</span></h4>
                <p class="position">Full Stack Developer</p>

                <ul class="list-unstyled contact mb-1">
                    <li class="mb-1">
                        <i class="fa-solid fa-phone me-2"></i>
                        <a href="tel:+918193054955" class="text-decoration-none text-dark">
                            +91 8193054955
                        </a>
                    </li>
                    <li class="mb-1">
                        <i class="fa-solid fa-envelope me-2"></i>
                        <a href="mailto:jaykush.work@gmail.com" class="text-decoration-none text-dark">
                            jaykush.work@gmail.com
                        </a>
                    </li>
                    <li class="mb-1">
                        <i class="fa-solid fa-globe me-2"></i>
                        <a href="https://www.jaykushwah.com/" target="_blank" class="text-decoration-none text-dark">
                            www.jaykushwah.com
                        </a>
                    </li>
                    <li class="mb-1">
                        <i class="fa-solid fa-location-dot"></i>
                          &nbsp; Noida, Uttar Pradesh
                    </li>
                </ul>
            </div>

            <!-- RIGHT LOGO -->
            <div class="col-md-3 text-end text-md-end">
                <h5 class="brand">JayKushwah</h5>
                <p class="tagline"><i>Future in Progress.</i></p>
                <div class="brand-bars">
                    <span></span><span></span><span></span>
                </div>
            </div>

        </div>
    </div>

    <!-- WAVE STRIP -->
    <div class="wave-wrapper">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <!-- BLACK WAVE -->
            <path fill="#00C6FF"
                d="M0,80 C220,120 340,0 560,40 C780,80 900,120 1120,80 C1260,60 1360,70 1440,80 L1440,120 L0,120 Z">
            </path>

            <!-- YELLOW STRAIGHT BAR -->
            {{-- <rect y="95" width="1440" height="25" fill="#0A74DA"></rect> --}}
        </svg>
    </div>

</footer>
