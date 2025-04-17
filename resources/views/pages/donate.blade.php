@extends('layouts.main')

@section('title', 'Donate Us')

@section('content')
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Donate Us</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Donate</p>
            </div>
        </div>
    </div>
</div>

<!-- Donate Section Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Support</h6>
            <h1>Help Preserve Newa Culture</h1>
            <p class="mt-3">Your contribution plays a vital role in preserving the rich heritage, language, art, and traditions of the Newa community. Every donation helps us organize cultural events, research projects, and education programs for future generations.</p>
        </div>
        <div class="row">
            <!-- Donation Form -->
            <div class="col-lg-7 mb-5">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('donate.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control p-4" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control p-4" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="amount" class="form-control p-4" placeholder="Donation Amount (NPR)" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="4" class="form-control p-4" placeholder="Message (Optional)"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-success py-3 px-5" type="submit">Donate Now</button>
                    </div>
                </form>
            </div>

            <!-- Bank Details or Digital Payment Info -->
            <div class="col-lg-5">
                <div class="bg-white p-4 shadow-sm">
                    <h5 class="text-primary mb-3">Bank Details</h5>
                    <p><strong>Account Name:</strong> Newa: Cultural Preservation Committee</p>
                    <p><strong>Account No:</strong> 123456789012</p>
                    <p><strong>Bank:</strong> NMB Bank, Lalitpur Branch</p>
                    <p><strong>SWIFT Code:</strong> NMBBNPKA</p>
                    <hr>
                    <h5 class="text-primary mb-3">Or Use Digital Wallet</h5>
                    <p><strong>eSewa ID:</strong> 9841182949</p>
                    <p><strong>Khalti ID:</strong> 9841182949</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donate Section End -->
@endsection
