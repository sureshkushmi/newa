@extends('layouts.main')

@section('title', 'Home')

@section('content')

    @include('includes.carousel')
    @include('includes.booking')
    @include('includes.about')
    @include('includes.feature')
    @include('includes.destination')
    @include('includes.testimonial')

@endsection
