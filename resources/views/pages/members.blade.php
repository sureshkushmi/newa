@extends('layouts.main')

@section('title', 'Programmes')

@section('content')
<div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
                <h3 class="display-4 text-white text-uppercase">Members</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Members</p>
                </div>
            </div>
        </div>
    </div>
<div class="container my-5">
    <div class="text-center mb-4">
        <h3 class="text-primary">समिति सदस्यहरु</h3>
    </div>

    <div class="row">
        <!-- Member 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('img/members/ram_bahadur.jpg') }}" class="card-img-top" alt="रामबहादुर श्रेष्ठ">
                <div class="card-body">
                    <h5 class="card-title">नायः / अध्यक्ष</h5>
                    <p class="mb-1">रामबहादुर श्रेष्ठ</p>
                    <p class="text-muted">९८५१११९७४३</p>
                </div>
            </div>
        </div>

        <!-- Member 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('img/members/rameshwor_shrestha.jpg') }}" class="card-img-top" alt="रामेश्वर श्रेष्ठ">
                <div class="card-body">
                    <h5 class="card-title">नखः / उपाध्यक्ष</h5>
                    <p class="mb-1">रामेश्वर श्रेष्ठ</p>
                    <p class="text-muted">९८४९१४८७०३</p>
                </div>
            </div>
        </div>

        <!-- Member 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('img/members/rajesh_shrestha.jpg') }}" class="card-img-top" alt="राजेश श्रेष्ठ">
                <div class="card-body">
                    <h5 class="card-title">थुनः / सचिव</h5>
                    <p class="mb-1">राजेश श्रेष्ठ</p>
                    <p class="text-muted">९८४१२३४५६७</p>
                </div>
            </div>
        </div>

        <!-- Member 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('img/members/kishor_maharjan.jpg') }}" class="card-img-top" alt="किशोर महर्जन">
                <div class="card-body">
                    <h5 class="card-title">थुलाः / कोषाध्यक्ष</h5>
                    <p class="mb-1">किशोर महर्जन</p>
                    <p class="text-muted">९८०१२३४५६७</p>
                </div>
            </div>
        </div>

        <!-- Member 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('img/members/bijaya_manjita.jpg') }}" class="card-img-top" alt="बिजया मञ्जिता श्रेष्ठ">
                <div class="card-body">
                    <h5 class="card-title">सदस्य</h5>
                    <p class="mb-1">बिजया मञ्जिता श्रेष्ठ</p>
                    <p class="text-muted">९८०१११२२३३</p>
                </div>
            </div>
        </div>

        <!-- Member 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('img/members/rashmi_maharjan.jpg') }}" class="card-img-top" alt="रश्मि महर्जन">
                <div class="card-body">
                    <h5 class="card-title">सदस्य</h5>
                    <p class="mb-1">रश्मि महर्जन</p>
                    <p class="text-muted">९८४०००११२२</p>
                </div>
            </div>
        </div>

        <!-- Member 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('img/members/prakash_shrestha.jpg') }}" class="card-img-top" alt="प्रकाश श्रेष्ठ">
                <div class="card-body">
                    <h5 class="card-title">सदस्य</h5>
                    <p class="mb-1">प्रकाश श्रेष्ठ</p>
                    <p class="text-muted">९८१२२२३३४४</p>
                </div>
            </div>
        </div>

        <!-- Member 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('img/members/santosh_maharjan.jpg') }}" class="card-img-top" alt="सन्तोष महर्जन">
                <div class="card-body">
                    <h5 class="card-title">सदस्य</h5>
                    <p class="mb-1">सन्तोष महर्जन</p>
                    <p class="text-muted">९८०९९९८८७७</p>
                </div>
            </div>
        </div>

        <!-- Member 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('img/members/roshan_shrestha.jpg') }}" class="card-img-top" alt="रोशन श्रेष्ठ">
                <div class="card-body">
                    <h5 class="card-title">सदस्य</h5>
                    <p class="mb-1">रोशन श्रेष्ठ</p>
                    <p class="text-muted">९८४७७७६६५५</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
