@extends('partials.layouts.master')

@section('title', 'Customer | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Customer')

@section('content')

<!-- begin::App -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">   
                        <div class="card-header flex-wrap gap-4">
                          <h4 class="card-title">Customer List</h4>
                          <div class="d-flex gap-3">
                              <div class="form-icon right">
                                  <input type="text" id="search-input" class="form-control" placeholder="Search...">
                                  <i class="ri-search-2-line search-icon"></i>
                              </div>
                              <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ri-user-settings-line me-1"></i>Customer Actions
                                </button>
                                <ul class="dropdown-menu">
                                  <li class="dropdown-item"><i class="ri-user-3-line me-2"></i> View Profile</li>
                                  <li class="dropdown-item"><i class="ri-mail-send-line me-2"></i> Send Email</li>
                                  <li class="dropdown-item"><i class="ri-user-add-line me-2"></i> Assign Role</li>
                                  <li class="dropdown-item"><i class="ri-star-line me-2"></i> Mark as VIP</li>
                                  <li class="dropdown-item"><i class="ri-delete-bin-line me-2"></i> Remove Customer</li>
                                </ul>
                              </div>                              
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="table-box table-responsive">
                                <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                        <th>Membership</th>
                                        <th>Total Purchases</th>
                                        <th>Registered</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                        <td>1</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar 1" class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-1">Michael Scott</h6>
                                                <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS12345</span></p>
                                            </div>
                                        </td>
                                        <td>michael@gmail.com</td>
                                        <td><span class="badge bg-primary-subtle text-primary">Premium</span></td>
                                        <td>$2,450</td>
                                        <td>2023-06-15</td>
                                        <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                  </tr>
                                  <tr>
                                        <td>2</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar 2" class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-1">Pam Beesly</h6>
                                                <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS67890</span></p>
                                            </div>
                                        </td>
                                        <td>pam@gmail.com</td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">Standard</span></td>
                                        <td>$1,180</td>
                                        <td>2022-11-09</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                        </td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td class="d-flex align-items-center gap-3">
                                          <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar 3" class="avatar-md rounded-pill">
                                          <div>
                                              <h6 class="mb-1">Jim Halpert</h6>
                                              <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS34871</span></p>
                                          </div>
                                      </td>
                                      <td>jim@gmail.com</td>
                                      <td><span class="badge bg-info-subtle text-info">Gold</span></td>
                                      <td>$3,020</td>
                                      <td>2023-01-03</td>
                                      <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                      <td>
                                          <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                          <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td class="d-flex align-items-center gap-3">
                                          <img src="assets/images/avatar/avatar-6.jpg" alt="Avatar 4" class="avatar-md rounded-pill">
                                          <div>
                                              <h6 class="mb-1">Dwight Schrute</h6>
                                              <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS95713</span></p>
                                          </div>
                                      </td>
                                      <td>dwight@gmail.com</td>
                                      <td><span class="badge bg-secondary-subtle text-secondary">Standard</span></td>
                                      <td>$1,540</td>
                                      <td>2022-09-20</td>
                                      <td><span class="badge bg-danger-subtle text-danger">Blocked</span></td>
                                      <td>
                                          <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                          <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td class="d-flex align-items-center gap-3">
                                          <img src="assets/images/avatar/avatar-7.jpg" alt="Avatar 5" class="avatar-md rounded-pill">
                                          <div>
                                              <h6 class="mb-1">Angela Martin</h6>
                                              <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS78321</span></p>
                                          </div>
                                      </td>
                                      <td>angela@gmail.com</td>
                                      <td><span class="badge bg-warning-subtle text-warning">Basic</span></td>
                                      <td>$780</td>
                                      <td>2024-02-14</td>
                                      <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                      <td>
                                          <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                          <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td class="d-flex align-items-center gap-3">
                                          <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar 6" class="avatar-md rounded-pill">
                                          <div>
                                              <h6 class="mb-1">Stanley Hudson</h6>
                                              <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS55229</span></p>
                                          </div>
                                      </td>
                                      <td>stanley@gmail.com</td>
                                      <td><span class="badge bg-primary-subtle text-primary">Premium</span></td>
                                      <td>$4,120</td>
                                      <td>2021-07-30</td>
                                      <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                      <td>
                                          <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                          <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                      </td>
                                  </tr>  
                                  <tr>
                                    <td>7</td>
                                    <td class="d-flex align-items-center gap-3">
                                        <img src="assets/images/avatar/avatar-9.jpg" alt="Avatar 7" class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Michael Scott</h6>
                                            <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS55230</span></p>
                                        </div>
                                    </td>
                                    <td>michael@gmail.com</td>
                                    <td><span class="badge bg-success-subtle text-success">Standard</span></td>
                                    <td>$3,200</td>
                                    <td>2022-02-15</td>
                                    <td><span class="badge bg-warning-subtle text-warning">Inactive</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="d-flex align-items-center gap-3">
                                        <img src="assets/images/avatar/avatar-10.jpg" alt="Avatar 8" class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Dwight Schrute</h6>
                                            <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS55231</span></p>
                                        </div>
                                    </td>
                                    <td>dwight@gmail.com</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Basic</span></td>
                                    <td>$1,500</td>
                                    <td>2021-11-05</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Inactive</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="d-flex align-items-center gap-3">
                                        <img src="assets/images/avatar/avatar-11.jpg" alt="Avatar 9" class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Jim Halpert</h6>
                                            <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS55232</span></p>
                                        </div>
                                    </td>
                                    <td>jim@gmail.com</td>
                                    <td><span class="badge bg-info-subtle text-info">Premium</span></td>
                                    <td>$4,000</td>
                                    <td>2022-01-25</td>
                                    <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="d-flex align-items-center gap-3">
                                        <img src="assets/images/avatar/avatar-12.jpg" alt="Avatar 10" class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Pam Beesly</h6>
                                            <p class="fs-12 mb-0 text-muted">Customer ID: <span class="fw-semibold">CUS55233</span></p>
                                        </div>
                                    </td>
                                    <td>pam@gmail.com</td>
                                    <td><span class="badge bg-warning-subtle text-warning">Standard</span></td>
                                    <td>$2,750</td>
                                    <td>2022-03-19</td>
                                    <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                    <td>
                                        <button type="button" class="btn btn-light-primary icon-btn-sm"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-light-danger icon-btn-sm"><i class="ri-delete-bin-line"></i></button>
                                    </td>
                                </tr>                                                      
                                </tbody>
                                </table>
                            </div>
                            <div class="d-flex flex-wrap gap-3 align-items-center mt-5">
                                <div class="fw-medium"> Showing 1 - 10 of 18 Entries</i></div>
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
            </div>

        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection