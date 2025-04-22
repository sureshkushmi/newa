@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class="display-4 text-white text-uppercase">Contact Us</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Contact</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact</h6>
            <h1>Get In Touch With Us</h1>
        </div>
        <div class="row">
            <!-- Contact Form -->

            <div class="col-lg-7 mb-5">
            @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control p-4" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control p-4" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control p-4" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="5" class="form-control p-4" placeholder="Message" required></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="bg-white p-4 mb-4 shadow-sm">
                    <h5 class="text-primary mb-3">Contact Details</h5>
                    <p><i class="fa fa-map-marker-alt mr-2 text-primary"></i> Mahalaxmi Municiplity - 8, Nepal</p>
                    <p><i class="fa fa-phone-alt mr-2 text-primary"></i> +977-9841182949</p>
                    <p><i class="fa fa-envelope mr-2 text-primary"></i> info@newasanskriti.org.np</p>
                    <p><i class="fa fa-globe mr-2 text-primary"></i> <a href="https://newasanskriti.org.np" target="_blank">newa.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->
@endsection
