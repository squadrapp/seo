@extends('partials.layouts.master_auth')

@section('title', 'Two Step Verification | Urbix Admin & Dashboards Template')

@section('content')


<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100 pt-20 pb-10">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card mx-xxl-8 shadow-none">
                <div class="card-body p-8">
                    <h3 class="fw-medium text-center">Check your inbox 🔐</h3>
                    <p class="mb-8 text-muted text-center">Enter the 4-digit code we sent to your email.</p>
                    <form>
                        <div id="otp-container" class="d-flex align-items-center justify-content-center gap-2">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 1">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 2">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 3">
                            <input type="text" class="form-control text-center min-h-50px max-w-64px border rounded" placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]" aria-label="OTP digit 4">
                        </div>
                        <a href="auth-reset-password" class="btn btn-primary w-100 mt-6">Verify Email</a>
                    </form>
                    <p class="text-center mt-6 mb-0 text-muted fs-13">Didn't receive the code? <a href="auth-email-verify" class="link fw-semibold">Resend</a></p>
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