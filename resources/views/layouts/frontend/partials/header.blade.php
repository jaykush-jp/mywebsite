<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">

            <!-- Left Side Logo -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('assets/frontend/images/png.png') }}" alt="Logo" width="100" height="60" class="me-2">
                {{-- <strong>Your Brand</strong> --}}
            </a>

            <!-- Mobile Menu Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Right Side Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>

                    <!-- Dropdown: My Projects -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="projectsDropdown" role="button"
                            data-bs-toggle="dropdown">
                            My Projects
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Project 1</a></li>
                            <li><a class="dropdown-item" href="#">Project 2</a></li>
                            <li><a class="dropdown-item" href="#">Project 3</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

</header>
