@extends('partials.layouts.master_auth')

@section('title', 'Create Password | Urbix Admin & Dashboards Template')

@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100 pt-20 pb-10">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card mx-xxl-8 shadow-none">
                <div class="card-body p-8">
                    <h3 class="fw-medium text-center">Forgot your password?</h3>
                    <p class="mb-8 text-muted text-center">No worries! Enter your email and we'll send you a reset link.</p>
                    <form>
                        <div>
                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <a href="auth-email-verify" class="btn btn-primary w-full my-6">Create Password</a>
                    </form>
                    <p class="text-center mb-0 text-muted fs-13">I remember my password? <a href="auth-signin" class="link fw-semibold">Sign In here</a></p>
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