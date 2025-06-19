@extends('partials.layouts.master')

@section('title', 'School | Urbix Admin & Dashboards Template')
@section('title-sub', 'Dashboard')
@section('pagetitle', 'School')
@section('css')
 <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">
    <!-- Picker CSS -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection
@section('content')


                <div class="row">
                    <div class="col-xxl-8">
                        <div class="row">
                            <div class="col-xxl col-sm-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body bg-info-subtle position-relative z-1">
                                        <div class="d-flex gap-2">
                                            <div class="school-icon bg-info d-flex justify-content-center align-items-center fs-4">
                                                <i class="ri-graduation-cap-line" id="hexagon"></i>
                                            </div>
                                            <div class="text-center">
                                                <span class="d-block fw-semibold mb-2 fs-5">Total Students</span>
                                                <h4 class="mb-0 fw-semibold">1220</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl col-sm-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body bg-primary-subtle position-relative z-1">
                                        <div class="d-flex gap-2">
                                            <div class="school-icon bg-primary d-flex justify-content-center align-items-center fs-4">
                                                <i class="ri-graduation-cap-line" id="hexagon"></i>
                                            </div>
                                            <div class="text-center">
                                                <span class="d-block fw-semibold mb-2 fs-5">Total Students</span>
                                                <h4 class="mb-0 fw-semibold">1220</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl col-sm-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body bg-danger-subtle position-relative z-1">
                                        <div class="d-flex gap-2">
                                            <div class="school-icon bg-danger d-flex justify-content-center align-items-center fs-4">
                                                <i class="ri-graduation-cap-line" id="hexagon"></i>
                                            </div>
                                            <div class="text-center">
                                                <span class="d-block fw-semibold mb-2 fs-5">Total Students</span>
                                                <h4 class="mb-0 fw-semibold">1220</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card card-h-100">
                                    <div class="card-header">
                                        <h4>All Expenses</h4>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="expenses-table table-box table-responsive" data-simplebar>
                                            <table class="table table-hover text-nowrap">
                                                <thead class="table-light border-0">
                                                    <tr>
                                                        <th class="text-muted">ID No</th>
                                                        <th class="text-muted">Expense Type</th>
                                                        <th class="text-muted">Amount</th>
                                                        <th class="text-muted">Status</th>
                                                        <th class="text-muted">E-mail</th>
                                                        <th class="text-muted">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-semibold">#3055</td>
                                                        <td class="fw-semibold">Salary</td>
                                                        <td class="fw-semibold">$300.00</td>
                                                        <td class="py-3"><span class="badge bg-danger px-3 rounded-3">Due</span></td>
                                                        <td class="fw-semibold">kazifahim93@gmail.com</td>
                                                        <td class="fw-semibold">20/06/2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">#3056</td>
                                                        <td class="fw-semibold">Exam Fee</td>
                                                        <td class="fw-semibold">$500.00</td>
                                                        <td class="py-3"><span class="badge bg-success px-3 rounded-3">Paid</span></td>
                                                        <td class="fw-semibold">kazifahim93@gmail.com</td>
                                                        <td class="fw-semibold">20/06/2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">#3057</td>
                                                        <td class="fw-semibold">Library Fee</td>
                                                        <td class="fw-semibold">$600.00</td>
                                                        <td class="py-3"><span class="badge bg-success px-3 rounded-3">Paid</span></td>
                                                        <td class="fw-semibold">kazifahim93@gmail.com</td>
                                                        <td class="fw-semibold">20/06/2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">#3058</td>
                                                        <td class="fw-semibold">Class Test Fee</td>
                                                        <td class="fw-semibold">$700.00</td>
                                                        <td class="py-3"><span class="badge bg-danger px-3 rounded-3">Due</span></td>
                                                        <td class="fw-semibold">kazifahim93@gmail.com</td>
                                                        <td class="fw-semibold">20/06/2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">#3059</td>
                                                        <td class="fw-semibold">Meeting</td>
                                                        <td class="fw-semibold">$800.00</td>
                                                        <td class="py-3"><span class="badge bg-danger px-3 rounded-3">Due</span></td>
                                                        <td class="fw-semibold">kazifahim93@gmail.com</td>
                                                        <td class="fw-semibold">20/06/2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">#3060</td>
                                                        <td class="fw-semibold">Extra Fee</td>
                                                        <td class="fw-semibold">$500.00</td>
                                                        <td class="py-3"><span class="badge bg-danger px-3 rounded-3">Due</span></td>
                                                        <td class="fw-semibold">kazifahim93@gmail.com</td>
                                                        <td class="fw-semibold">20/06/2017</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card card-h-100">
                                    <div class="card-header">
                                        <h4>Top Performer</h4>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs-bordered mb-4" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Week</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Month</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Year</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade performer-table show active" data-simplebar id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                                <div class="table-box table-responsive">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead class="table-light border-0">
                                                            <tr>
                                                                <th class="text-muted">Photo <span class="ms-3">Name</span></th>
                                                                <th class="text-muted">ID : Number</th>
                                                                <th class="text-muted">Standard</th>
                                                                <th class="text-muted">Rank</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-1.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Enos Schimel</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 4278</td>
                                                                <td class="fw-semibold">6th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-2.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Cayla seylumhm</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 5982</td>
                                                                <td class="fw-semibold">5th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-3.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Kathlyn hishn</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 4568</td>
                                                                <td class="fw-semibold">7th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-4.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Kathlyn hishn</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 9563</td>
                                                                <td class="fw-semibold">8th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-5.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Enos Schimel</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 6598</td>
                                                                <td class="fw-semibold">9th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade performer-table" data-simplebar id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                                <div class="table-box table-responsive">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead class="table-light border-0">
                                                            <tr>
                                                                <th class="text-muted">Photo <span class="ms-3">Name</span></th>
                                                                <th class="text-muted">ID : Number</th>
                                                                <th class="text-muted">Standard</th>
                                                                <th class="text-muted">Rank</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-1.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Enos Schimel</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 4278</td>
                                                                <td class="fw-semibold">6th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-2.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Cayla seylumhm</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 2347</td>
                                                                <td class="fw-semibold">7th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-3.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Kathlyn hishn</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 5940</td>
                                                                <td class="fw-semibold">8th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-4.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Kathlyn hishn</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 5959</td>
                                                                <td class="fw-semibold">9th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-5.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Enos Schimel</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 4867</td>
                                                                <td class="fw-semibold">6th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade performer-table" data-simplebar id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                                <div class="table-box table-responsive">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead class="table-light border-0">
                                                            <tr>
                                                                <th class="text-muted">Photo <span class="ms-3">Name</span></th>
                                                                <th class="text-muted">ID : Number</th>
                                                                <th class="text-muted">Standard</th>
                                                                <th class="text-muted">Rank</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-1.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Enos Schimel</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 7985</td>
                                                                <td class="fw-semibold">6th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-2.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Cayla seylumhm</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 4568</td>
                                                                <td class="fw-semibold">7th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-3.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Kathlyn hishn</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 1256</td>
                                                                <td class="fw-semibold">8th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-4.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Kathlyn hishn</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 3498</td>
                                                                <td class="fw-semibold">9th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fw-semibold">
                                                                    <img src="assets/images/avatar/avatar-5.jpg" class="avatar-md rounded-circle" alt="Avatar Image">
                                                                    <span class="ms-3">Enos Schimel</span>
                                                                </td>
                                                                <td class="fw-semibold">ID: 2654</td>
                                                                <td class="fw-semibold">6th Class</td>
                                                                <td>
                                                                    <div class="w-100">
                                                                        <div class="d-flex justify-content-between align-items-center fs-13">
                                                                            <p class="text-danger mb-1">98.68%</p>
                                                                        </div>
                                                                        <div class="progress progress-sm">
                                                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Attendance</h4>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="attendanceChart"></div>
                                        <div class="d-flex align-items-center">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between align-items-center fs-13">
                                                    <p class="text-muted mb-1">Students</p>
                                                </div>
                                                <div>
                                                    <h5 class="text-primary">84%</h5>
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between align-items-center fs-13">
                                                    <p class="text-muted mb-1">Teachers</p>
                                                </div>
                                                <div>
                                                    <h5 class="text-primary opacity-25">91%</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Income & Expense</h4>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="w-50">
                                            <h1>$21,087.45</h1>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <span class="text-muted fs-18">Total Expense <i class="ri-error-warning-fill"></i></span>
                                                    <h3 class="text-danger">-$21,087.45</h3>
                                                </div>
                                                <div>
                                                    <span class="text-muted fs-18">Total Expense <i class="ri-error-warning-fill"></i></span>
                                                    <h3 class="text-success">$21,087.45</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="income"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body school-card">
                                        <div class="position-relative z-1 h-100">
                                            <h2 class="text-white">Join the cormmunity and find out more...</h2>
                                            <a href="javascript:void(0)" class="btn btn-light position-absolute bottom-0">Explore now</a>
                                        </div>
                                        <div>
                                            <img src="assets/images/dashboard/school-bg.png" alt="School Background" class="position-absolute start-0 bottom-0 opacity-1 img-fluid">
                                            <img src="assets/images/dashboard/school-bg1.png" alt="School Background" class="position-absolute opacity-1 img-fluid end-0 top-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card overflow-hidden">
                                    <div class="card-header">
                                        <h4>May 2023</h4>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="datepicker-container">
                                            <input type="text" class="form-control d-none" id="inline-picker" placeholder="Select a date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card overflow-hidden">
                                    <div class="card-header">
                                        <h4>Upcoming Events</h4>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="h-64px w-64px position-relative d-flex justify-content-center align-items-center bg-info text-white fs-4 rounded-3 me-3">
                                                <div class="d-block">
                                                    <h3 class="mb-0 text-white text-center">28</h3>
                                                    <p class="mb-0 fs-16">Feb</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="fs-18 mb-0">School’s Anniversary</h6>
                                                <p class="mb-0"><i class="ri-map-pin-2-fill"></i>School Hall</p>
                                            </div>
                                        </div>
                                        <hr class="my-5">
                                        <div class="d-flex align-items-center">
                                            <div class="h-64px w-64px position-relative d-flex justify-content-center align-items-center bg-info text-white fs-4 rounded-3 me-3">
                                                <div class="d-block">
                                                    <h3 class="mb-0 text-white text-center">04</h3>
                                                    <p class="mb-0 fs-16">Apr</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="fs-18 mb-0">Annual Sports Event </h6>
                                                <p class="mb-0"><i class="ri-map-pin-2-fill"></i>School Big Ground</p>
                                            </div>
                                        </div>
                                        <hr class="my-5">
                                        <div class="d-flex align-items-center">
                                            <div class="h-64px w-64px position-relative d-flex justify-content-center align-items-center bg-info text-white fs-4 rounded-3 me-3">
                                                <div class="d-block">
                                                    <h3 class="mb-0 text-white text-center">13</h3>
                                                    <p class="mb-0 fs-16">May</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="fs-18 mb-0">Annual Sports Event </h6>
                                                <p class="mb-0"><i class="ri-map-pin-2-fill"></i>School Big Ground</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Notice Board</h4>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body card-h-100">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/dashboard/frem.png" class="h-56px w-56px position-relative d-flex justify-content-center align-items-center rounded-3 me-3" alt="Frame">
                                            <div>
                                                <h6 class="fs-18 mb-0">Emergency School Leave</h6>
                                                <p class="mb-0"><i class="ri-map-pin-2-fill"></i>School Hall</p>
                                            </div>
                                        </div>
                                        <hr class="my-5">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/dashboard/frem1.png" class="h-56px w-56px position-relative d-flex justify-content-center align-items-center rounded-3 me-3" alt="Frame">
                                            <div>
                                                <h6 class="fs-18 mb-0">Annual Sports Event Inauguration</h6>
                                                <p class="mb-0"><i class="ri-map-pin-2-fill"></i>School Big Ground</p>
                                            </div>
                                        </div>
                                        <hr class="my-5">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/dashboard/frem2.png" class="h-56px w-56px position-relative d-flex justify-content-center align-items-center rounded-3 me-3" alt="Frame">
                                            <div>
                                                <h6 class="fs-18 mb-0">Summer Vacation</h6>
                                                <p class="mb-0"><i class="ri-map-pin-2-fill"></i>School</p>
                                            </div>
                                        </div>
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
    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>

    <script src="assets/libs/gridjs/gridjs.umd.js" type="text/javascript"></script>

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- File js -->
    <script src="assets/js/dashboard/school.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endsection