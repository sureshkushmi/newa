<div class="container-fluid pb-5">
    <div class="container pb-5">
        <div class="row">
            @foreach($features as $feature)
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x {{ $feature->icon }} text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">{{ $feature->title }}</h5>
                        <p class="m-0">{{ $feature->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
