@extends('partials.layouts.master')

@section('title', 'School Teacher | Urbix Admin & Dashboards Template')
@section('title-sub', 'Teacher')
@section('pagetitle', 'Teachers')
@section('css')
 <!-- Select css -->
        <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
        <!-- Picker css -->
        <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection
@section('content')

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Teachers</h4>
                                <div class="d-flex flex-wrap gap-3 ms-auto">
                                    <!-- Add New Exam Button -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTeacherModal">
                                        <i class="bi bi-plus-lg me-1"></i> Add Teacher
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Teachers Table -->
                                <div class="table-box table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th style="width: 40px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="selectAll">
                                                    </div>
                                                </th>
                                                <th>Teacher</th>
                                                <th>Department</th>
                                                <th>Subjects</th>
                                                <th>Contact</th>
                                                <th>Status</th>
                                                <th>Students</th>
                                                <th>Rating</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Teacher 1 -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-1.jpg" alt="Profile" class="avatar-md avatar-item me-1">
                                                        <div>
                                                            <h6 class="mb-0">Sarah Johnson</h6>
                                                            <small class="text-muted">ID: TCH-1001 • 8 yrs exp</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Mathematics</td>
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary badge-subject">Algebra</span>
                                                    <span class="badge bg-info bg-opacity-10 text-info badge-subject">Calculus</span>
                                                </td>
                                                <td>
                                                    <div><i class="ri-mail-line me-1"></i> sarah.j@example.com</div>
                                                    <div><i class="ri-phone-line me-1"></i> (123) 456-7890</div>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success teacher-status">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">124</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-success" style="width: 85%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">4.9</span>
                                                        <div class="text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>                                                   
                                                    <button class="btn icon-btn-sm btn-light-primary action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-success action-btn" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Teacher 2 -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-2.jpg" alt="Profile" class="avatar-md avatar-item me-1">
                                                        <div>
                                                            <h6 class="mb-0">Michael Chen</h6>
                                                            <small class="text-muted">ID: TCH-1002 • 5 yrs exp</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Science</td>
                                                <td>
                                                    <span class="badge bg-success bg-opacity-10 text-success badge-subject">Biology</span>
                                                    <span class="badge bg-danger bg-opacity-10 text-danger badge-subject">Chemistry</span>
                                                </td>
                                                <td>
                                                    <div><i class="ri-mail-line me-1"></i> mchen@example.com</div>
                                                    <div><i class="ri-phone-line me-1"></i> (234) 567-8901</div>
                                                </td>
                                                <td><span class="badge bg-warning-subtle text-warning teacher-status">On Leave</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">86</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-info" style="width: 70%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">4.6</span>
                                                        <div class="text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>                                                   
                                                    <button class="btn icon-btn-sm btn-light-primary action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-success action-btn" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Teacher 3 -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-3.jpg" alt="Profile" class="avatar-md avatar-item me-1">
                                                        <div>
                                                            <h6 class="mb-0">Emily Rodriguez</h6>
                                                            <small class="text-muted">ID: TCH-1003 • 12 yrs exp</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>English</td>
                                                <td>
                                                    <span class="badge bg-warning bg-opacity-10 text-warning badge-subject">Literature</span>
                                                    <span class="badge bg-secondary bg-opacity-10 text-secondary badge-subject">Grammar</span>
                                                </td>
                                                <td>
                                                    <div><i class="ri-mail-line me-1"></i> e.rodriguez@example.com</div>
                                                    <div><i class="ri-phone-line me-1"></i> (345) 678-9012</div>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success teacher-status">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">108</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-success" style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">4.8</span>
                                                        <div class="text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>                                                   
                                                    <button class="btn icon-btn-sm btn-light-primary action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-success action-btn" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Teacher 4 -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-4.jpg" alt="Profile" class="avatar-md avatar-item me-1">
                                                        <div>
                                                            <h6 class="mb-0">David Wilson</h6>
                                                            <small class="text-muted">ID: TCH-1004 • 3 yrs exp</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Physical Education</td>
                                                <td>
                                                    <span class="badge bg-success bg-opacity-10 text-success badge-subject">Sports</span>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary badge-subject">Health</span>
                                                </td>
                                                <td>
                                                    <div><i class="ri-mail-line me-1"></i> dwilson@example.com</div>
                                                    <div><i class="ri-phone-line me-1"></i> (456) 789-0123</div>
                                                </td>
                                                <td><span class="badge bg-info-subtle text-info teacher-status">Contract</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">74</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-primary" style="width: 65%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">4.5</span>
                                                        <div class="text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>                                                   
                                                    <button class="btn icon-btn-sm btn-light-primary action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-success action-btn" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Teacher 5 -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-5.jpg" alt="Profile" class="avatar-md avatar-item me-1">
                                                        <div>
                                                            <h6 class="mb-0">Isabella Frandsen</h6>
                                                            <small class="text-muted">ID: TCH-1005 • 8 yrs exp</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Mathematics</td>
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary badge-subject">Algebra</span>
                                                    <span class="badge bg-info bg-opacity-10 text-info badge-subject">Geometry</span>
                                                </td>
                                                <td>
                                                    <div><i class="ri-mail-line me-1"></i> ifrandsen@example.com</div>
                                                    <div><i class="ri-phone-line me-1"></i> (687) 986-4798</div>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success teacher-status">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">49</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-danger" style="width: 49%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">4.9</span>
                                                        <div class="text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>                                                   
                                                    <button class="btn icon-btn-sm btn-light-primary action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-success action-btn" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Teacher 6 -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-6.jpg" alt="Profile" class="avatar-md avatar-item me-1">
                                                        <div>
                                                            <h6 class="mb-0">Carl Hansen</h6>
                                                            <small class="text-muted">ID: TCH-1006 • 5 yrs exp</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Sciences</td>
                                                <td>
                                                    <span class="badge bg-danger bg-opacity-10 text-danger badge-subject">Biology</span>
                                                    <span class="badge bg-secondary bg-opacity-10 text-secondary badge-subject">Chemistry</span>
                                                </td>
                                                <td>
                                                    <div><i class="ri-mail-line me-1"></i> chansen@example.com</div>
                                                    <div><i class="ri-phone-line me-1"></i> (268) 256-7566</div>
                                                </td>
                                                <td><span class="badge bg-danger-subtle text-danger teacher-status">Vacation</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">80</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-warning" style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">4.5</span>
                                                        <div class="text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>                                                   
                                                    <button class="btn icon-btn-sm btn-light-primary action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-success action-btn" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Teacher 7 -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-8.jpg" alt="Profile" class="avatar-md avatar-item me-1">
                                                        <div>
                                                            <h6 class="mb-0">Soren Mathiasen</h6>
                                                            <small class="text-muted">ID: TCH-1007 • 6 yrs exp</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Humanities</td>
                                                <td>
                                                    <span class="badge bg-success bg-opacity-10 text-success badge-subject">History</span>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary badge-subject">Literature</span>
                                                </td>
                                                <td>
                                                    <div><i class="ri-mail-line me-1"></i> smathiasen@example.com</div>
                                                    <div><i class="ri-phone-line me-1"></i> (719) 189-7561</div>
                                                </td>
                                                <td><span class="badge bg-info-subtle text-info teacher-status">Contract</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">74</span>
                                                        <div class="progress progress-sm w-100">
                                                            <div class="progress-bar bg-primary" style="width: 65%"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2">4.5</span>
                                                        <div class="text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>                                                   
                                                    <button class="btn icon-btn-sm btn-light-primary action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-success action-btn" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                    <button class="btn icon-btn-sm btn-light-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex flex-wrap gap-3 align-items-center mt-5">
                                    <div class="fw-medium"> Showing 1 - 10 of 17 Entries</div>
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

                <!-- Add Teacher Modal -->
                <div class="modal fade" id="addTeacherModal" tabindex="-1" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addTeacherModalLabel">Add Teacher</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="nameInput" class="form-label">Teacher Name</label>
                                            <input type="name" id="nameInput" class="form-control rounded-2" placeholder="Teacher Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="subjectSelect" class="form-label">Subject</label>
                                            <select id="subjectSelect" required>
                                                <option value="1">Mathematics</option>
                                                <option value="2">English</option>
                                                <option value="3">Science</option>
                                                <option value="4">History</option>
                                                <option value="5">Physical Education</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="emailInput" class="form-label">Email</label>
                                            <input type="email" id="emailInput" class="form-control rounded-2" placeholder="Enter your email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phonenumberInput" class="form-label">Phone</label>
                                            <input type="tel" id="phonenumberInput" class="form-control rounded-2" placeholder="Enter your phone number" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="salaryInput" class="form-label">Salary ($)</label>
                                            <input id="salaryInput" class="form-control rounded-2" placeholder="$0" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="experienceInput" class="form-label">Experience (Years)</label>
                                            <input id="experienceInput" class="form-control rounded-2" placeholder="0" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="joinDate" class="form-label">Joining Date</label>
                                            <input type="text" class="form-control" id="joinDate" placeholder="Select a date" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="lastSchoolNameInput" class="form-label">Last School Name</label>
                                            <input id="lastSchoolNameInput" class="form-control rounded-2" placeholder="School Name" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="TeacherNotes" class="form-label">Notes</label>
                                            <textarea class="form-control" id="TeacherNotes" placeholder="Notes..." rows="3"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Add Teacher</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection

@section('js')
    <!-- Select js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Picker js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>
    <!-- Init -->
    <script src="assets/js/app/teachers.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endsection