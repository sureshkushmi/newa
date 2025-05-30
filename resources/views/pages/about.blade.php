@extends('layouts.main')

@section('title', 'About Us')

@section('content')
<div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
                <h3 class="display-4 text-white text-uppercase">About</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">About</p>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" style="object-fit: cover;" alt="About Us">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                    <h1 class="mb-3">Newa: Cultural Preservation Committee</h1>
                    <p>Through educational programs, cultural events, research, and community engagement, we strive to ensure that Newa culture continues to thrive in the modern world while staying rooted in its proud history.</p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('img/about-1.jpg') }}" alt="About Image 1">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('img/about-2.jpg') }}" alt="About Image 2">
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary mt-1">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
