@extends('partials.layouts.master_auth')

@section('title', 'Reset Password | Urbix Admin & Dashboards Template')

@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100 pt-20 pb-10">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card mx-xxl-8 shadow-none">
                <div class="card-body p-8">
                    <h3 class="fw-medium text-center">Back in Control</h3>
                    <p class="mb-8 text-muted text-center">Log in with the new password once it's set.</p>
                    <form>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="position-relative">
                              <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                              <button type="button" class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted toggle-password" id="toggle-password" data-target="password"><i class="ri-eye-off-line align-middle"></i></button>
                            </div>
                          </div>
                          <div>
                            <label for="confirmPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                            <div class="position-relative">
                              <input type="password" class="form-control" id="confirmPassword" placeholder="Re-enter your password" required>
                              <button type="button" class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted toggle-password" data-target="confirmPassword">
                                <i class="ri-eye-off-line align-middle"></i>
                              </button>
                            </div>
                          </div>
                        <a href="index" class="btn btn-primary w-100 mt-6">Set Password</a>
                    </form>
                    <p class="text-center mb-0 text-muted fs-13 mt-6">Back to <a href="auth-signup" class="link fw-semibold">Sign in</a></p>
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
<script src="assets/js/auth/auth.init.js"></script>
@endsection