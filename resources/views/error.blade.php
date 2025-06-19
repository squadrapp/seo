@extends('partials.layouts.master2')

@section('title', 'Error | Urbix Admin & Dashboards Template')

@section('content')


<!-- START -->
<div>
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
    <div class="row position-relative justify-content-center align-items-center min-vh-100 position-relative">
      <div class="col-xl-8">
        <div class="text-center py-20 py-md-16">
          <img src="assets/images/vector/404.png" alt="Error" class="img-fluid mb-10">
          <h1 class="mb-4 fs-55 text-primary">Well, this is awkward...</h1>
          <p class="max-w-600px mx-auto fs-15 text-muted"> Oops! You don't have permission to view this page. Please make sure you're logged in with the right account or contact the admin for access.</p>
          <div class="mt-8 d-flex justify-content-center gap-2 fs-20">
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
@endsection