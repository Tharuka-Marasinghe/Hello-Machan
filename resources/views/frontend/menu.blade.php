@extends('frontend.master')
@section('content')
<div class="py-5 mb-5 container-xxl bg-dark hero-header">
    <div class="container pt-5 pb-4 my-5 text-center">
        <h1 class="mb-3 text-white display-3 animated slideInDown">
            Food Menu
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li
                    class="text-white breadcrumb-item active"
                    aria-current="page">
                    Menu
                </li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->

<!-- Menu Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
                class="text-center section-title ff-secondary text-primary fw-normal">
                Food Menu
            </h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="text-center tab-class wow fadeInUp" data-wow-delay="0.1s">
            <ul
                class="mb-5 nav nav-pills d-inline-flex justify-content-center border-bottom">
                <li class="nav-item">
                    <a
                        class="pb-3 mx-3 d-flex align-items-center text-start ms-0 active"
                        data-bs-toggle="pill"
                        href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mb-0 mt-n1">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="pb-3 mx-3 d-flex align-items-center text-start"
                        data-bs-toggle="pill"
                        href="#tab-2">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Special</small>
                            <h6 class="mb-0 mt-n1">Launch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="pb-3 mx-3 d-flex align-items-center text-start me-0"
                        data-bs-toggle="pill"
                        href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mb-0 mt-n1">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="p-0 tab-pane fade show active">
                    <div class="row g-4">
                        @foreach ($items as $item )
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img
                                    class="flex-shrink-0 rounded img-fluid"
                                    src="img/menu-1.jpg"
                                    alt=""
                                    style="width: 80px" />
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5
                                        class="pb-2 d-flex justify-content-between border-bottom">
                                        <span>{{ $item->name }}</span>
                                        <span class="text-primary">{{ $item->price }}</span>
                                    </h5>
                                    <small class="fst-italic">{{ $item->description }}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div id="tab-2" class="p-0 tab-pane fade show">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-1.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-2.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-3.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-4.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-5.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-6.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-7.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-8.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="p-0 tab-pane fade show">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-1.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-2.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-3.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-4.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-5.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-6.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-7.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img
                                        class="flex-shrink-0 rounded img-fluid"
                                        src="img/menu-8.jpg"
                                        alt=""
                                        style="width: 80px" />
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5
                                            class="pb-2 d-flex justify-content-between border-bottom">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">$115</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    @endsection