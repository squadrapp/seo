@extends('partials.layouts.master')

@section('title', 'Customer Deatils | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Customer Deatils')

@section('content')

<!-- begin::App -->

            <div class="row">
                <div class="col-12 col-xl-8 col-xxl-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transactions History</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-box table-responsive">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Transaction ID</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>2024-04-01</td>
                                        <td>TXN84756</td>
                                        <td>$120.00</td>
                                        <td><i class="ri-visa-line me-1"></i> Visa</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>
                                          <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>2024-03-27</td>
                                        <td>TXN83924</td>
                                        <td>$89.99</td>
                                        <td><i class="ri-mastercard-line me-1"></i> Mastercard</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>
                                          <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>2024-03-20</td>
                                        <td>TXN83012</td>
                                        <td>$45.50</td>
                                        <td><i class="ri-paypal-line me-1"></i> PayPal</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Failed</span></td>
                                        <td>
                                          <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>2024-03-15</td>
                                        <td>TXN82745</td>
                                        <td>$98.00</td>
                                        <td><i class="ri-visa-line me-1"></i> Visa</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>
                                          <button class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>5</td>
                                        <td>2024-03-10</td>
                                        <td>TXN82311</td>
                                        <td>$250.75</td>
                                        <td><i class="ri-mastercard-line me-1"></i> Mastercard</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>
                                          <button class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>6</td>
                                        <td>2024-03-03</td>
                                        <td>TXN81890</td>
                                        <td>$79.99</td>
                                        <td><i class="ri-paypal-line me-1"></i> PayPal</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Failed</span></td>
                                        <td>
                                          <button class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>7</td>
                                        <td>2024-02-25</td>
                                        <td>TXN81432</td>
                                        <td>$34.60</td>
                                        <td><i class="ri-visa-line me-1"></i> Visa</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>
                                          <button class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>8</td>
                                        <td>2024-02-18</td>
                                        <td>TXN81054</td>
                                        <td>$190.00</td>
                                        <td><i class="ri-mastercard-line me-1"></i> Mastercard</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>
                                          <button class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>9</td>
                                        <td>2024-02-10</td>
                                        <td>TXN80720</td>
                                        <td>$500.00</td>
                                        <td><i class="ri-bank-card-line me-1"></i> Bank Transfer</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>
                                          <button class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>10</td>
                                        <td>2024-02-02</td>
                                        <td>TXN80239</td>
                                        <td>$60.00</td>
                                        <td><i class="ri-paypal-line me-1"></i> PayPal</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Failed</span></td>
                                        <td>
                                          <button class="btn btn-light-primary icon-btn-sm"><i class="bi bi-eye"></i></button>
                                          <button class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>                                  
                            </div>
                            <div class="d-flex flex-wrap gap-3 align-items-center mt-5">
                                <div class="fw-medium"> Showing 1 - 10 of 21 Entries</div>
                                <div class="ms-auto">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#!">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#!">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#!">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-xxl-3">
                  <div class="card border shadow-sm">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                      <img src="assets/images/avatar/avatar-5.jpg" alt="Customer Avatar" class="rounded avatar-xl mb-4">
                      <h5 class="mb-1">Stanley Hudson</h5>
                      <p class="text-muted mb-3 fs-12">Customer ID: <span class="fw-semibold">CUS55229</span></p>
                      <span class="badge bg-primary-subtle text-primary">Premium Member</span>
                      <ul class="list-group list-borderless w-100 my-6">
                        <li class="list-group-item d-flex justify-content-between">
                          <strong>Email:</strong> stanley@gmail.com
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <strong>Status:</strong> <span class="badge bg-success-subtle text-success">Active</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <strong>Phone:</strong> +1 (555) 987-6543
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <strong>Address:</strong> 455 Paper St, Scranton, PA
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <strong>Last Purchase:</strong> $4,120
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <strong>Joined:</strong> 2021-07-30
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <strong>Total Orders:</strong> 23
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <strong>Referral Code:</strong> STAN2021
                        </li>
                      </ul>
                      <div class="w-100 p-4 rounded bg-info-subtle text-center">
                        <h6 class="fs-16 mb-2">Special Offer</h6>
                        <p class="mb-3 fs-13">Reward this customer with an exclusive 20% discount on their next purchase.</p>
                        <button class="btn btn-sm btn-info">Apply Discount</button>
                      </div>
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