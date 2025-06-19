@extends('partials.layouts.master')

@section('title', 'Billing & Subscription | Urbix Admin & Dashboards Template')
@section('title-sub', 'Pages')
@section('pagetitle', 'Billing & Subscription')

@section('content')

      <div class="card shadow-none border">
        <div class="card-body">
          <div class="d-flex justify-content-between flex-wrap gap-4 align-items-center">
            <div>
              <h6 class="mb-2 fw-semibold">Billing Overview</h6>
              <p class="mb-0 text-muted">Higher plans offer higher message request limit, additional features, and much more.</p>
            </div>
            <div class="d-flex align-items-center gap-2">
              <button type="button" class="btn btn-shadow-dark">Chat to us</button>
              <button type="button" class="btn btn-primary">View plans</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row g-5">
            <div class="col-xl-5">
              <h6 class="mb-3">Payment Methods</h6>
              <p class="text-muted max-w-500px mb-5">Manage your saved payment methods by selecting a default card for automatic billing. You can also add new cards, update existing ones, or remove those you no longer use.</p>
              <a href="#!" class="link-primary">View Full Billing History</a>
            </div>
            <div class="col-xl-7">
                <div class="main-img-checkbox">
                  <div class="card-wrapper overflow-hidden">
                      <div class="img-checkbox billings-card mb-4">
                        <input class="main-img-cover form-check-input float-end" type="radio" id="img-check-1" type="checkbox" checked>
                        <label class="form-check-label mb-0 p-4" for="img-check-1">
                          <div class="d-flex align-items-start gap-4 mb-3">
                            <img src="assets/images/cards/visa.png" alt="Visa" class="w-56px">
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Visa Ending in 1234</h6>
                              <div class="text-muted fs-13">Cardholder: Sarah Williams</div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between gap-8 align-items-center">
                            <p class="mb-0 text-muted">Expires: 10/20/2022</p>
                            <a href="#!" class="link-primary">Primary Card</a>
                          </div>
                        </label>
                      </div>
                  </div>  
                  <div class="card-wrapper overflow-hidden">
                      <div class="img-checkbox billings-card mb-4">
                        <input class="main-img-cover form-check-input float-end" type="radio" id="img-check-2" type="checkbox">
                        <label class="form-check-label mb-0 p-4" for="img-check-2">
                          <div class="d-flex align-items-start gap-4 mb-3">
                            <img src="assets/images/cards/mastercard.png" alt="MasterCard" class="w-56px">
                            <div class="flex-grow-1">
                              <h6 class="mb-1">MasterCard Ending in 6200</h6>
                              <div class="text-muted fs-13">Cardholder: Sarah Williams</div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between gap-8 align-items-center">
                            <p class="mb-0 text-muted">Expires: 11/05/2023</p>
                            <a href="#!" class="link-primary">Set as Primary</a>
                          </div>
                        </label>
                      </div>
                  </div>  
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row g-5">
            <div class="col-xl-5">
              <h6 class="mb-3">Current Plan</h6>
              <p class="text-muted max-w-500px mb-5">You are currently subscribed to the <span class="fw-semibold text-primary">Basic</span> plan. This plan includes essential features for small teams and limited message quotas.</p>
              <div class="d-flex justify-content-between fs-13 mb-1 w-75">
                <span class="fs-13 fw-semibold">Duration</span>
                <span class="fs-13">12 days/30-day</span>
              </div>
              <div class="progress progress-sm" style="width: 75%" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar w-100"></div>
              </div>
              <div class="text-muted fs-12 mt-1 mb-4">You have 18 days left before your current plan renews.</div>
              <a href="#!" class="link-primary">Compare All Plans</a>
            </div>
            <div class="col-xl-7">
                <div class="main-img-checkbox">
                  <div class="card-wrapper overflow-hidden">
                      <div class="img-checkbox billings-card mb-4">
                        <input class="main-img-cover form-check-input float-end" type="radio" id="img-check-3" type="checkbox" checked>
                        <label class="form-check-label mb-0 p-4" for="img-check-3">
                         <div class="d-flex justify-content-between align-items-start mb-3">
                          <div>
                            <h6 class="mb-1">Basic Plan</h6>
                            <div class="text-muted fs-13"><strong class="text-body">$19.00</strong>/Monthly</div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between gap-8 align-items-center">
                          <p class="mb-0 text-muted text-truncate">Renews on: 05/25/2025</p>
                          <a href="#!" class="link-primary">Upgrade Plan</a>
                        </div>
                        </label>
                      </div>
                  </div>  
                  <div class="card-wrapper overflow-hidden">
                      <div class="img-checkbox billings-card mb-4">
                        <input class="main-img-cover form-check-input float-end" type="radio" id="img-check-4" type="checkbox">
                        <label class="form-check-label mb-0 p-4" for="img-check-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                              <div>
                                <h6 class="mb-1">Pro Plan</h6>
                                <div class="text-muted fs-13"><strong class="text-body">$49.00</strong>/Monthly</div>
                              </div>
                            </div>
                            <div class="d-flex justify-content-between gap-8 align-items-center">
                              <p class="mb-0 text-muted text-truncate">Ideal for growing teams needing additional quota and advanced support.</p>
                              <a href="#!" class="link-primary">Upgrade</a>
                            </div>
                        </label>
                      </div>
                  </div>  
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-between g-5">
            <div class="col-xl-5">
              <h6>Contact Details</h6>
              <p class="text-muted max-w-500px mb-5">Please provide the contact person we should reach out to in case we need to verify account activity, send billing notifications.</p>
              <a href="#!" class="link-primary">Manage Contact Details</a>
            </div>
            <div class="col-xl-7 col-xxl-5">
              <div class="d-flex align-items-center flex-wrap p-5 border rounded">
                <div class="d-flex gap-5 py-4 w-auto mx-auto">
                  <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image" class="rounded-circle h-64px w-64px">
                  <div>
                    <h6 class="mb-1">Sarah Williams</h6>
                    <p class="mb-1 text-muted">wsarah@gmail.com</p>
                    <p class="mb-0 text-muted">Atlanta | Baltimore | D.C.</p>
                  </div>
                </div>
                <div class="py-4 w-max mx-auto">
                  <h6 class="mb-1">Alternative Email</h6>
                  <a href="#!" class="text-muted d-block mb-2">billing@sarahwillli.com</a>
                  <span class="badge bg-success">Active</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-4">
          <h5 class="card-title mb-0 flex-grow-1">Billing History</h5>
          <div class="d-flex flex-wrap gap-3">
            <div class="form-icon flex-shrink-0">
              <input type="email" class="form-control form-control-icon" id="inputExample26" placeholder="Search for ...">
              <i class="bi bi-search"></i>
            </div>
            <button class="btn btn-light-success"><i class="bi bi-funnel me-1"></i> Filter</button>
            <button class="btn btn-light-info"><i class="bi bi-funnel me-1"></i> Export</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-box table-responsive">
            <table class="table align-middle text-nowrap mb-0">
              <thead class="table-light">
                <tr>
                  <th scope="col">Purchase ID</th>
                  <th scope="col">Client</th>
                  <th scope="col">Plan Name</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Balance</th>
                  <th scope="col">Purchase Date</th>
                  <th scope="col">End Date</th>
                  <th scope="col" class="text-end">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#!" class="fw-semibold link-primary">#UB-1001</a></td>
                  <td class="d-flex align-items-center gap-3">
                    <img src="assets/images/avatar/avatar-1.jpg" alt="Avtar Image" class="avatar-md rounded-pill">
                    <div>
                      <h6 class="mb-1">Web Development Bootcamp</h6>
                      <p class="fs-12 mb-0 text-muted">instructor: <span class="fw-semibold">John Doe</span></p>
                    </div>
                  </td>
                  <td><span class="badge bg-light text-body">Starter Plan</span></td>
                  <td>$29.99</td>
                  <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                  <td>2024-01-01</td>
                  <td>2024-12-31</td>
                  <td class="text-end">
                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><a href="#!" class="fw-semibold link-primary">#UB-1002</a></td>
                  <td class="d-flex align-items-center gap-3">
                    <img src="assets/images/avatar/avatar-2.jpg" alt="Avtar Image" class="avatar-md rounded-pill">
                    <div>
                      <h6 class="mb-1">Fullstack Developer Course</h6>
                      <p class="fs-12 mb-0 text-muted">instructor: <span class="fw-semibold">Jane Smith</span></p>
                    </div>
                  </td>
                  <td><span class="badge bg-light text-body">Pro Plan</span></td>
                  <td>$59.99</td>
                  <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                  <td>2024-02-10</td>
                  <td>2025-02-10</td>
                  <td class="text-end">
                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                  </td>
                </tr>

                <tr>
                  <td><a href="#!" class="fw-semibold link-primary">#UB-1003</a></td>
                  <td class="d-flex align-items-center gap-3">
                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avtar Image" class="avatar-md rounded-pill">
                    <div>
                      <h6 class="mb-1">UI/UX Design Masterclass</h6>
                      <p class="fs-12 mb-0 text-muted">instructor: <span class="fw-semibold">Alex Johnson</span></p>
                    </div>
                  </td>
                  <td><span class="badge bg-light text-body">Basic Plan</span></td>
                  <td>$19.99</td>
                  <td><span class="badge bg-danger-subtle text-danger">Overdue</span></td>
                  <td>2023-11-15</td>
                  <td>2024-11-15</td>
                  <td class="text-end">
                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                  </td>
                </tr>

                <tr>
                  <td><a href="#!" class="fw-semibold link-primary">#UB-1004</a></td>
                  <td class="d-flex align-items-center gap-3">
                    <img src="assets/images/avatar/avatar-4.jpg" alt="Avtar Image" class="avatar-md rounded-pill">
                    <div>
                      <h6 class="mb-1">Data Science Bootcamp</h6>
                      <p class="fs-12 mb-0 text-muted">instructor: <span class="fw-semibold">Emily Carter</span></p>
                    </div>
                  </td>
                  <td><span class="badge bg-light text-body">Enterprise Plan</span></td>
                  <td>$149.99</td>
                  <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                  <td>2024-03-20</td>
                  <td>2025-03-20</td>
                  <td class="text-end">
                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                  </td>
                </tr>

                <tr>
                  <td><a href="#!" class="fw-semibold link-primary">#UB-1005</a></td>
                  <td class="d-flex align-items-center gap-3">
                    <img src="assets/images/avatar/avatar-5.jpg" alt="Avtar Image" class="avatar-md rounded-pill">
                    <div>
                      <h6 class="mb-1">React.js Advanced</h6>
                      <p class="fs-12 mb-0 text-muted">instructor: <span class="fw-semibold">Chris Brown</span></p>
                    </div>
                  </td>
                  <td><span class="badge bg-light text-body">Starter Plan</span></td>
                  <td>$39.99</td>
                  <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                  <td>2024-04-05</td>
                  <td>2025-04-05</td>
                  <td class="text-end">
                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><a href="#!" class="fw-semibold link-primary">#UB-1006</a></td>
                  <td class="d-flex align-items-center gap-3">
                    <img src="assets/images/avatar/avatar-6.jpg" alt="Avtar Image" class="avatar-md rounded-pill">
                    <div>
                      <h6 class="mb-1">Python for Beginners</h6>
                      <p class="fs-12 mb-0 text-muted">instructor: <span class="fw-semibold">Sophia Lee</span></p>
                    </div>
                  </td>
                  <td><span class="badge bg-light text-body">Basic Plan</span></td>
                  <td>$24.99</td>
                  <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                  <td>2024-03-01</td>
                  <td>2025-03-01</td>
                  <td class="text-end">
                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="d-flex flex-wrap gap-3 align-items-center mt-5">
            <div class="fw-medium"> Showing 1 - 10 of 18 Entries</div>
            <div class="ms-auto">
              <nav aria-label="Page navigation example">
                <ul class="pagination pagination-primary mb-0">
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">
                      <i class="ri-arrow-left-s-line fw-semibold"></i>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                  <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">
                      <i class="ri-arrow-right-s-line fw-semibold"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

    </div><!--End container-fluid-->
  </main><!--End app-wrapper-->

@endsection

@section('js')

<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection