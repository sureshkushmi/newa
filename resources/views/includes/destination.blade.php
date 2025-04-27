<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Cultural Preservation</h6>
            <h1>Explore Newa's Cultural Heritage</h1>
        </div>
        <div class="row">
            @foreach($preservations as $preservation)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="{{ asset('storage/'.$preservation->image) }}" alt="{{$preservation->title}}">
                </div>
            </div>
           @endforeach
        </div>
    </div>
</div>
