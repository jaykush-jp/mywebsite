<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background: #fdfdfd;
            font-family: 'Segoe UI', sans-serif;
            color: #333;
        }

        /* Breadcrumb */
        .breadcrumb-box {
            padding: 12px 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            background: linear-gradient(90deg, #f0f5ff, #e6f0ff);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        /* Main section */
        .main-section {
            display: flex;
            flex-wrap: wrap;
            /* align-items: center; */
            /* gap: 5px; */
            margin-bottom: 15px;
        }

        /* Image left */
        .main-section .left-img img {
            width: 95%;
            border-radius: 20px;
            transition: transform 0.3s;
            margin-bottom: 20px;

        }

        .main-section .left-img img:hover {
            transform: scale(1.01);
        }

        /* Right content */
        .main-section .right-content h2 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .main-section .right-content p {
            font-size: 1.05rem;
            line-height: 1.7;
        }

        /* Technologies badges */
        .tech-badge {
            background: #e6f0ff;
            color: #1F4E79;
            padding: 10px 20px;
            border-radius: 30px;
            margin: 5px 5px 5px 0;
            display: inline-block;
            font-weight: 500;
            transition: all 0.3s;
        }

        .tech-badge:hover {
            background: #1F4E79;
            color: #fff;
        }

        /* Screenshot slider */
        .carousel img {
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .carousel img:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Video */
        .ratio iframe {
            border-radius: 20px;
        }

        /* Accordion */
        .accordion-button {
            font-weight: 600;
        }

        /* Section titles */
        .section-title {
            font-weight: 700;
            margin-bottom: 25px;
            position: relative;
        }

        .section-title::after {
            content: "";
            position: absolute;
            width: 60px;
            height: 4px;
            background: #1F4E79;
            left: 0;
            bottom: -10px;
            border-radius: 2px;
        }

        /* Responsive adjustments */
        @media(max-width:992px) {
            .main-section {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <!-- Breadcrumb -->
        <div class="breadcrumb-box">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Projects</a></li>
                    <li class="breadcrumb-item active">Medical Web App</li>
                </ol>
            </nav>
        </div>

        <!-- 2-Column Main Section -->
        <div class="main-section">
            <div class="col-lg-6 left-img">
                <img src="https://media.istockphoto.com/id/1210917316/photo/medical-technology-concept-remote-medicine-electronic-medical-record.jpg?s=612x612&w=0&k=20&c=SlHbCd8XuyIPe4WewEU3RQdoGNVzLoer0drGFMhKjuo="
                    alt="Project Main Image">
            </div>
            <div class="col-lg-6 right-content">
                <h2 class="section-title">Creative Medical Web Design</h2>
                <p>
                    This project is a modern medical web application designed to manage electronic
                    medical records and provide remote healthcare solutions. Patients can book
                    appointments, access reports and consult doctors online securely.
                </p>
            </div>
        </div>

        <!-- Technologies -->
        <div class="mb-5">
            <h3 class="section-title">Technologies Used</h3>
            <span class="tech-badge">HTML5</span>
            <span class="tech-badge">CSS3</span>
            <span class="tech-badge">Bootstrap 5</span>
            <span class="tech-badge">JavaScript</span>
            <span class="tech-badge">PHP</span>
            <span class="tech-badge">MySQL</span>
        </div>

        <!-- Screenshot Slider -->
        <div class="mb-5">
            <h3 class="section-title">Project Screenshots</h3>
            <div id="projectSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-photo/doctor-using-tablet_23-2148892786.jpg"
                            class="d-block w-100 preview-img">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/medical-technology-concept_23-2148505445.jpg"
                            class="d-block w-100 preview-img">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/healthcare-technology_23-2148901292.jpg"
                            class="d-block w-100 preview-img">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#projectSlider"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#projectSlider"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <!-- Demo Video -->
        <div class="mb-5">
            <h3 class="section-title">Project Demo Video</h3>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Accordion -->
        <div class="mb-5">
            <h3 class="section-title">Project Details</h3>
            <div class="accordion" id="projectAccordion">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            Features
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#projectAccordion">
                        <div class="accordion-body">
                            ✔ Online appointment booking<br>
                            ✔ Secure medical record management<br>
                            ✔ Doctor video consultation<br>
                            ✔ Admin dashboard system
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                            Security
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#projectAccordion">
                        <div class="accordion-body">
                            Data encryption, secure authentication, role-based access control, and protected patient
                            records.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">
                            Future Improvements
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#projectAccordion">
                        <div class="accordion-body">
                            AI health prediction, mobile app integration, payment gateway support, and cloud deployment.
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Fullscreen Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img id="modalImage" src="">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const images = document.querySelectorAll('.preview-img');
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        const modalImg = document.getElementById('modalImage');
        images.forEach(img => {
            img.addEventListener('click', () => {
                modalImg.src = img.src;
                modal.show();
            });
        });
    </script>
</body>

</html>
