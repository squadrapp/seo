@extends('partials.layouts.master')

@section('title', 'Terms & Condition | Urbix Admin & Dashboards Template')
@section('title-sub', 'Page')
@section('pagetitle', 'Terms & Condition')

@section('content')

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0 fw-semibold">Terms & Condition</h6>
              </div>
              <div class="card-body">
                <p class="text-muted mb-4">
                  Welcome to <span class="fw-semibold text-body">New Admin!</span> These Terms and Conditions (“Terms”) govern your use of our website, products, and services. By accessing or using any part of our platform, you agree to follow these Terms. Please read them carefully to understand your rights and responsibilities.
                </p>
                <h6 class="mb-1">User Accounts:</h6>
                <ul class="list-group list-borderless mb-3">
                  <li class="list-group-item"><i class="ri-checkbox-circle-line me-2 text-success"></i>You must create an account to access certain features within the admin panel.</li>
                  <li class="list-group-item"><i class="ri-checkbox-circle-line me-2 text-success"></i>You are responsible for maintaining the confidentiality of your account credentials, including your username and password.</li>
                  <li class="list-group-item"><i class="ri-checkbox-circle-line me-2 text-success"></i>You agree to notify us immediately of any unauthorized use of your account.</li>
                </ul>
                <h6 class="mb-1">Content Management:</h6>
                <ul class="list-group list-borderless mb-3">
                  <li class="list-group-item"><i class="ri-checkbox-circle-line me-2 text-success"></i>You are responsible for all content you upload, manage, or distribute via the admin panel.</li>
                  <li class="list-group-item"><i class="ri-checkbox-circle-line me-2 text-success"></i>We reserve the right to monitor, remove, or modify any content that violates these Terms or is deemed inappropriate, offensive, or unlawful.</li>
                </ul>
                <h6 class="mb-1">Privacy and Data Security:</h6>
                <ul class="list-group list-borderless mb-3">
                  <li class="list-group-item"><i class="ri-checkbox-circle-line me-2 text-success"></i>We collect and process your data in accordance with our [Privacy Policy].</li>
                  <li class="list-group-item"><i class="ri-checkbox-circle-line me-2 text-success"></i>You are responsible for ensuring that the data you manage and store through the admin panel complies with all applicable laws and regulations.</li>
                </ul>
                <p class="text-muted"><strong class="text-body">Acceptance of Terms: </strong>By accessing or using our admin panel, you agree to these Terms and Conditions. If you do not agree to these terms, you must not use the services.</p>
                <p class="text-muted"><strong class="text-body">Eligibility: </strong>You must be at least 18 years old or the age of majority in your jurisdiction to use our admin panel and services. By using this platform, you represent that you meet these age requirements.</p>
                <p class="text-muted"><strong class="text-body">Termination: </strong>We may suspend or terminate your access to the admin panel at any time for violating these Terms or for any other reason at our sole discretion. Upon termination, your account and any associated data may be deleted.</p>
                <p class="text-muted"><strong class="text-body">Limitation of Liability: </strong>To the fullest extent permitted by law, [Your Company Name] will not be liable for any damages arising from the use or inability to use the admin panel, including but not limited to data loss, interruptions, or security breaches.</p>
                <p class="text-muted"><strong class="text-body">Modifications: </strong>We reserve the right to modify these Terms and Conditions at any time. Any changes will be effective immediately upon posting to this page, and your continued use of the admin panel will be deemed acceptance of those changes.</p>
                <p class="text-muted"><strong class="text-body">Governing Law: </strong>These Terms and Conditions shall be governed by and construed in accordance with the laws of [your country/state].</p>
                <p class="text-muted"><strong class="text-body">Contact Us: </strong>If you have any questions or concerns about these Terms, please contact us at [your contact information].</p>
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="termsConditions" id="termsConditions">
                    <label class="form-check-label" for="termsConditions">
                      I agree with the <a href="javascript:void(0)" class="text-decoration-underline">Terms & Conditions</a>
                    </label>
                  </div>
                  <div class="mt-3 mt-md-0 d-flex gap-2">
                    <button type="button" class="btn btn-outline-danger">Decline</button>
                    <button type="button" class="btn btn-primary">Accept</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>

@endsection

@section('js')
  <!-- App js -->
  <script src="assets/js/app.js"></script>

@endsection