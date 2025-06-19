@extends('partials.layouts.master_auth')

@section('title', 'Two Step Verification | Urbix Admin & Dashboards Template')

@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100 pt-20 pb-10">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card mx-xxl-8 shadow-none">
                <div class="card-body p-8">
                    <img src="assets/images/auth/email.png" alt="Email Image" class="h-56px w-56px mx-auto d-block mb-3">
                    <h3 class="fw-medium text-center">Two-Factor Authentication</h3>
                    <p class="text-muted text-center mb-8">6 digit OTP is send to mobile number <strong class="text-body">info@gmail.com</strong></p>
                    <form>
                        <div id="otp-container" class="d-flex align-items-center justify-content-center gap-2 mb-6">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 1">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 2">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 3">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 4">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 5">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 6">
                        </div>
                        <a href="auth-reset-password" class="btn btn-primary w-100">Reset Password</a>
                    </form>
                    <p class="text-center mt-6 mb-0 text-muted fs-13">Didn't receive the code? <a href="javascript:void(0)" class="link fw-semibold">Resend</a></p>
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

<script src="assets/js/auth/two-step-verification.init.js"></script>
@endsection