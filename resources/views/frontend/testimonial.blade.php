<div class="py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5
                class="text-center section-title ff-secondary text-primary fw-normal">
                Testimonial
            </h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">

            @foreach ($testimonials as $testimonial )

            <div class="p-4 bg-transparent border rounded testimonial-item">
                <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                <p>
                    {{ $testimonial->description }}
                </p>
                <div class="d-flex align-items-center">
                    <img
                        class="flex-shrink-0 img-fluid rounded-circle"
                        src="{{ asset('storage/'.$testimonial->image) }}"
                        style="width: 50px; height: 50px" />
                    <div class="ps-3">
                        <h5 class="mb-1">{{ $testimonial->name }}</h5>
                        <small>{{ $testimonial->profession }}</small>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>