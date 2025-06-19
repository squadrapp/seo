@extends('partials.layouts.master_auth')

@section('title', 'Sign Up | Urbix Admin & Dashboards Template')

@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100 pt-20 pb-10">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card mx-xxl-8 shadow-none">
                <div class="card-body p-8">
                    <h3 class="fw-medium text-center">Let’s get started!</h3>
                    <p class="mb-8 text-muted text-center">Create Your Account in Minutes</p>
                    <form>
                        <div class="mb-4">
                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" placeholder="Password" required>
                                <button type="button" class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted toggle-password" id="toggle-password" data-target="password"><i class="ri-eye-off-line align-middle"></i></button>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="ConfirmPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password" required>
                                <button type="button" class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted toggle-password" id="toggle-password" data-target="ConfirmPassword"><i class="ri-eye-off-line align-middle"></i></button>
                            </div>
                        </div>
                        <div class="my-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="index" class="btn btn-primary w-100 mb-4">Sign Up</a>
                            <button type="button" class="btn btn-outline-light w-100 d-flex align-items-center gap-2 justify-content-center text-muted">
                                <img src="assets/images/google.png" alt="Google Logo" class="h-20px w-20px">Sign in with Google
                            </button>
                        </div>
                    </form>
                    <p class="text-center mt-6 mb-0 text-muted fs-13">Already have an account? <a href="auth-signin" class="link fw-semibold">Sign In here</a></p>
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