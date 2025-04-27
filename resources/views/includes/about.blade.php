<div class="container-fluid py-5">
        <div class="container pt-5">
            
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('storage/' . $about->image) }}" alt="{{$about->title}}" style="object-fit: cover;">

                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{$about->title}}</h6>
                        <h1 class="mb-3">{{$about->slug}}</h1>
                        <p>{{$about->message}}</p>
                        <a href="{{route('about')}}" class="btn btn-primary mt-1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>