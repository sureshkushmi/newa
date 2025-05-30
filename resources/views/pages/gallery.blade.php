@extends('layouts.main')

@section('title', 'Programmes')

@section('content')
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class="display-4 text-white text-uppercase">Gallery</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Gallery</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="text-center mb-5">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Gallery</h6>
            <h1>Our Initiatives to Preserve and Promote Culture</h1>
        </div>
        <div class="row">
            <!-- Programme 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-white text-center p-4 h-100 shadow-sm">
                        <a href="{{ asset('img/gallery/programme1.jpg') }}" data-lightbox="gallery" data-title="Cultural Events">
                            <img class="img-fluid mb-3 rounded" src="{{ asset('img/gallery/programme1.jpg') }}" alt="Cultural Events">
                        </a>
                        <h5 class="mb-2">Cultural Events</h5>
                        <p>Organizing traditional music, dance, and food festivals to preserve Newa identity and heritage.</p>
                    </div>
            </div>

            <!-- Programme 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white text-center p-4 h-100 shadow-sm">
                <a href="{{ asset('img/gallery/programme2.jpg') }}" data-lightbox="gallery" data-title="Cultural Events">
                            <img class="img-fluid mb-3 rounded" src="{{ asset('img/gallery/programme2.jpg') }}" alt="Cultural Events">
                        </a>
                    <h5 class="mb-2">Educational Workshops</h5>
                    <p>Offering language classes and historical seminars on Newa civilization, arts, and architecture.</p>
                </div>
            </div>
            <!-- Programme 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white text-center p-4 h-100 shadow-sm">
                <a href="{{ asset('img/gallery/programme3.jpg') }}" data-lightbox="gallery" data-title="Cultural Events">
                            <img class="img-fluid mb-3 rounded" src="{{ asset('img/gallery/programme3.jpg') }}" alt="Cultural Events">
                        </a>
                    <h5 class="mb-2">Youth Engagement</h5>
                    <p>Inspiring the next generation to embrace their roots through volunteerism and heritage education.</p>
                </div>
            </div>

             <!-- Programme 4 -->
             <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white text-center p-4 h-100 shadow-sm">
                <a href="{{ asset('img/gallery/programme4.jpg') }}" data-lightbox="gallery" data-title="Cultural Events">
                            <img class="img-fluid mb-3 rounded" src="{{ asset('img/gallery/programme4.jpg') }}" alt="Cultural Events">
                        </a>
                    <h5 class="mb-2">Youth Engagement</h5>
                    <p>Inspiring the next generation to embrace their roots through volunteerism and heritage education.</p>
                </div>
            </div>

            <!-- Programme 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white text-center p-4 h-100 shadow-sm">
                <a href="{{ asset('img/gallery/programme5.jpg') }}" data-lightbox="gallery" data-title="Cultural Events">
                            <img class="img-fluid mb-3 rounded" src="{{ asset('img/gallery/programme5.jpg') }}" alt="Cultural Events">
                        </a>
                    <h5 class="mb-2">Youth Engagement</h5>
                    <p>Inspiring the next generation to embrace their roots through volunteerism and heritage education.</p>
                </div>
            </div>

             <!-- Programme 6 -->
             <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white text-center p-4 h-100 shadow-sm">
                <a href="{{ asset('img/gallery/programme6.jpg') }}" data-lightbox="gallery" data-title="Cultural Events">
                            <img class="img-fluid mb-3 rounded" src="{{ asset('img/gallery/programme6.jpg') }}" alt="Cultural Events">
                        </a>
                    <h5 class="mb-2">Youth Engagement</h5>
                    <p>Inspiring the next generation to embrace their roots through volunteerism and heritage education.</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
