@extends('partials.layouts.master')

@section('title', 'School Exam | Urbix Admin & Dashboards Template')
@section('title-sub', 'School')
@section('pagetitle', 'Exam')
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
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createExamModal">
                                <i class="bi bi-plus-lg me-1"></i>Add New
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-box table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Exam ID</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Exam Type</th>
                                        <th scope="col">Assessment Method</th>
                                        <th scope="col">Grade</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>EXM-2025</td>
                                        <td>Mathematics</td>
                                        <td>Final Exam</td>
                                        <td>Written</td>
                                        <td>12</td>
                                        <td>May 15, 2025</td>
                                        <td>9:00 AM - 11:00 AM</td>
                                        <td><span class="badge bg-warning">Upcoming</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXM-2021</td>
                                        <td>Literature</td>
                                        <td>Midterm</td>
                                        <td>Essay</td>
                                        <td>11</td>
                                        <td>April 22, 2025</td>
                                        <td>1:00 PM - 3:00 PM</td>
                                        <td><span class="badge bg-warning">Upcoming</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXM-2019</td>
                                        <td>Chemistry</td>
                                        <td>Lab Test</td>
                                        <td>Practical</td>
                                        <td>12</td>
                                        <td>March 10, 2025</td>
                                        <td>10:30 AM - 12:30 PM</td>
                                        <td><span class="badge bg-info">Scheduled</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXM-2018</td>
                                        <td>Physics</td>
                                        <td>Quiz</td>
                                        <td>Multiple Choice</td>
                                        <td>10</td>
                                        <td>March 5, 2025</td>
                                        <td>2:00 PM - 3:00 PM</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXM-2015</td>
                                        <td>Computer Science</td>
                                        <td>Project</td>
                                        <td>Practical</td>
                                        <td>11</td>
                                        <td>February 28, 2025</td>
                                        <td>9:00 AM - 12:00 PM</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXM-2012</td>
                                        <td>History</td>
                                        <td>Oral Exam</td>
                                        <td>Presentation</td>
                                        <td>9</td>
                                        <td>February 15, 2025</td>
                                        <td>1:00 PM - 4:00 PM</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXM-2010</td>
                                        <td>Biology</td>
                                        <td>Final Exam</td>
                                        <td>Written + Practical</td>
                                        <td>10</td>
                                        <td>January 30, 2025</td>
                                        <td>9:00 AM - 12:00 PM</td>
                                        <td><span class="badge bg-danger">Canceled</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXM-2008</td>
                                        <td>Geography</td>
                                        <td>Midterm</td>
                                        <td>Written</td>
                                        <td>9</td>
                                        <td>January 20, 2025</td>
                                        <td>10:00 AM - 12:00 PM</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXM-2006</td>
                                        <td>Music</td>
                                        <td>Performance</td>
                                        <td>Practical</td>
                                        <td>11</td>
                                        <td>January 15, 2025</td>
                                        <td>1:00 PM - 5:00 PM</td>
                                        <td><span class="badge bg-info">Scheduled</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXM-2003</td>
                                        <td>Art</td>
                                        <td>Portfolio Review</td>
                                        <td>Practical</td>
                                        <td>12</td>
                                        <td>January 10, 2025</td>
                                        <td>9:00 AM - 11:00 AM</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn icon-btn-sm btn-light-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn icon-btn-sm btn-light-danger"><i class="bi bi-trash"></i></button>
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

                <!-- Exam Create Modal -->
                <div class="modal fade" id="createExamModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createExamModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createExamModalLabel">Create New Exam</h5>
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
                                            <label for="examTitle" class="form-label">Exam Title</label>
                                            <input type="text" class="form-control" id="examTitle" placeholder="Enter exam title" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="examCategory" class="form-label">Category</label>
                                            <input type="text" class="form-control" id="examCategory" placeholder="Enter category" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="examLessons" class="form-label">Lessons & Sections</label>
                                            <input type="text" class="form-control" id="examLessons" placeholder="Enter lessons and sections" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="examEnrolled" class="form-label">Enrolled Students</label>
                                            <input type="number" class="form-control" id="examEnrolled" placeholder="Enter enrolled" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="examStatus" class="form-label">Status</label>
                                            <select id="examStatus">
                                                <option value="javascript">Active</option>
                                                <option value="python">Upcoming</option>
                                                <option value="java">Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create Exam</button>
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
    <script src="assets/js/app/school-exam.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endsection