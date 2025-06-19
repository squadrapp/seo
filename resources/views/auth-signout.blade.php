@extends('partials.layouts.master_auth')

@section('title', 'Sign In | Urbix Admin & Dashboards Template')

@section('content')

<div class="container">
  <div class="row justify-content-center align-items-center min-vh-100 pt-20 pb-10">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card mx-xxl-8 shadow-none">
        <div class="card-body p-8 text-center">
          <div class="mb-6">
            <h3 class="fw-medium">You’ve been signed out</h3>
            <p class="text-muted">Thanks for visiting! You can sign in again anytime.</p>
          </div>
          <div class="mb-4">
            <img src="assets/images/auth/signout.png" alt="Signed out illustration" class="img-fluid w-256px">
          </div>
          <div class="d-grid gap-4">
            <a href="auth-signin" class="btn btn-primary w-100">Sign In Again</a>
            <a href="index" class="btn btn-outline-light w-100 text-muted"><i class="ri-home-4-line me-2"></i>Back to Homepage</a>
          </div>
        </div>
      </div>
      <p class="position-relative text-center fs-13 mb-0">©
        <script>document.write(new Date().getFullYear())</script> Urbix. Crafted with by Pixeleyez
      </p>
    </div>
  </div>
</div>

@endsection

@section('js')
@endsection