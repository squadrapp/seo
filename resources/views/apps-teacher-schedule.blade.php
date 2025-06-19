@extends('partials.layouts.master')

@section('title', 'Teacher Schedule | Urbix Admin & Dashboards Template')
@section('title-sub', 'Teacher')
@section('pagetitle', 'Schedule')
@section('css')
   <!-- Select css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection
@section('content')

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Weekly Schedule Overview</h4>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addScheduleModal"><i class="ri-add-line"></i> Add Schedule</button>
                            </div>
                            <div class="card-body">
                                <div class="table-box table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead class="table-active border">
                                            <tr>
                                                <th>Time / Day</th>
                                                <th>Monday</th>
                                                <th>Tuesday</th>
                                                <th>Wednesday</th>
                                                <th>Thursday</th>
                                                <th>Friday</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold">8:00 - 9:00</td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">John Smith</div>
                                                            <div>Math 101 - Room 305</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">John Smith</div>
                                                            <div>Math 201 - Room 305</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">John Smith</div>
                                                            <div>Math 101 - Room 305</div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">9:00 - 10:00</td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">Sarah Johnson</div>
                                                            <div>English 101 - Room 205</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">Sarah Johnson</div>
                                                            <div>English 101 - Room 205</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">10:00 - 11:00</td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">David Wilson</div>
                                                            <div>Science 101 - Lab 102</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">David Wilson</div>
                                                            <div>Science 101 - Lab 102</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">David Wilson</div>
                                                            <div>Science Lab - Lab 102</div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">11:00 - 12:00</td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">Maria Garcia</div>
                                                            <div>History 101 - Room 405</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">Maria Garcia</div>
                                                            <div>History 101 - Room 405</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">12:00 - 1:00</td>
                                                <td class="bg-light text-center" colspan="5">Lunch Break</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">1:00 - 2:00</td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">Robert Brown</div>
                                                            <div>PE - Gymnasium</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">Robert Brown</div>
                                                            <div>PE - Gymnasium</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-active"></td>
                                                <td class="schedule-card">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                        <div>
                                                            <div class="fw-bold">Robert Brown</div>
                                                            <div>PE - Gymnasium</div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Teachers List Section -->
                        <div class="card">
                            <div class="card-header">
                                <h4>Teachers List</h4>
                                <div class="btn-group">
                                    <button class="btn btn-outline-primary d-flex align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All Departments
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0)">All Departments</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Mathematics</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Science</a>
                                        <a class="dropdown-item" href="javascript:void(0)">English</a>
                                        <a class="dropdown-item" href="javascript:void(0)">History</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Physical Education</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-box table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Teacher</th>
                                                <th>Department</th>
                                                <th>Weekly Hours</th>
                                                <th>Status</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Joining Date</th>
                                                <th>Actions</th>
                                              </tr>                                              
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>
                                                <div class="d-flex align-items-center">
                                                  <img src="assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                  <div>
                                                    <div class="fw-bold">John Smith</div>
                                                  </div>
                                                </div>
                                              </td>
                                              <td>Mathematics</td>
                                              <td>18 hrs</td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>john.smith@school.edu</td>
                                              <td>+1 555-1234</td>
                                              <td>2019-08-21</td>
                                              <td>
                                                <button class="btn icon-btn-sm btn-light-primary"><i class="ri-eye-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-secondary"><i class="ri-edit-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-danger"><i class="ri-delete-bin-line"></i></button>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="d-flex align-items-center">
                                                  <img src="assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                  <div>
                                                    <div class="fw-bold">Sarah Johnson</div>
                                                  </div>
                                                </div>
                                              </td>
                                              <td>English</td>
                                              <td>15 hrs</td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>sarah.j@school.edu</td>
                                              <td>+1 555-2345</td>
                                              <td>2020-01-10</td>
                                              <td>
                                                <button class="btn icon-btn-sm btn-light-primary"><i class="ri-eye-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-secondary"><i class="ri-edit-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-danger"><i class="ri-delete-bin-line"></i></button>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="d-flex align-items-center">
                                                  <img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                  <div>
                                                    <div class="fw-bold">David Wilson</div>
                                                  </div>
                                                </div>
                                              </td>
                                              <td>Science</td>
                                              <td>20 hrs</td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>dwilson@school.edu</td>
                                              <td>+1 555-3456</td>
                                              <td>2018-05-12</td>
                                              <td>
                                                <button class="btn icon-btn-sm btn-light-primary"><i class="ri-eye-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-secondary"><i class="ri-edit-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-danger"><i class="ri-delete-bin-line"></i></button>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="d-flex align-items-center">
                                                  <img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                  <div>
                                                    <div class="fw-bold">Maria Garcia</div>
                                                  </div>
                                                </div>
                                              </td>
                                              <td>History</td>
                                              <td>16 hrs</td>
                                              <td><span class="badge bg-warning">On Leave</span></td>
                                              <td>mgarcia@school.edu</td>
                                              <td>+1 555-4567</td>
                                              <td>2021-03-22</td>
                                              <td>
                                                <button class="btn icon-btn-sm btn-light-primary"><i class="ri-eye-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-secondary"><i class="ri-edit-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-danger"><i class="ri-delete-bin-line"></i></button>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="d-flex align-items-center">
                                                  <img src="assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-md me-2" alt="Teacher">
                                                  <div>
                                                    <div class="fw-bold">Robert Brown</div>
                                                  </div>
                                                </div>
                                              </td>
                                              <td>Physical Education</td>
                                              <td>12 hrs</td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>rbrown@school.edu</td>
                                              <td>+1 555-5678</td>
                                              <td>2022-11-05</td>
                                              <td>
                                                <button class="btn icon-btn-sm btn-light-primary"><i class="ri-eye-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-secondary"><i class="ri-edit-line"></i></button>
                                                <button class="btn icon-btn-sm btn-light-danger"><i class="ri-delete-bin-line"></i></button>
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

                <!-- Add Schedule Modal -->
                <div class="modal fade" id="addScheduleModal" tabindex="-1" aria-labelledby="addScheduleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addScheduleModalLabel">Add New Schedule</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="teacherSelect" class="form-label">Teacher</label>
                                            <select class="form-select" id="teacherSelect" required>
                                                <option value="Teacher" selected disabled>Select Teacher</option>
                                                <option value="1">John Smith</option>
                                                <option value="2">Sarah Johnson</option>
                                                <option value="3">David Wilson</option>
                                                <option value="4">Maria Garcia</option>
                                                <option value="5">Robert Brown</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="subjectSelect" class="form-label">Subject</label>
                                            <select class="form-select" id="subjectSelect" required>
                                                <option value="Subject" selected disabled>Select Subject</option>
                                                <option value="1">Mathematics</option>
                                                <option value="2">English</option>
                                                <option value="3">Science</option>
                                                <option value="4">History</option>
                                                <option value="5">Physical Education</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="daySelect" class="form-label">Day</label>
                                            <select class="form-select" id="daySelect" required>
                                                <option value="Day" selected disabled>Select Day</option>
                                                <option value="monday">Monday</option>
                                                <option value="tuesday">Tuesday</option>
                                                <option value="wednesday">Wednesday</option>
                                                <option value="thursday">Thursday</option>
                                                <option value="friday">Friday</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="startTime" class="form-label">Start Time</label>
                                            <input type="time" class="form-control" id="startTime" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="endTime" class="form-label">End Time</label>
                                            <input type="time" class="form-control" id="endTime" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="roomSelect" class="form-label">Room</label>
                                            <select class="form-select" id="roomSelect" required>
                                                <option value="Room" selected disabled>Select Room</option>
                                                <option value="room101">Room 101</option>
                                                <option value="room102">Room 102</option>
                                                <option value="room205">Room 205</option>
                                                <option value="room305">Room 305</option>
                                                <option value="room405">Room 405</option>
                                                <option value="lab102">Lab 102</option>
                                                <option value="gym">Gymnasium</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="classSelect" class="form-label">Class</label>
                                            <select class="form-select" id="classSelect" required>
                                                <option value="Class" selected disabled>Select Class</option>
                                                <option value="class9a">Class 9A</option>
                                                <option value="class9b">Class 9B</option>
                                                <option value="class10a">Class 10A</option>
                                                <option value="class10b">Class 10B</option>
                                                <option value="class11a">Class 11A</option>
                                                <option value="class12a">Class 12A</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="scheduleNotes" class="form-label">Notes</label>
                                            <textarea class="form-control" id="scheduleNotes" rows="3"></textarea>
                                        </div>
                                        <div class="col-12 form-check">
                                            <input class="form-check-input" type="checkbox" id="recurringCheck">
                                            <label class="form-check-label" for="recurringCheck">
                                                Recurring Schedule (Every Week)
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Save Schedule</button>
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
    <!-- Init -->
    <script src="assets/js/app/teachers-schedule.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endsection