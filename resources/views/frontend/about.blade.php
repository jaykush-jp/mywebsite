@extends('layouts.frontend.app')

@section('style')
    <style>
        .hero {
            /* padding: 80px 0; */
        }

        .hero-img {
            width: 90px;
            height: 90px;
            object-fit: cover;
        }

        .value-icon {
            font-size: 32px;
            color: #c56b3e;
        }

        .stats {
            background: #c56b3e;
            border-radius: 15px;
        }

        .team-card img {
            height: 260px;
            object-fit: cover;
        }

        .cert-badge {
            background: #ead2c1;
            color: #333;
            padding: 10px 18px;
            border-radius: 30px;
            margin: 6px;
        }
    </style>
@endsection

@section('content')

    {{-- HERO --}}
    <section class="hero text-center">
        <div class="container">
            <h2 class="fw-bold">Your Trusted Partner</h2>
            <p class="text-muted">
                We’re dedicated to helping you achieve healthy, radiant skin through personalized care.
            </p>

            <div class="d-flex justify-content-center gap-4 mt-4">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/057/068/323/small/single-fresh-red-strawberry-on-table-green-background-food-fruit-sweet-macro-juicy-plant-image-photo.jpg" class="rounded-circle hero-img">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/057/068/323/small/single-fresh-red-strawberry-on-table-green-background-food-fruit-sweet-macro-juicy-plant-image-photo.jpg" class="rounded-circle hero-img">
            </div>
        </div>
    </section>


    {{-- OUR STORY --}}
    <section class="py-2">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h3 class="fw-bold mb-3">Our Story</h3>
                    <p>
                        Sophia was founded in 2008 with a mission to provide accessible,
                        professional skincare treatments that deliver real results.
                    </p>
                    <p>
                        We believe healthy skin is the foundation of confidence and
                        we are committed to safe, effective and innovative treatments.
                    </p>
                </div>

                <div class="col-lg-6">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/057/068/323/small/single-fresh-red-strawberry-on-table-green-background-food-fruit-sweet-macro-juicy-plant-image-photo.jpg" class="img-fluid rounded-3 shadow">
                </div>

            </div>
        </div>
    </section>


    {{-- MISSION --}}
    <section class="py-3  text-center">
        <div class="container">

            <h3 class="fw-bold mb-5">Our Mission & Values</h3>

            <div class="row">

                @php
                    $values = [
                        ['icon' => 'person-heart', 'title' => 'Client-Centered Care'],
                        ['icon' => 'shield-check', 'title' => 'Safety First'],
                        ['icon' => 'stars', 'title' => 'Excellence'],
                        ['icon' => 'people', 'title' => 'Community'],
                    ];
                @endphp

                @foreach ($values as $value)
                    <div class="col-md-3">
                        <i class="bi bi-{{ $value['icon'] }} value-icon"></i>
                        <h6 class="mt-3">{{ $value['title'] }}</h6>
                    </div>
                @endforeach

            </div>

        </div>
    </section>


    {{-- STATS --}}
    <section class="py-3">
        <div class="container">
            <div class="row stats align-items-center p-4">

                <div class="col-lg-6">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/057/068/323/small/single-fresh-red-strawberry-on-table-green-background-food-fruit-sweet-macro-juicy-plant-image-photo.jpg" class="img-fluid rounded-3">
                </div>

                <div class="col-lg-6 text-center text-white">

                    <div class="row">

                        <div class="col-6 mb-4">
                            <h2>10+</h2>
                            <p>Years of Experience</p>
                        </div>

                        <div class="col-6 mb-4">
                            <h2>2000+</h2>
                            <p>Happy Clients</p>
                        </div>

                        <div class="col-6">
                            <h2>20+</h2>
                            <p>Treatment Options</p>
                        </div>

                        <div class="col-6">
                            <h2>98%</h2>
                            <p>Satisfaction Rate</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    {{-- TEAM --}}
    <section class="py-3 text-center">
        <div class="container">

            <h3 class="fw-bold mb-5">Meet our Experts</h3>

            <div class="row">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm team-card">

                            <img src="https://static.vecteezy.com/system/resources/thumbnails/057/068/323/small/single-fresh-red-strawberry-on-table-green-background-food-fruit-sweet-macro-juicy-plant-image-photo.jpg" class="card-img-top">

                            <div class="card-body">
                                <h6 class="mb-0">Jay</h6>
                                <small class="text-muted">Developer</small>
                            </div>

                        </div>
                    </div>
                {{-- @foreach ($team ?? [] as $member)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm team-card">

                            <img src="{{ asset('storage/' . $member->image) }}" class="card-img-top">

                            <div class="card-body">
                                <h6 class="mb-0">{{ $member->name }}</h6>
                                <small class="text-muted">{{ $member->designation }}</small>
                            </div>

                        </div>
                    </div>
                @endforeach --}}

            </div>

        </div>
    </section>


    {{-- CERTIFICATIONS --}}
    <section class="py-3 bg-white text-center">
        <div class="container">

            <h3 class="fw-bold mb-4">Certification & Standards</h3>

            @php
                $certifications = [
                    'ISO 9001 Quality Standards',
                    'Client Safety First',
                    'Licensed Practitioners',
                    'Board Certified Staff',
                    'Sterilization & Hygiene Protocols',
                ];
            @endphp

            @foreach ($certifications as $cert)
                <span class="badge cert-badge">{{ $cert }}</span>
            @endforeach

        </div>
    </section>

@endsection
