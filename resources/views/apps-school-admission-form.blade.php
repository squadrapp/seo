@extends('partials.layouts.master')

@section('title', 'Admission Form | Urbix Admin & Dashboards Template')
@section('title-sub', 'School')
@section('pagetitle', 'Admission Form')
@section('css')
  <!-- Select css -->
        <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
        <!-- Picker css -->
        <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection
@section('content')


                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="fs-4 mb-3 bg-primary-subtle text-primary avatar-lg d-inline-flex align-items-center justify-content-center rounded-circle">
                                    <i class="ri-file-list-3-line"></i>
                                </div>
                                <h4>263</h4>
                                <span>Total Applications</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="fs-4 mb-3 bg-warning-subtle text-warning avatar-lg d-inline-flex align-items-center justify-content-center rounded-circle">
                                    <i class="ri-time-line"></i>
                                </div>
                                <h4>87</h4>
                                <span>Pending Review</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="fs-4 mb-3 bg-success-subtle text-success avatar-lg d-inline-flex align-items-center justify-content-center rounded-circle">
                                    <i class="ri-checkbox-circle-line"></i>
                                </div>
                                <h4>142</h4>
                                <span>Approved</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="fs-4 mb-3 bg-danger-subtle text-danger avatar-lg d-inline-flex align-items-center justify-content-center rounded-circle">
                                    <i class="ri-close-circle-line"></i>
                                </div>
                                <h4>34</h4>
                                <span>Rejected</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filters and Actions -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-2 pb-2 pb-xl-0">
                                        <select id="academicYears">
                                            <option>2025-2026</option>
                                            <option>2024-2025</option>
                                            <option>2023-2024</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 pb-2 pb-xl-0">
                                        <select id="status">
                                            <option>Pending</option>
                                            <option>Reviewing</option>
                                            <option>Approved</option>
                                            <option>Rejected</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 pb-2 pb-xl-0">
                                        <select id="gradeLevels">
                                            <option>Elementary (K-5)</option>
                                            <option>Middle School (6-8)</option>
                                            <option>High School (9-12)</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 pb-2 pb-xl-0">
                                        <select id="paymentStatus">
                                            <option>Paid</option>
                                            <option>Unpaid</option>
                                            <option>Partial</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 pb-2 pb-xl-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search applicants...">
                                            <button class="btn border" type="button">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 pb-2 pb-xl-0 d-grid">
                                        <button class="btn btn-primary" type="button">
                                            <i class="ri-equalizer-line"></i> Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Applications Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header flex-wrap gap-4">
                                <h4>Application Management</h4>
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#admissionFormModal"><i class="ri-add-line"></i> New Admission</button>                                
                            </div>
                            <div class="card-body">
                                <div class="table-box table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Applicant Name</th>
                                                <th>Grade</th>
                                                <th>Date of Birth</th>
                                                <th>Gender</th>
                                                <th>Parent/Guardian</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#APP-2025-001</td>
                                                <td>Emma Thompson</td>
                                                <td>Grade 9</td>
                                                <td>2009-08-15</td>
                                                <td>Female</td>
                                                <td>Robert Thompson</td>
                                                <td>(123) 456-7890</td>
                                                <td>123 Maple St, NY</td>
                                                <td><span class="badge bg-secondary">Reviewing</span></td>
                                                <td>
                                                    <button class="btn btn-light-primary icon-btn-sm" title="View"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-light-secondary icon-btn-sm" title="Edit"><i class="ri-edit-2-line"></i></button>
                                                    <button class="btn btn-light-success icon-btn-sm" title="Approve"><i class="ri-check-line"></i></button>
                                                    <button class="btn btn-light-danger icon-btn-sm" title="Reject"><i class="ri-close-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#APP-2025-002</td>
                                                <td>Liam Johnson</td>
                                                <td>Grade 6</td>
                                                <td>2012-04-23</td>
                                                <td>Male</td>
                                                <td>Sarah Johnson</td>
                                                <td>(987) 654-3210</td>
                                                <td>456 Oak Ave, NY</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>
                                                    <button class="btn btn-light-primary icon-btn-sm" title="View"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-light-secondary icon-btn-sm" title="Edit"><i class="ri-edit-2-line"></i></button>
                                                    <button class="btn btn-light-success icon-btn-sm" title="Approve"><i class="ri-check-line"></i></button>
                                                    <button class="btn btn-light-danger icon-btn-sm" title="Reject"><i class="ri-close-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#APP-2025-003</td>
                                                <td>Sophia Martinez</td>
                                                <td>Grade 3</td>
                                                <td>2015-01-09</td>
                                                <td>Female</td>
                                                <td>Elena Martinez</td>
                                                <td>(555) 789-4561</td>
                                                <td>789 Pine Rd, NY</td>
                                                 <td><span class="badge bg-success">Approved</span></td>
                                                <td>
                                                    <button class="btn btn-light-primary icon-btn-sm" title="View"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-light-secondary icon-btn-sm" title="Edit"><i class="ri-edit-2-line"></i></button>
                                                    <button class="btn btn-light-success icon-btn-sm" title="Approve"><i class="ri-check-line"></i></button>
                                                    <button class="btn btn-light-danger icon-btn-sm" title="Reject"><i class="ri-close-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#APP-2025-004</td>
                                                <td>Noah Wilson</td>
                                                <td>Grade 10</td>
                                                <td>2008-11-30</td>
                                                <td>Male</td>
                                                <td>Grace Wilson</td>
                                                <td>(444) 222-1111</td>
                                                <td>321 Elm St, NY</td>
                                                <td><span class="badge bg-danger">Rejected</span></td>
                                                <td>
                                                    <button class="btn btn-light-primary icon-btn-sm" title="View"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-light-secondary icon-btn-sm" title="Edit"><i class="ri-edit-2-line"></i></button>
                                                    <button class="btn btn-light-success icon-btn-sm" title="Approve"><i class="ri-check-line"></i></button>
                                                    <button class="btn btn-light-danger icon-btn-sm" title="Reject"><i class="ri-close-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#APP-2025-005</td>
                                                <td>Olivia Davis</td>
                                                <td>Grade 7</td>
                                                <td>2011-06-18</td>
                                                <td>Female</td>
                                                <td>Michael Davis</td>
                                                <td>(222) 333-4444</td>
                                                <td>987 Birch Blvd, NY</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>
                                                    <button class="btn btn-light-primary icon-btn-sm" title="View"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-light-secondary icon-btn-sm" title="Edit"><i class="ri-edit-2-line"></i></button>
                                                    <button class="btn btn-light-success icon-btn-sm" title="Approve"><i class="ri-check-line"></i></button>
                                                    <button class="btn btn-light-danger icon-btn-sm" title="Reject"><i class="ri-close-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#APP-2025-006</td>
                                                <td>William Brown</td>
                                                <td>Grade 12</td>
                                                <td>2007-09-01</td>
                                                <td>Male</td>
                                                <td>Karen Brown</td>
                                                <td>(666) 777-8888</td>
                                                <td>654 Cedar Ln, NY</td>
                                                <td><span class="badge bg-secondary">Reviewing</span></td>
                                                <td>
                                                    <button class="btn btn-light-primary icon-btn-sm" title="View"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-light-secondary icon-btn-sm" title="Edit"><i class="ri-edit-2-line"></i></button>
                                                    <button class="btn btn-light-success icon-btn-sm" title="Approve"><i class="ri-check-line"></i></button>
                                                    <button class="btn btn-light-danger icon-btn-sm" title="Reject"><i class="ri-close-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#APP-2025-007</td>
                                                <td>Ava Taylor</td>
                                                <td>Grade 4</td>
                                                <td>2014-03-05</td>
                                                <td>Female</td>
                                                <td>Thomas Taylor</td>
                                                <td>(888) 999-0000</td>
                                                <td>111 Spruce Dr, NY</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                                <td>
                                                    <button class="btn btn-light-primary icon-btn-sm" title="View"><i class="ri-eye-line"></i></button>
                                                    <button class="btn btn-light-secondary icon-btn-sm" title="Edit"><i class="ri-edit-2-line"></i></button>
                                                    <button class="btn btn-light-success icon-btn-sm" title="Approve"><i class="ri-check-line"></i></button>
                                                    <button class="btn btn-light-danger icon-btn-sm" title="Reject"><i class="ri-close-line"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>                                        
                                    </table>
                                </div>
                                <div class="d-flex flex-wrap gap-3 align-items-center mt-5">
                                    <div class="fw-medium"> Showing 1 - 10 of 22 Entries</div>
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
            </div>
        </main>

        <!-- Modal -->
        <div class="modal fade" id="admissionFormModal" tabindex="-1" aria-labelledby="admissionFormModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="admissionFormModalLabel">Student Admission Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="row g-3">
                            <div class="col-md-4">
                                <label for="studentName" class="form-label">Student Name</label>
                                <input type="text" id="studentName" class="form-control" placeholder="Enter full name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="text" class="form-control" id="dob" placeholder="Select a date" required>
                            </div>
                            <div class="col-md-4">
                                <label for="gender-choice" class="form-label">Gender</label>
                                <select id="gender-choice" required>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="grade-choice" class="form-label">Grade Applying For</label>
                                <select id="grade-choice" required>
                                    <option>Grade 1</option>
                                    <option>Grade 2</option>
                                    <option>Grade 3</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="nationality" class="form-label">Nationality</label>
                                <input type="text" id="nationality" class="form-control" placeholder="e.g. American" required>
                            </div>
                            <div class="col-12">
                                <hr>
                                <h6 class="mb-0">Parent/Guardian Info</h6>
                            </div>
                            <div class="col-md-6">
                                <label for="parentName" class="form-label">Guardian Name</label>
                                <input type="text" id="parentName" class="form-control" placeholder="Full name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="relation" class="form-label">Relation</label>
                                <input type="text" id="relation" class="form-control" placeholder="e.g. Father, Mother" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" id="phone" class="form-control" placeholder="Enter phone number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Email (optional)">
                            </div>
                            <div class="col-12">
                                <hr>
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-md-12">
                                <label for="address" class="form-label">Full Address</label>
                                <textarea id="address" class="form-control" rows="4" placeholder="Street, City, ZIP" required></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success"><i class="ri-check-line"></i> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection

@section('js')
    <!-- Select js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Picker js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>
    <!-- Init -->
    <script src="assets/js/app/admission-form.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endsection