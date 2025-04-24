<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
            <h1>What Our Community Says</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach($testimonials as $testimonial)
            <div class="text-center pb-4">
                <img class="img-fluid mx-auto" 
                     src="{{ asset('storage/' . $testimonial->image) }}" 
                     style="width: 100px; height: 100px;" 
                     alt="{{ $testimonial->name }}">
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">"{{ $testimonial->message }}"</p>
                    <h5 class="text-truncate">{{ $testimonial->name }}</h5>
                    <span>{{ $testimonial->position }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
