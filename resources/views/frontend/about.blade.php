@extends('frontend.master')
@section('content')
<div class="py-5 mb-5 container-xxl bg-dark hero-header">
    <div class="container pt-5 pb-4 my-5 text-center">
        <h1 class="mb-3 text-white display-3 animated slideInDown">
            About Us
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li
                    class="text-white breadcrumb-item active"
                    aria-current="page">
                    About
                </li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->

<!-- About Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img
                            class="rounded img-fluid w-100 wow zoomIn"
                            data-wow-delay="0.1s"
                            src="{{ asset('assets/img/about-1.jpg') }}" />
                    </div>
                    <div class="col-6 text-start">
                        <img
                            class="rounded img-fluid w-75 wow zoomIn"
                            data-wow-delay="0.3s"
                            src="{{ asset('assets/img/about-2.jpg') }}"
                            style="margin-top: 25%" />
                    </div>
                    <div class="col-6 text-end">
                        <img
                            class="rounded img-fluid w-75 wow zoomIn"
                            data-wow-delay="0.5s"
                            src="{{ asset('assets/img/about-3.jpg') }}" />
                    </div>
                    <div class="col-6 text-end">
                        <img
                            class="rounded img-fluid w-100 wow zoomIn"
                            data-wow-delay="0.7s"
                            src="{{ asset('assets/img/about-4.jpg') }}" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5
                    class="section-title ff-secondary text-start text-primary fw-normal">
                    About Us
                </h5>
                <h1 class="mb-4">
                    Welcome to
                    <i class="fa fa-utensils text-primary me-2"></i>Restoran
                </h1>
                <p class="mb-4">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet
                    lorem sit.
                </p>
                <p class="mb-4">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                    sed stet lorem sit clita duo justo magna dolore erat amet
                </p>
                <div class="mb-4 row g-4">
                    <div class="col-sm-6">
                        <div
                            class="px-3 d-flex align-items-center border-start border-5 border-primary">
                            <h1
                                class="flex-shrink-0 mb-0 display-5 text-primary"
                                data-toggle="counter-up">
                                15
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="mb-0 text-uppercase">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div
                            class="px-3 d-flex align-items-center border-start border-5 border-primary">
                            <h1
                                class="flex-shrink-0 mb-0 display-5 text-primary"
                                data-toggle="counter-up">
                                50
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="mb-0 text-uppercase">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="px-5 py-3 mt-2 btn btn-primary" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Team Start -->
<div class="pt-5 pb-3 container-xxl">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
                class="text-center section-title ff-secondary text-primary fw-normal">
                Team Members
            </h5>
            <h1 class="mb-5">Our Master Chefs</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden text-center rounded team-item">
                    <div class="m-4 overflow-hidden rounded-circle">
                        <img class="img-fluid" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <small>Designation</small>
                    <div class="mt-3 d-flex justify-content-center">
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden text-center rounded team-item">
                    <div class="m-4 overflow-hidden rounded-circle">
                        <img class="img-fluid" src="{{ asset('assets/img/team-2.jpg') }}" alt="" />
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <small>Designation</small>
                    <div class="mt-3 d-flex justify-content-center">
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden text-center rounded team-item">
                    <div class="m-4 overflow-hidden rounded-circle">
                        <img class="img-fluid" src="{{ asset('assets/img/team-3.jpg') }}" alt="" />
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <small>Designation</small>
                    <div class="mt-3 d-flex justify-content-center">
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="overflow-hidden text-center rounded team-item">
                    <div class="m-4 overflow-hidden rounded-circle">
                        <img class="img-fluid" src="{{ asset('assets/img/team-4.jpg') }}" alt="" />
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <small>Designation</small>
                    <div class="mt-3 d-flex justify-content-center">
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                        <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection