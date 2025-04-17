@extends('layouts.main')

@section('title', 'Programmes')

@section('content')
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Programmes</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Programmes</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="text-center mb-5">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Programmes</h6>
            <h1>Our Initiatives to Preserve and Promote Culture</h1>
        </div>
        <div class="row">
            <!-- Programme 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white text-center p-4 h-100 shadow-sm">
                    <img class="img-fluid mb-3 rounded" src="{{ asset('img/programme-1.jpg') }}" alt="Cultural Events">
                    <h5 class="mb-2">Cultural Events</h5>
                    <p>Organizing traditional music, dance, and food festivals to preserve Newa identity and heritage.</p>
                </div>
            </div>
            <!-- Programme 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white text-center p-4 h-100 shadow-sm">
                    <img class="img-fluid mb-3 rounded" src="{{ asset('img/programme-2.jpg') }}" alt="Educational Workshops">
                    <h5 class="mb-2">Educational Workshops</h5>
                    <p>Offering language classes and historical seminars on Newa civilization, arts, and architecture.</p>
                </div>
            </div>
            <!-- Programme 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white text-center p-4 h-100 shadow-sm">
                    <img class="img-fluid mb-3 rounded" src="{{ asset('img/programme-3.jpg') }}" alt="Youth Engagement">
                    <h5 class="mb-2">Youth Engagement</h5>
                    <p>Inspiring the next generation to embrace their roots through volunteerism and heritage education.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
