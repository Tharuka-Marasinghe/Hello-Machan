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


            </ul>
            <div class="tab-content">
                <div id="tab-1" class="p-0 tab-pane fade show active">
                    <div class="row g-4">
                        @foreach ($items as $item )
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img
                                    class="flex-shrink-0 rounded img-fluid"
                                    src="{{ asset('storage/'.$item->image.'') }}"
                                    alt=""
                                    style="width: 80px" />
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5
                                        class="pb-2 d-flex justify-content-between border-bottom">
                                        <span>{{ $item->name }}</span>
                                        <span class="text-primary">{{ $item->price }}</span>
                                    </h5>
                                    <small class="fst-italic">{{ $item->description }}</small>
                                    <div class="pt-2 d-flex">
                                        <a
                                            class="btn btn-sm btn-primary flex-fill me-2"
                                            href="{{ route('addToCart', $item->id) }}">
                                            <i class="fa fa-shopping-cart me-2"></i>
                                            Add To Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    @endsection