@extends('partials.layouts.master')

@section('title', 'Students | Urbix Admin & Dashboards Template')
@section('title-sub', 'School')
@section('pagetitle', 'Students')
@section('css')
   <!-- Select css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <!-- Picker css -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection
@section('content')

                <!-- Applications Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between mb-4 align-items-center">
                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="form-icon">
                                            <i class="ri-search-line"></i>
                                            <input type="text" class="form-control form-control-icon" placeholder="Search student, class etc. ...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-lg-end">
                                        <div class="dropdown me-3">
                                            <button class="btn btn-primary filter-dropdown dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sorting by class
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Sort by Name</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Sort by Class</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Sort by Roll No</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Sort by Joining Date</a></li>
                                            </ul>
                                        </div>
                                        <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                                            <i class="ri-add-line me-1"></i>Add Student
                                        </button>
                                    </div>
                                </div>
                                <div class="table-box table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Student Name</th>
                                                <th>Gender</th>
                                                <th>Roll No</th>
                                                <th>Class</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Birth Of Date</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#STU-1001</td>
                                                <td class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-1.jpg" alt="Student" class="avatar-md rounded-circle me-2">
                                                    <span>Emma Wilson</span>
                                                </td>
                                                <td>Female</td>
                                                <td>23</td>
                                                <td><span class="class-badge class-a">12 (A)</span></td>
                                                <td>emma@example.com</td>
                                                <td>+1 234 567 8901</td>
                                                <td>15 Mar, 2005</td>
                                                <td>10 Jun 2024</td>
                                                <td>
                                                    <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                    <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#STU-1002</td>
                                                <td class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Student" class="avatar-md rounded-circle me-2">
                                                    <span>Noah Parker</span>
                                                </td>
                                                <td>Male</td>
                                                <td>45</td>
                                                <td><span class="class-badge class-b">11 (B)</span></td>
                                                <td>noah@example.com</td>
                                                <td>+1 345 678 9012</td>
                                                <td>22 Jul, 2006</td>
                                                <td>05 Jun 2024</td>
                                                <td>
                                                    <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                    <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#STU-1003</td>
                                                <td class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-12.jpg" alt="Student" class="avatar-md rounded-circle me-2">
                                                    <span>Olivia Chen</span>
                                                </td>
                                                <td>Female</td>
                                                <td>12</td>
                                                <td><span class="class-badge class-a">10 (A)</span></td>
                                                <td>olivia@example.com</td>
                                                <td>+1 456 789 0123</td>
                                                <td>08 Sep, 2007</td>
                                                <td>15 May 2024</td>
                                                <td>
                                                    <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                    <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#STU-1004</td>
                                                <td class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Student" class="avatar-md rounded-circle me-2">
                                                    <span>Liam Rodriguez</span>
                                                </td>
                                                <td>Male</td>
                                                <td>37</td>
                                                <td><span class="class-badge class-a">11 (A)</span></td>
                                                <td>liam@example.com</td>
                                                <td>+1 567 890 1234</td>
                                                <td>03 Dec, 2006</td>
                                                <td>22 May 2024</td>
                                                <td>
                                                    <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                    <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#STU-1005</td>
                                                <td class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Student" class="avatar-md rounded-circle me-2">
                                                    <span>Ava Johnson</span>
                                                </td>
                                                <td>Female</td>
                                                <td>19</td>
                                                <td><span class="class-badge class-a">12 (A)</span></td>
                                                <td>ava@example.com</td>
                                                <td>+1 678 901 2345</td>
                                                <td>19 Jan, 2005</td>
                                                <td>03 Jun 2024</td>
                                                <td>
                                                    <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                    <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#STU-1006</td>
                                                <td class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-6.jpg" alt="Student" class="avatar-md rounded-circle me-2">
                                                    <span>Leslie Shields</span>
                                                </td>
                                                <td>Male</td>
                                                <td>21</td>
                                                <td><span class="class-badge class-a">10 (C)</span></td>
                                                <td>leslie@example.com</td>
                                                <td>+1 598 901 3456</td>
                                                <td>25 Jan, 2005</td>
                                                <td>19 Jun 2024</td>
                                                <td>
                                                    <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                    <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#STU-1007</td>
                                                <td class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-7.jpg" alt="Student" class="avatar-md rounded-circle me-2">
                                                    <span>William Byrd</span>
                                                </td>
                                                <td>Female</td>
                                                <td>19</td>
                                                <td><span class="class-badge class-a">11 (B)</span></td>
                                                <td>william@example.com</td>
                                                <td>+1 368 801 4567</td>
                                                <td>02 May, 2003</td>
                                                <td>09 Jun 2024</td>
                                                <td>
                                                    <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                    <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#STU-1008</td>
                                                <td class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-8.jpg" alt="Student" class="avatar-md rounded-circle me-2">
                                                    <span>Enid Renninger</span>
                                                </td>
                                                <td>Male</td>
                                                <td>20</td>
                                                <td><span class="class-badge class-a">10 (A)</span></td>
                                                <td>enid@example.com</td>
                                                <td>+1 701 201 5679</td>
                                                <td>01 Jan, 2005</td>
                                                <td>03 April 2024</td>
                                                <td>
                                                    <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                    <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#STU-1009</td>
                                                <td class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-9.jpg" alt="Student" class="avatar-md rounded-circle me-2">
                                                    <span>Phyllis Jones</span>
                                                </td>
                                                <td>Female</td>
                                                <td>18</td>
                                                <td><span class="class-badge class-a">12 (D)</span></td>
                                                <td>phyllis@example.com</td>
                                                <td>+1 648 259 8925</td>
                                                <td>30 Feb, 2002</td>
                                                <td>25 Jan 2024</td>
                                                <td>
                                                    <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                    <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex flex-wrap gap-3 align-items-center mt-5">
                                    <div class="fw-medium"> Showing 1 - 10 of 25 Entries</div>
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

                <!-- Add Student Modal -->
                <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addStudentModalLabel">Add New Student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="addStudentForm">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="studentName" class="form-label">Student Name</label>
                                            <input type="text" class="form-control" id="studentName" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select class="form-select" id="gender" required>
                                                <option value="Gender">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="rollNo" class="form-label">Roll Number</label>
                                            <input type="number" class="form-control" id="rollNo" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="class-choice" class="form-label">Class</label>
                                            <select id="class-choice" required>
                                                <option value="9">9</option>
                                                <option value="10 (A)">10 (A)</option>
                                                <option value="10 (B)">10 (B)</option>
                                                <option value="11 (A)">11 (A)</option>
                                                <option value="11 (B)">11 (B)</option>
                                                <option value="12 (A)">12 (A)</option>
                                                <option value="12 (B)">12 (B)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" id="phone" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="birthDate" class="form-label">Birth Date</label>
                                            <input type="text" class="form-control" id="birthDate" placeholder="Select a date" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="profilePicture" class="form-label">Profile Picture</label>
                                            <input type="file" class="form-control" id="profilePicture" accept="image/*">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea class="form-control" id="address" rows="4"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light btn-close-modal" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary btn-save" id="saveStudent">Save Student</button>
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
    <script src="assets/js/app/students.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>

@endsection