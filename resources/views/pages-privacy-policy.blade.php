@extends('partials.layouts.master')

@section('title', 'Privacy Policy| Urbix Admin & Dashboards Template')
@section('title-sub', 'Page')
@section('pagetitle', 'Privacy Policy')

@section('content')

        <div class="row justify-content-center">
          <div class="col-12 col-xxl-10">
            <div class="card overflow-hidden">
              <div class="bg-primary-subtle">
                <div class="py-5 px-8 d-flex justify-content-between align-items-center">
                  <div>
                    <h5>Privacy and Policy</h5>
                    <p class="mb-2">Last update: 24 Jan, 2025</p>
                    <p class="mb-0">We value your privacy and protect your data responsibly.</p>
                  </div>
                  <img src="assets/images/vector/policy.jpg" alt="Lock image" class="w-112px">
                </div>
              </div>
              <div class="card-body">
                <p class="text-muted">
                  At <span class="fw-semibold text-body">New Admin</span> we are committed to respecting and protecting the privacy of your personal information. This Privacy Policy outlines the types of information we collect, how we use it, and the steps we take to ensure your privacy is maintained while using our website, services, and products. By using our services, you agree to the practices described in this policy. <br><br>
                  We continuously review our privacy practices to safeguard your data and uphold transparency. Whether you're browsing our site or signing up for our services, you can trust that your information is handled with care, integrity, and security.</p>
                <div>
                  <h6 class="mb-1">Information We Collect</h6>
                  <p class="text-muted mb-3">
                    We collect personal details like your name, email, phone number, and login credentials to manage your account and communication. We also gather usage data such as IP address, browser type, and device info to analyze performance, detect issues, and enhance user experience. Cookies and tracking technologies are used to remember your preferences and deliver relevant content. Payment data is securely processed via certified third-party providers.
                  </p>
                  <h6 class="mb-1">How We Use Your Data</h6>
                  <p class="text-muted mb-3">
                    Your data helps us deliver, maintain, and improve our services. We use it to personalize content, communicate with you, handle transactions, detect fraud, and ensure your account security. Aggregate insights are used to enhance performance and develop new features.
                  </p>
                  <h6 class="mb-1">How We Share Your Information</h6>
                  <p class="text-muted mb-3">
                    We never sell your personal information. We may share it with trusted service providers (e.g., payment processors, hosting platforms, support tools) who are contractually obligated to protect your data. We may also share information when required by law, or as part of a business merger, acquisition, or asset transfer.
                  </p>
                  <h6 class="mb-1">Your Rights & Choices</h6>
                  <ul class="list-group list-borderless mb-3">
                    <li class="list-group-item text-body"><i class="ri-checkbox-circle-line me-2 text-success"></i>Request access to or correction of your personal data</li>
                    <li class="list-group-item text-body"><i class="ri-checkbox-circle-line me-2 text-success"></i>Request deletion of your data, where applicable</li>
                    <li class="list-group-item text-body"><i class="ri-checkbox-circle-line me-2 text-success"></i>Opt-out of non-essential marketing communications</li>
                    <li class="list-group-item text-body"><i class="ri-checkbox-circle-line me-2 text-success"></i>Request a copy of your data in a portable format</li>
                  </ul>
                  <h6 class="mb-1">Data Security & Retention</h6>
                  <p class="text-muted mb-3">
                    We implement strong technical and organizational safeguards, such as encryption and access controls, to keep your data safe. While we strive for 100% security, no system is infallible. We keep your information only as long as needed for the purposes outlined in this policy or as required by law, after which it is deleted or anonymized.
                  </p>
                  <h6 class="mb-1">Additional Information</h6>
                  <ul class="list-group list-borderless mb-3">
                    <li class="list-group-item">
                      <strong>Third-Party Links:</strong> Our site may include links to third-party websites. We are not responsible for their privacy practices, so we encourage you to review their policies.
                    </li>
                    <li class="list-group-item">
                      <strong>Children’s Privacy:</strong> We do not knowingly collect data from children under 13. If we discover such data has been submitted, we will promptly delete it.
                    </li>
                    <li class="list-group-item">
                      <strong>Policy Updates:</strong> We may revise this Privacy Policy from time to time. Updates will be posted here with a revised “Last Updated” date. Please review periodically to stay informed.
                    </li>
                  </ul>
                  <p class="text-muted">Last updated: 24 Jan, 2025</p>
                </div>
                <p class="mb-2"><span class="fw-semibold">Contact Us: </span>If you have any questions or concerns regarding this Privacy Policy or our data practices, please contact us at</p>
                <p class="fw-semibold mb-2">Your Company Name</p>
                <p class="mb-1 text-body">123 Tech Lane, Suite 456 <br>
                  San Francisco, CA 94101</p>
                <p class="fw-semibold mb-2">Email: <a href="#!" class="link fw-normal link-primary text-body">privacy@techsolutions.com</a></p>
                <p class="fw-semibold mb-2">Phone: <span class="text-body fw-normal">+x (xxx) xxx-xxxx</span></p>
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="privacyPolicy" id="privacyPolicy">
                    <label class="form-check-label" for="privacyPolicy">
                      I agree with the <a href="javascript:void(0)" class="text-decoration-underline">Privacy Policy</a>
                    </label>
                  </div>
                  <div class="mt-3 mt-md-0 d-flex gap-2">
                    <button type="button" class="btn btn-outline-danger">Decline</button>
                    <button type="button" class="btn btn-primary">Accepted</button>
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