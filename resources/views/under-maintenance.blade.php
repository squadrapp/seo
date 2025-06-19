@extends('partials.layouts.master2')

@section('title', 'Under Maintenance | Urbix Admin & Dashboards Template')

@section('content')


<!-- START -->
<div>
    <img src="assets/images/vector/launch.png" alt="Startup Plan" class="launch-img object-fit-cover animate-bounce d-none d-xl-block">
    <div class="floating-shape animate-circle shape-square square-1 d-none d-lg-block"></div>
    <div class="floating-shape animate-circle shape-square square-2 d-none d-lg-block"></div>
    <div class="floating-shape animate-circle shape-triangle triangle-1 d-none d-lg-block"></div>
    <div class="floating-shape animate-circle shape-triangle triangle-2 d-none d-lg-block"></div>
    <div class="px-3 px-md-8 py-5 position-absolute top-0 d-flex justify-content-between align-items-center w-100 z-1">
        <a href="index" class="d-flex align-items-end logo-main">
            <img height="35" class="logo-dark" alt="Dark Logo" src="assets/images/logo-md.png">
            <h3 class="text-body-emphasis fw-bolder mb-0 ms-1">Urbix</h3>
          </a>
        <a href="index" class="link-primary"><i class="ri-arrow-left-line me-2"></i>Back</a>
    </div>
    <div class="container">
        <div class="row position-relative justify-content-center align-items-center min-vh-100">
            <div class="col-xl-8">
                <div class="text-center py-20 py-md-16">
                    <img src="assets/images/vector/maintenance.png" alt="Under Maintenance" class="img-fluid w-320px mb-12">
                    <h1 class="mb-4 fs-55 text-primary">We’re Under Maintenance</h1>
                    <p class="max-w-600px mx-auto fs-15 text-muted">Our site is currently undergoing scheduled maintenance to bring you an even better experience. We’ll be back shortly. Thanks for your patience!</p>
                    <div class="mt-12 d-flex justify-content-center gap-2 fs-20">
                        <a href="#!" class="btn btn-primary icon-btn rounded-pill"><i class="bi bi-facebook"></i></a>
                        <a href="#!" class="btn btn-primary icon-btn rounded-pill"><i class="bi bi-twitter-x"></i></a>
                        <a href="#!" class="btn btn-primary icon-btn rounded-pill"><i class="bi bi-instagram"></i></a>
                        <a href="#!" class="btn btn-primary icon-btn rounded-pill"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="assets/js/app.js"></script>

@endsection