<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('slider/'.$slider->image)}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <!--<h4 class="text-white text-uppercase mb-md-3">Preserving Heritage</h4>
                        <h1 class="display-3 text-white mb-md-4">Newa Identity</h1>-->
                        <a href="{{route('donate')}}" class="btn btn-primary py-md-3 px-md-5 mt-2">Donate Us</a>
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
