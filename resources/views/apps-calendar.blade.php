@extends('partials.layouts.master')

@section('title', 'Calendar | Urbix Admin & Dashboards Template')
@section('title-sub', 'Applications')
@section('pagetitle', 'Calendar')

@section('content')

<!-- begin::App -->

            <div class="row">
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card">
                        <div class="p-5 pb-0">
                            <div>
                                <button type="button" class="btn btn-primary w-100" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                                    <svg width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg> Create Event
                                </button>
                                <div id="external-events-container">
                                    <div class="external-event bg-success-subtle border-2 border-start border-success text-success py-2 my-1" data-class="bg-success-subtle" data-title="Holiday" data-description="Today is a Holiday">
                                        <i class="mdi mdi-checkbox-blank-circle me-2"></i> Holiday
                                    </div>
                                    <div class="external-event bg-primary-subtle border-2 border-start border-primary text-primary py-2 my-1" data-class="bg-primary-subtle" data-title="Meeting" data-description="Today is a Meeting">
                                        <i class="mdi mdi-checkbox-blank-circle me-2"></i> Meeting
                                    </div>
                                    <div class="external-event bg-warning-subtle border-2 border-start border-warning text-warning py-2 my-1" data-class="bg-warning-subtle" data-title="Deadline" data-description="Today is a Deadline">
                                        <i class="mdi mdi-checkbox-blank-circle me-2"></i> Deadline
                                    </div>
                                    <div class="external-event bg-danger-subtle border-2 border-start border-danger text-danger py-2 my-1" data-class="bg-danger-subtle" data-title="Birthday" data-description="Today is a Birthday">
                                        <i class="mdi mdi-checkbox-blank-circle me-2"></i> Birthday
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h4>Employees</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <i class="ri-more-fill"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body" data-simplebar style="height: 250px;">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex">
                                    <img src="assets/images/avatar/avatar-1.jpg" class="avatar-md rounded-2 me-3" alt="Avatar images">
                                    <div>
                                        <h6 class="mb-0">Valerie Farmer</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">React Developer</span>
                                            <ul class="fs-12 mb-0 text-info ps-xxl-6 ps-xl-4">
                                                <li>Development</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex">
                                    <img src="assets/images/avatar/avatar-2.jpg" class="avatar-md rounded-2 me-3" alt="Avatar images">
                                    <div>
                                        <h6 class="mb-0">George Prince</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">Head Of Design</span>
                                            <ul class="fs-12 mb-0 text-info ps-xxl-6 ps-xl-4">
                                                <li>Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex">
                                    <img src="assets/images/avatar/avatar-3.jpg" class="avatar-md rounded-2 me-3" alt="Avatar images">
                                    <div>
                                        <h6 class="mb-0">Parker Campbell</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">Brand TeamLead</span>
                                            <ul class="fs-12 mb-0 text-info ps-xxl-6 ps-xl-4">
                                                <li>Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex">
                                    <img src="assets/images/avatar/avatar-4.jpg" class="avatar-md rounded-2 me-3" alt="Avatar Images">
                                    <div>
                                        <h6 class="mb-0">Robert Beltran</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">Marketing Trainee</span>
                                            <ul class="fs-12 mb-0 text-info ps-xxl-6 ps-xl-4">
                                                <li>Marketing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex">
                                    <img src="assets/images/avatar/avatar-5.jpg" class="avatar-md rounded-2 me-3" alt="Avatar Images">
                                    <div>
                                        <h6 class="mb-0">Jennifer Lambert</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">UI Designer</span>
                                            <ul class="fs-12 mb-0 text-info ps-xxl-6 ps-xl-4">
                                                <li>Design</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Reminders</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <i class="ri-more-fill"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Valerie Farmer</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">Today <i class="ri-separator"></i> 1:00 PM <span class="badge bg-warning p-1  ms-1">New</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-primary-subtle rounded-4 text-primary">
                                            <i class="ri-video-on-fill"></i> Meeting
                                        </span>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Brand TeamLead</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">Today <i class="ri-separator"></i> 3:00 PM <span class="badge bg-warning p-1 ms-1">New</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-primary-subtle rounded-4 text-primary">
                                            <i class="ri-video-on-fill"></i> Meeting
                                        </span>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Mathew Self</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">Today<span class="badge bg-warning p-1 ms-1">New</span></span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-danger-subtle rounded-4 text-danger">
                                            <i class="ri-cake-2-line"></i> Birthday
                                        </span>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Design Talk</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">in 2 days <i class="ri-separator"></i> 03:00 PM</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-warning-subtle rounded-4 text-warning">
                                            <i class="ri-cake-2-line"></i> Deadline
                                        </span>
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Summer Weekend</h6>
                                        <div class="d-xxl-flex d-xl-block d-flex">
                                            <span class="fs-12">The Day After Tomorrow</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-success-subtle rounded-4 text-success">
                                            <i class="bi bi-water"></i> Holiday
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->


<!-- modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header p-3">
                <h5 class="modal-title">Add Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body p-4">
                <form class="needs-validation" name="event-form" id="form-event">
                    <input type="hidden" id="eventId">
                    <label for="title" class="mb-2">Event Title:</label>
                    <input type="text" placeholder="Enter Event Title" class="form-control moving-placeholder" id="inputExample" required>
                    <div class="text-danger mt-2" id="titleErr"></div>
                    <label class="mb-2" for="calendarProps">Label:</label>
                    <select class="form-select mb-2" id="form-select-01" name="form-select-01" aria-label="Default select example">
                        <option selected="menu">Open this select menu</option>
                        <option value="bg-danger-subtle">Danger</option>
                        <option value="bg-warning-subtle">Warning</option>
                        <option value="bg-primary-subtle">Primary</option>
                        <option value="bg-success-subtle">Success</option>
                    </select>
                    <div class="col-12 mb-2">
                        <label for="inputExample" class="form-label">From:</label>
                        <input type="date" class="form-control" id="inputExample">
                    </div>
                    <div class="col-12 mb-2">
                        <label for="inputExample" class="form-label">To:</label>
                        <input type="date" class="form-control" id="inputExample">
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control d-block" id="description" placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                        </div>
                    </div>
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" class="btn btn-primary">Add Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Event Details Modal -->
<div class="modal fade" id="eventDetailsModal" aria-hidden="true" aria-labelledby="eventDetailsModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header p-3">
                <h5 class="modal-title" id="eventDetailsTitle">Event Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <p id="eventDetailsTitleText"></p>
                <p id="eventDetailsLabel"></p>
                <p id="eventDetailsStart"></p>
                <p id="eventDetailsEnd"></p>
                <p id="eventDetailsDescription"></p>
                <input type="hidden" id="eventId">
            </div>
            <div class="modal-footer">
                <button id="editEventBtn" class="btn btn-primary">Edit</button>
                <button id="deleteEventBtn" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Event Modal (Your existing modal remains unchanged) -->

@endsection

@section('js')

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>

<script src="assets/libs/sweetalert2/sweetalert2.all.js"></script>

<script type="module" src="assets/js/app/apps-calendar.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

@endsection