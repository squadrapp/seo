@extends('partials.layouts.master')

@section('title', 'School Parents | Urbix Admin & Dashboards Template')
@section('title-sub', 'School')
@section('pagetitle', 'Parents')
@section('css')
    <!-- Choices css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection
@section('content')

                <div class="card">
                    <div class="card-header">
                        <h4>Exam List</h4>
                        <div class="d-flex flex-wrap gap-3 ms-auto">
                            <div class="form-icon">
                                <input type="text" class="form-control form-control-icon" id="firstNameLayout4" placeholder="Search Here ..." required>
                                <i class="ri-search-2-line text-muted"></i>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-light text-muted dropdown-toggle" type="button" id="sortByDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort By
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="sortByDropdown">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Low to High</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">High to Low</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Newest</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-light text-muted dropdown-toggle" type="button" id="filterByDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Filter By
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="filterByDropdown">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Upcoming</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Active</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Completed</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">All Exams</a></li>
                                </ul>
                            </div>

                            <!-- Add New Exam Button -->
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createParentModal">
                                <i class="bi bi-plus-lg me-1"></i>Add New
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-box table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead class="table-header">
                                    <tr>
                                        <th scope="col">Parent Name</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Relation</th>
                                        <th scope="col">Occupation</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Location</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- New Sample Data 1 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-primary text-white">
                                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">James Miller</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-info text-white">
                                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Amelia Miller</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary rounded-pill">Father</span></td>
                                        <td><span class="badge bg-light text-body badge-occupation">Marketing Director</span></td>
                                        <td>
                                            <div><i class="ri-mail-line me-1"></i> james.m@example.com</div>
                                            <div><i class="ri-phone-line me-1"></i> +1 (543) 828-9271</div>
                                        </td>
                                        <td>
                                            <div><i class="bi bi-geo-alt-fill text-muted me-1"></i> Toronto, Canada</div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center action-buttons">
                                                <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- New Sample Data 2 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-primary text-white">
                                                    <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Sarah García</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-info text-white">
                                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Miguel García</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary rounded-pill">Mother</span></td>
                                        <td><span class="badge bg-light text-body badge-occupation">Pediatrician</span></td>
                                        <td>
                                            <div><i class="ri-mail-line me-1"></i> s.garcia@example.com</div>
                                            <div><i class="ri-phone-line me-1"></i> +1 (416) 723-8902</div>
                                        </td>
                                        <td>
                                            <div><i class="bi bi-geo-alt-fill text-muted me-1"></i> Miami, USA</div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center action-buttons">
                                                <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- New Sample Data 3 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-primary text-white">
                                                    <img src="assets/images/avatar/avatar-6.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Raj Kumar</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-info text-white">
                                                    <img src="assets/images/avatar/avatar-7.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Priya Kumar</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary rounded-pill">Father</span></td>
                                        <td><span class="badge bg-light text-body badge-occupation">Software Developer</span></td>
                                        <td>
                                            <div><i class="ri-mail-line me-1"></i> raj.k@example.com</div>
                                            <div><i class="ri-phone-line me-1"></i> +1 (647) 291-3456</div>
                                        </td>
                                        <td>
                                            <div><i class="bi bi-geo-alt-fill text-muted me-1"></i> Bangalore, India</div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center action-buttons">
                                                <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- New Sample Data 4 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-primary text-white">
                                                    <img src="assets/images/avatar/avatar-9.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Chen Wei</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-info text-white">
                                                    <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Lin Wei</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary rounded-pill">Mother</span></td>
                                        <td><span class="badge bg-light text-body badge-occupation">Research Scientist</span></td>
                                        <td>
                                            <div><i class="ri-mail-line me-1"></i> chen.w@example.com</div>
                                            <div><i class="ri-phone-line me-1"></i> +1 (905) 678-4321</div>
                                        </td>
                                        <td>
                                            <div><i class="bi bi-geo-alt-fill text-muted me-1"></i> Shanghai, China</div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center action-buttons">
                                                <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- New Sample Data 5 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-primary text-white">
                                                    <img src="assets/images/avatar/avatar-10.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Adebayo Olatunji</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-info text-white">
                                                    <img src="assets/images/avatar/avatar-11.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Folake Olatunji</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary rounded-pill">Father</span></td>
                                        <td><span class="badge bg-light text-body badge-occupation">Civil Engineer</span></td>
                                        <td>
                                            <div><i class="ri-mail-line me-1"></i> adebayo@example.com</div>
                                            <div><i class="ri-phone-line me-1"></i> +1 (289) 456-7890</div>
                                        </td>
                                        <td>
                                            <div><i class="bi bi-geo-alt-fill text-muted me-1"></i> Lagos, Nigeria</div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center action-buttons">
                                                <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- New Sample Data 6 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-primary text-white">
                                                    <img src="assets/images/avatar/avatar-12.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Emma Lewis</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-info text-white">
                                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Oliver Lewis</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary rounded-pill">Mother</span></td>
                                        <td><span class="badge bg-light text-body badge-occupation">Finance Manager</span></td>
                                        <td>
                                            <div><i class="ri-mail-line me-1"></i> emma.l@example.com</div>
                                            <div><i class="ri-phone-line me-1"></i> +1 (647) 555-1234</div>
                                        </td>
                                        <td>
                                            <div><i class="bi bi-geo-alt-fill text-muted me-1"></i> London, UK</div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center action-buttons">
                                                <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- New Sample Data 7 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-primary text-white">
                                                    <img src="assets/images/avatar/avatar-6.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Viktor Petrov</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-info text-white">
                                                    <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Ana Petrova</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary rounded-pill">Father</span></td>
                                        <td><span class="badge bg-light text-body badge-occupation">Architect</span></td>
                                        <td>
                                            <div><i class="ri-mail-line me-1"></i> viktor.p@example.com</div>
                                            <div><i class="ri-phone-line me-1"></i> +1 (416) 987-6543</div>
                                        </td>
                                        <td>
                                            <div><i class="bi bi-geo-alt-fill text-muted me-1"></i> Moscow, Russia</div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center action-buttons">
                                                <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- New Sample Data 8 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-primary text-white">
                                                    <img src="assets/images/avatar/avatar-10.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Mohammed Hassan</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md avatar-item bg-info text-white">
                                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Images">
                                                </div>
                                                <span class="ms-1">Fatima Hassan</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary rounded-pill">Father</span></td>
                                        <td><span class="badge bg-light text-body badge-occupation">University Professor</span></td>
                                        <td>
                                            <div><i class="ri-mail-line me-1"></i> m.hassan@example.com</div>
                                            <div><i class="ri-phone-line me-1"></i> +1 (905) 321-7654</div>
                                        </td>
                                        <td>
                                            <div><i class="bi bi-geo-alt-fill text-muted me-1"></i> Cairo, Egypt</div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center action-buttons">
                                                <a class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></a>
                                                <a class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></a>
                                            </div>
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

                <!-- Exam Create Modal -->
                <div class="modal fade" id="createParentModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createParentModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createParentModalLabel">Add New Parent</h5>
                                <button type="button" class="btn-close icon-btn-sm" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="ri-close-large-line fw-semibold"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="d-flex flex-column align-items-center justify-content-center p-3 rounded">
                                                <div class="position-relative">
                                                    <img id="avatarPreview" src="assets/images/avatar/15.jpg" alt="Avatar Preview" class="img-fluid rounded-circle h-80px w-80px object-fit-cover">
                                                    <div class="h-24px w-24px rounded-pill bg-primary d-flex justify-content-center align-items-center text-white border border-3 border-light-subtle position-absolute fs-10 top-0 end-0"><i class="bi bi-camera"></i></div>
                                                    <input type="file" class="position-absolute top-0 end-0 w-100 h-100 opacity-0 form-control" id="avatar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="parentName" class="form-label">Parent Name</label>
                                            <input type="text" class="form-control" id="parentName" placeholder="Enter parent name" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="studentName" class="form-label">Student Name</label>
                                            <input type="text" class="form-control" id="studentName" placeholder="Enter student name" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="relationInput" class="form-label">Relation</label>
                                            <input type="text" class="form-control" id="relationInput" placeholder="Enter relation" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="parentsGender" class="form-label">Gender</label>
                                            <select id="parentsGender">
                                                <option value="javascript">Male</option>
                                                <option value="python">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="examoccupation" class="form-label">Occupation</label>
                                            <input type="text" class="form-control" id="examoccupation" placeholder="Enter occupation" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="emailInput" class="form-label">Email</label>
                                            <input type="email" id="emailInput" class="form-control" placeholder="Enter your email" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="phonenumberInput" class="form-label">Phone</label>
                                            <input type="tel" id="phonenumberInput" class="form-control" placeholder="Enter your phone number" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Parent</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit Section -->
            </div>
        </main>
@endsection

@section('js')
    <!-- Select js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- File js -->
    <script src="assets/js/app/school-parents.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endsection