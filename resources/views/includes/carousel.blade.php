<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        @foreach($sliders as $key => $slider)
<div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
<img class="w-100" src="{{ asset('storage/' . $slider->image) }}" alt="Image">

    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        <div class="p-3" style="max-width: 900px;">
            <a href="{{ route('donate') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Donate Us</a>
        </div>
    </div>
</div>
@endforeach

            
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
