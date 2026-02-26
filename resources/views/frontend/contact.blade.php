@extends('layouts.frontend.app')

@section('content')

<section class="contact-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h6 class="text-primary">— CONTACT —</h6>
            <h2 class="fw-bold">Get In Touch</h2>
            <p>Let’s build something amazing together</p>
        </div>

        <div class="row">

            <!-- FORM -->
            <div class="col-lg-7 mb-4">
                <form method="POST" action="">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" name="name" class="form-control form-control-lg"
                                placeholder="Your Name" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="email" name="email" class="form-control form-control-lg"
                                placeholder="Your Email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="text" name="subject" class="form-control form-control-lg"
                            placeholder="Subject">
                    </div>

                    <div class="mb-3">
                        <textarea name="message" rows="5" class="form-control form-control-lg"
                            placeholder="Your Message" required></textarea>
                    </div>

                    <button class="btn btn-primary btn-lg">Send Message</button>

                </form>
            </div>

            <!-- CONTACT INFO -->
            <div class="col-lg-5">

                <div class="p-4 shadow rounded bg-light">

                    <h4 class="fw-bold mb-3">Contact Information</h4>

                    <p><strong>📍 Address:</strong><br> 123 Main Street, City, India</p>

                    <p><strong>📧 Email:</strong><br> info@example.com</p>

                    <p><strong>📞 Phone:</strong><br> +91 9876543210</p>

                    <hr>

                    <h5 class="fw-bold">Follow Me</h5>

                    <p>
                        <a href="#">Facebook</a><br>
                        <a href="#">LinkedIn</a><br>
                        <a href="#">Twitter</a>
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection
