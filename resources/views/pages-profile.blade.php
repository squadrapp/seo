@extends('partials.layouts.master')

@section('title', 'Pages | Urbix Admin & Dashboards Template')
@section('title-sub', 'Page')
@section('pagetitle', 'Profile')
@section('css')
  <!-- Uploaded css -->
    <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css">
    <!-- Picker -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
    <!-- Select -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection
@section('content')
            <div class="pages-profile">       
            </div>

            <div class="main-profile-bg position-relative">
                <div class="profile-bg">
                    <img src="assets/images/p-bg.jpg" alt="Profile Background" class="w-100 h-100 object-fit-cover">
                </div>
            </div>
            <div class="position-relative z-1 text-end edit-btn">
                <button class="btn border border-white text-white">Edit Profile</button>
            </div>
            <div class="card overflow-hidden position-relative z-1">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-between flex-wrap align-items-center gap-6">
                        <div class="flex-shrink-0">
                            <div class="position-relative d-inline-block">
                                <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image" class="h-100px w-100px rounded-pill">
                                <div class="h-30px w-30px rounded-pill bg-primary d-flex justify-content-center align-items-center text-white border border-3 border-light-subtle position-absolute fs-12 bottom-0 end-0">
                                    <i class="bi bi-camera"></i>
                                </div>
                                <span class="position-absolute profile-dot bg-success rounded-circle">
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="mb-1">Liam Carter <i class="bi bi-patch-check-fill fs-16 ms-1 text-success"></i>
                            </h4>
                            <p class="text-muted mb-1">Fashion & Graphic Designer</p>
                            <p class="text-muted mb-0">Canada</p>
                        </div>
                        <div class="d-flex flex-wrap gap-4">
                            <div class="d-flex flex-column justify-content-center gap-1 w-128px text-center py-4 border rounded-2">
                                <h4 class="mb-2 lh-1">102</h4>
                                <span class="text-muted lh-sm fs-12">Post</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center gap-1 w-128px text-center py-4 border rounded-2">
                                <h4 class="mb-2 lh-1">3.2k</h4>
                                <span class="text-muted lh-sm fs-12">Followers</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center gap-1 w-128px text-center py-4 border rounded-2">
                                <h4 class="mb-2 lh-1">951</h4>
                                <span class="text-muted lh-sm fs-12">Following</span>
                            </div>
                        </div>
                        <div class="d-flex float-end gap-2 flex-shrink-0">
                            <button type="button" class="btn btn-light">Hire me</button>
                            <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Follow</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Personal Details</h5>
                            <a href="#!" class="fs-14"><i class="ri-edit-line me-1"></i>Edit</a>
                        </div>
                        <div class="card-body d-flex flex-column gap-4 text-truncate">
                            <div class="d-flex align-items-center gap-3">
                                <i class="ri-map-pin-line fs-16 text-muted"></i>
                                <p class="mb-0">Los Angeles, Canada</p>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="ri-mail-line fs-16 text-muted"></i>
                                <p class="mb-0">admin@example.com</p>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="ri-phone-line fs-16 text-muted"></i>
                                <p class="mb-0">+1 (555) 123-4567</p>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="ri-shield-user-line fs-16 text-muted"></i>
                                <p class="mb-0">Administrator</p>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="ri-user-2-line fs-16 text-muted"></i>
                                <p class="mb-0">Male</p>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="ri-calendar-line fs-16 text-muted"></i>
                                <p class="mb-0">32 years old</p>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="ri-time-line fs-16 text-muted"></i>
                                <p class="mb-0">Joined on Jan 10, 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Skill Overview</h5>
                        </div>
                        <div class="card-body d-flex flex-column gap-4">
                            <div>
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-1">
                                    <span class="text-truncate"><i class="ri-brush-line me-2 text-muted"></i>Design</span>
                                    <span class="text-muted">90%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-1">
                                    <span class="text-truncate"><i class="ri-code-s-slash-line me-2 text-muted"></i>Frontend Development</span>
                                    <span class="text-muted">85%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-1">
                                    <span class="text-truncate"><i class="ri-team-line me-2 text-muted"></i>Team Management</span>
                                    <span class="text-muted">75%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-1">
                                    <span class="text-truncate"><i class="ri-bar-chart-box-line me-2 text-muted"></i>Analytics</span>
                                    <span class="text-muted">70%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Social Profile</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-primary icon-btn rounded">
                                    <i class="ri-facebook-fill fs-18"></i>
                                </button>
                                <button type="button" class="btn btn-info icon-btn rounded">
                                    <i class="ri-twitter-line fs-18"></i>
                                </button>
                                <button type="button" class="btn btn-danger icon-btn rounded">
                                    <i class="ri-instagram-line fs-18"></i>
                                </button>
                                <button type="button" class="btn btn-dark icon-btn rounded">
                                    <i class="ri-github-line fs-18"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-last order-xl-2">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="pages-profile-tab" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">About Us</h5>
                                    <span class="badge bg-success-subtle text-success">56% Complete</span>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Welcome to our profile section. This space provides a consolidated overview of your role, ongoing projects, and recent contributions within the platform. As a valued member of the administrative team, your work plays a crucial role in maintaining the integrity and progress of ongoing operations.
                                    </p>
                                    <p class="mb-0">
                                        Whether you're reviewing reports, coordinating with team members, or managing workflow across multiple modules, this dashboard is tailored to keep everything at your fingertips. It also ensures that updates, alerts, and deadlines are always in view, empowering you to take timely action when needed. Through this panel, track the status of collaborative projects, and manage essential content tied to your department.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Recent Activity</h5>
                                </div>
                                <div class="card-body">
                                    <div class="timeline2 icon-timeline">
                                        <ul>
                                            <li class="box">
                                                <span class="bg-primary">
                                                    <i class="ri-image-line"></i>
                                                </span>
                                                <div class="text-muted float-end fs-13">21 Mar 2025</div>
                                                <div class="title">Profile Image Updated</div>
                                                <div class="info">The user updated their profile picture to reflect the latest changes. This image will now appear across all modules including dashboard, reports, and communication logs.</div>
                                                <div class="info text-muted">Uploaded <b class="text-body">“profile-new.jpg”</b></div>
                                                <div class="mt-3 d-flex gap-2">
                                                    <img src="assets/images/small/img-13.jpg" class="rounded h-56px" alt="Uploaded Image">
                                                    <img src="assets/images/small/img-12.jpg" class="rounded h-56px" alt="Uploaded Image">
                                                </div>
                                            </li>
                                            <li class="box">
                                                <span class="bg-success">
                                                    <i class="ri-file-2-line"></i>
                                                </span>
                                                <div class="text-muted float-end fs-13">20 Mar 2025</div>
                                                <div class="title">Document Added to Project</div>
                                                <div class="info">A new document has been successfully added to the assigned project folder. This file is now available for all collaborators with appropriate access rights and can be viewed or downloaded from the project resources section.</div>
                                                <div class="info text-muted"><b class="text-body">“UX_Research_Notes.pdf”</b> uploaded</div>
                                                <div class="mt-2 align-items-center gap-2 bg-light-subtle d-inline-flex py-2 px-4 rounded">
                                                    <i class="ri-file-pdf-2-fill text-danger fs-4"></i>
                                                    <span>UX_Research_Notes.pdf (1.2MB)</span>
                                                </div>
                                            </li>
                                            <li class="box">
                                                <span class="bg-secondary">
                                                    <i class="ri-chat-1-line"></i>
                                                </span>
                                                <div class="text-muted float-end fs-13">18 Mar 2025</div>
                                                <div class="title">Commented on team update</div>
                                                <div class="info">The user provided feedback on the latest team progress post regarding project milestones. The comment reflects engagement and readiness for the upcoming review session.</div>
                                                <div class="info text-muted">“Looks great! Let’s review this tomorrow.”</div>
                                                <div class="mt-2">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item avatar-md fw-semibold avatar-title bg-primary">
                                                            4+
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="box">
                                                <span class="bg-warning">
                                                    <i class="ri-folder-shared-line"></i>
                                                </span>
                                                <div class="text-muted float-end fs-13">19 Mar 2025</div>
                                                <div class="title">Marketing Assets Shared</div>
                                                <div class="info">The user shared a compressed folder containing brand guidelines, logos, and campaign creatives with the entire marketing team. Members with access can now download or reference these assets in their respective modules.</div>
                                                <div class="info text-muted"><b class="text-body">“marketing-assets.zip”</b> shared with team</div>
                                                <div class="mt-2 align-items-center gap-2 bg-light-subtle d-inline-flex py-2 px-4 rounded">
                                                    <i class="ri-archive-line text-warning fs-4"></i>
                                                    <span>marketing-assets.zip (5.6MB)</span>
                                                </div>
                                            </li>
                                            <li class="box">
                                                <span class="bg-danger">
                                                    <i class="ri-group-line"></i>
                                                </span>
                                                <div class="text-muted float-end fs-13">14 Mar 2025</div>
                                                <div class="title">Joined new team</div>
                                                <div class="info">The user <strong>John Carter</strong> was successfully added to the <strong>“Marketing Strategy Group”</strong> to collaborate on campaign planning, content development, and cross-platform initiatives.</div>
                                                <div class="d-flex align-items-center gap-2 mt-2">
                                                    <img src="assets/images/avatar/avatar-10.jpg" class="rounded-circle" alt="John Carter" width="32" height="32">
                                                    <div>
                                                        <div class="fw-medium">John Carter (Team Member)</div>
                                                        <div class="text-muted fs-13">Marketing Specialist</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pages-projects-tab" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Active Projects</h5>
                                    <div class="mb-5 pb-5 border-bottom">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Website Redesign 2025</h6>
                                            <span class="badge bg-primary">In Progress</span>
                                        </div>
                                        <p class="text-muted mb-3">Start: <span class="text-body">01 Mar 2025</span> • Due: <span class="text-body">30 Apr 2025</span></p>
                                        <p>Revamping the corporate website to enhance user experience and load performance. Includes UI/UX, frontend dev, and testing phases.</p>
                                        <div class="d-flex justify-content-between align-items-center mb-1 fs-13">
                                            <p class="mb-0 text-muted">Task: <span class="text-body">169/236</span></p>
                                            <p class="text-muted mb-0">65% Completed</p>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" style="width: 65%;" role="progressbar"></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-group">
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                    </a>
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                    </a>
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                                    </a>
                                                </div>
                                                <span class="text-muted">150 Members</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span>Budget - <strong>$25.5k</strong></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-5 pb-5 border-bottom">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Mobile App Launch</h6>
                                            <span class="badge bg-success">Completed</span>
                                        </div>
                                        <p class="text-muted mb-3">Start: <span class="text-body">15 Jan 2025</span> • Due: <span class="text-body">15 Mar 2025</span></p>
                                        <p>Development and deployment of the company’s flagship mobile app, including backend integration, QA, and app store submissions.</p>
                                        <div class="d-flex justify-content-between align-items-center mb-1 fs-13">
                                            <p class="mb-0 text-muted">Task: <span class="text-body">212/212</span></p>
                                            <p class="text-muted mb-0">100% Completed</p>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 100%;" role="progressbar"></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-group">
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-2.jpg" alt="avatar image">
                                                    </a>
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                                    </a>
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-7.jpg" alt="avatar image">
                                                    </a>
                                                </div>
                                                <span class="text-muted">95 Members</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span>Budget - <strong>$18.2k</strong></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5 pb-5 border-bottom">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Marketing Campaign Q2</h6>
                                            <span class="badge bg-warning">Ongoing</span>
                                        </div>
                                        <p class="text-muted mb-3">Start: <span class="text-body">05 Apr 2025</span> • Due: <span class="text-body">30 Jun 2025</span></p>
                                        <p>Coordinated digital and offline marketing strategies to boost product awareness and lead generation during Q2.</p>
                                        <div class="d-flex justify-content-between align-items-center mb-1 fs-13">
                                            <p class="mb-0 text-muted">Task: <span class="text-body">78/120</span></p>
                                            <p class="text-muted mb-0">65% Completed</p>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 65%;" role="progressbar"></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-group">
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-8.jpg" alt="avatar image">
                                                    </a>
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg" alt="avatar image">
                                                    </a>
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                                    </a>
                                                </div>
                                                <span class="text-muted">280 Members</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span>Budget - <strong>$40k</strong></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">CRM Integration Project</h6>
                                            <span class="badge bg-info">Pending Review</span>
                                        </div>
                                        <p class="text-muted mb-3">Start: <span class="text-body">10 Feb 2025</span> • Due: <span class="text-body">28 May 2025</span></p>
                                        <p>Seamlessly integrating a new CRM platform with existing infrastructure for improved sales tracking and customer engagement workflows.</p>
                                        <div class="d-flex justify-content-between align-items-center mb-1 fs-13">
                                            <p class="mb-0 text-muted">Task: <span class="text-body">102/135</span></p>
                                            <p class="text-muted mb-0">75% Completed</p>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-info" style="width: 75%;" role="progressbar"></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-group">
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-9.jpg" alt="avatar image">
                                                    </a>
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-2.jpg" alt="avatar image">
                                                    </a>
                                                    <a href="#!" class="avatar-item">
                                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                    </a>
                                                </div>
                                                <span class="text-muted">112 Members</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span>Budget - <strong>$31k</strong></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pages-post-tab" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div dir="ltr" class="swiper default-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-1.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-2.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-3.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-1.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-2.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-3.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle me-2 avatar-md" alt="User Avatar">
                                            <div>
                                                <h6 class="mb-0 fs-14">alex_morgan</h6>
                                                <small class="text-muted">2 hrs ago</small>
                                            </div>
                                        </div>
                                        <i class="ri-more-2-fill fs-18 text-muted"></i>
                                    </div>
                                    <img src="assets/images/small/img-2.jpg" class="img-fluid w-100 object-fit-cover rounded" alt="Instagram Post">
                                    <div class="d-flex justify-content-between mb-2 mt-3">
                                        <div class="d-flex gap-3">
                                            <i class="ri-heart-line fs-20"></i>
                                            <i class="ri-chat-3-line fs-20"></i>
                                            <i class="ri-send-plane-line fs-20"></i>
                                        </div>
                                        <i class="ri-bookmark-line fs-20"></i>
                                    </div>
                                    <p class="mb-1"><strong>1,240 likes</strong></p>
                                    <p class="mb-1"><strong>alex_morgan</strong> Weekend vibes with the crew 🌅🎉 #relax #friends</p>
                                    <p class="text-muted mb-2" style="cursor: pointer;">View all 23 comments</p>
                                    <small class="text-muted">6 April 2025</small>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="file-upload dropzone " id="my-dropzone"></div>
                                    <div class="text-end">
                                        <button class="btn btn-primary mt-4">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pages-team-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a href="#!" class="link-body-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View Team</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit Details</a></li>
                                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)">Remove</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                                                    <div class="h-40px w-40px d-flex justify-content-center align-items-center bg-dark-subtle text-body fs-5 rounded">
                                                        <i class="ri-pencil-ruler-2-line"></i>
                                                    </div>
                                                    <h6 class="mb-1">Design Team</h6>
                                                </div>
                                                <p class="text-muted mb-4">Creative squad responsible for crafting UI/UX across platforms.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-group">
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                                            </a>
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                            </a>
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                            </a>
                                                        </div>
                                                        <span class="text-muted small d-none d-xxl-block">8 Members</span>
                                                    </div>
                                                    <span class="badge bg-info-subtle text-info">Active</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a href="#!" class="link-body-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View Team</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit Details</a></li>
                                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)">Remove</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                                                    <div class="h-40px w-40px d-flex justify-content-center align-items-center bg-dark-subtle text-body fs-5 rounded">
                                                        <i class="ri-megaphone-line"></i>
                                                    </div>
                                                    <h6 class="mb-1">Marketing Team</h6>
                                                </div>
                                                <p class="text-muted mb-4">Drives branding, product promotion, and customer engagement strategies.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-group">
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                                            </a>
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-2.jpg" alt="avatar image">
                                                            </a>
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg" alt="avatar image">
                                                            </a>
                                                        </div>
                                                        <span class="text-muted small d-none d-xxl-block">12 Members</span>
                                                    </div>
                                                    <span class="badge bg-warning-subtle text-warning">Active</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a href="#!" class="link-body-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View Team</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit Details</a></li>
                                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)">Remove</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                                                    <div class="h-40px w-40px d-flex justify-content-center align-items-center bg-dark-subtle text-body fs-5 rounded">
                                                        <i class="ri-code-s-slash-line"></i>
                                                    </div>
                                                    <h6 class="mb-1">Development Team</h6>
                                                </div>
                                                <p class="text-muted mb-4">Engineering team focused on backend, frontend, and infrastructure solutions.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-group">
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-7.jpg" alt="avatar image">
                                                            </a>
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-9.jpg" alt="avatar image">
                                                            </a>
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-10.jpg" alt="avatar image">
                                                            </a>
                                                        </div>
                                                        <span class="text-muted small d-none d-xxl-block">18 Members</span>
                                                    </div>
                                                    <span class="badge bg-success-subtle text-success">Busy</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a href="#!" class="link-body-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View Team</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit Details</a></li>
                                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)">Remove</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                                                    <div class="h-40px w-40px d-flex justify-content-center align-items-center bg-dark-subtle text-body fs-5 rounded">
                                                        <i class="ri-box-3-line"></i>
                                                    </div>
                                                    <h6 class="mb-1">Product Team</h6>
                                                </div>
                                                <p class="text-muted mb-4">Focused on product vision, features, and user-centric improvements.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-group">
                                                            <a href="#!" class="avatar-item"><img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-8.jpg" alt="avatar"></a>
                                                            <a href="#!" class="avatar-item"><img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-9.jpg" alt="avatar"></a>
                                                        </div>
                                                        <span class="text-muted small d-none d-xxl-block">6 Members</span>
                                                    </div>
                                                    <span class="badge bg-danger-subtle text-danger">Active</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a href="#!" class="link-body-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View Team</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit Details</a></li>
                                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)">Remove</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                                                    <div class="h-40px w-40px d-flex justify-content-center align-items-center bg-dark-subtle text-body fs-5 rounded">
                                                        <i class="ri-bug-line"></i>
                                                    </div>
                                                    <h6 class="mb-1">QA Team</h6>
                                                </div>
                                                <p class="text-muted mb-4">Ensures product quality through rigorous testing and validation.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-group">
                                                            <a href="#!" class="avatar-item"><img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar"></a>
                                                            <a href="#!" class="avatar-item"><img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-6.jpg" alt="avatar"></a>
                                                        </div>
                                                        <span class="text-muted small d-none d-xxl-block">5 Members</span>
                                                    </div>
                                                    <span class="badge bg-secondary-subtle text-secondary">Idle</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a href="#!" class="link-body-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View Team</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit Details</a></li>
                                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)">Remove</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                                                    <div class="h-40px w-40px d-flex justify-content-center align-items-center bg-dark-subtle text-body fs-5 rounded">
                                                        <i class="ri-team-line"></i>
                                                    </div>
                                                    <h6 class="mb-1">HR Team</h6>
                                                </div>
                                                <p class="text-muted mb-4">Manages recruitment, employee welfare, and compliance.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-group">
                                                            <a href="#!" class="avatar-item"><img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg" alt="avatar"></a>
                                                            <a href="#!" class="avatar-item"><img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-2.jpg" alt="avatar"></a>
                                                        </div>
                                                        <span class="text-muted small d-none d-xxl-block">4 Members</span>
                                                    </div>
                                                    <span class="badge bg-info-subtle text-info">Hiring</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a href="#!" class="link-body-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View Team</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit Details</a></li>
                                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)">Remove</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                                                    <div class="h-40px w-40px d-flex justify-content-center align-items-center bg-dark-subtle text-body fs-5 rounded">
                                                        <i class="ri-customer-service-2-line"></i>
                                                    </div>
                                                    <h6 class="mb-1">Support Team</h6>
                                                </div>
                                                <p class="text-muted mb-4">Handles customer issues, feedback, and service excellence.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-group">
                                                            <a href="#!" class="avatar-item"><img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-10.jpg" alt="avatar"></a>
                                                        </div>
                                                        <span class="text-muted small d-none d-xxl-block">3 Members</span>
                                                    </div>
                                                    <span class="badge bg-warning-subtle text-warning">Online</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a href="#!" class="link-body-emphasis" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View Team</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit Details</a></li>
                                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)">Remove</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                                                    <div class="h-40px w-40px d-flex justify-content-center align-items-center bg-dark-subtle text-body fs-5 rounded">
                                                        <i class="ri-money-dollar-circle-line"></i>
                                                    </div>
                                                    <h6 class="mb-1">Finance Team</h6>
                                                </div>
                                                <p class="text-muted mb-4">Handles budgeting, forecasting, and financial operations.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-group">
                                                            <a href="#!" class="avatar-item"><img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-3.jpg" alt="avatar"></a>
                                                        </div>
                                                        <span class="text-muted small d-none d-xxl-block">4 Members</span>
                                                    </div>
                                                    <span class="badge bg-success-subtle text-success">Auditing</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pages-settings-tab" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <label for="fullName" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="fullName" value="Liam Carter">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" value="liamcarter">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="email" value="liamcarter@gmail.com">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" id="phone" placeholder="+1 (555) 123-4567">
                                            </div>
                                            <div class="col-12">
                                                <label for="linkedin" class="form-label">LinkedIn</label>
                                                <input type="url" class="form-control" id="linkedin" placeholder="https://linkedin.com/in/username">
                                            </div>
                                            <div class="col-12">
                                                <label for="twitter" class="form-label">Twitter</label>
                                                <input type="url" class="form-control" id="twitter" placeholder="https://twitter.com/username">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="basic-picker" class="form-label">Date of Birth</label>
                                                <input type="text" class="form-control" id="basic-picker" placeholder="Select a date">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="gender-choice" class="form-label">Gender</label>
                                                <select id="gender-choice">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="country" class="form-label">Country</label>
                                                <input type="text" class="form-control" id="country" value="USA">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="city" value="New York">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="language-choice" class="form-label">Preferred Language</label>
                                                <select id="language-choice">
                                                    <option>English</option>
                                                    <option>Spanish</option>
                                                    <option>French</option>
                                                    <option>German</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="timezone-choice" class="form-label">Timezone</label>
                                                <select id="timezone-choice">
                                                    <option>(UTC -05:00) Eastern Time (US & Canada)</option>
                                                    <option>(UTC +01:00) Central European Time</option>
                                                    <option>(UTC +05:30) India Standard Time</option>
                                                    <option>(UTC +08:00) China Standard Time</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="bio" class="form-label">Bio</label>
                                                <textarea class="form-control" id="bio" rows="4" placeholder="Write something about yourself..."></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-4 mt-3">
                                            <label class="form-label">Notifications</label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="emailNotif" checked>
                                                <label class="form-check-label" for="emailNotif">Email Notifications</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="smsNotif">
                                                <label class="form-check-label" for="smsNotif">SMS Alerts</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 order-2 order-xl-last">
                    <div class="d-flex flex-column">
                        <div class="card order-2 order-xl-1">
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#pages-profile-tab" role="tab" aria-selected="false" tabindex="-1">
                                            <div class="fw-semibold"><i class="ri-home-2-line me-3"></i>Profile</div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pages-projects-tab" role="tab" aria-selected="true">
                                            <div class="fw-semibold"><i class="ri-user-3-line me-3"></i>Projects</div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pages-post-tab" role="tab" aria-selected="false" tabindex="-1">
                                            <div class="fw-semibold"><i class="ri-mail-line me-3"></i>Posts</div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pages-team-tab" role="tab" aria-selected="false" tabindex="-1">
                                            <div class="fw-semibold"><i class="ri-team-line me-3"></i>Team</div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pages-settings-tab" role="tab" aria-selected="false" tabindex="-1">
                                            <div class="fw-semibold"><i class="ri-settings-3-line me-3"></i>Settings</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card order-1 order-xl-2">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Connection</h5>
                            </div>
                            <div class="card-body d-flex flex-column gap-6">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-md" alt="User">
                                    <div class="text-truncate">
                                        <h6 class="mb-0">Michael Carter</i></h6>
                                        <small class="text-muted">Frontend Developer | Jan 12, 2024</small>
                                    </div>
                                    <button class="btn btn-light-primary icon-btn ms-auto"><i class="ri-user-add-line"></i></button>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-md" alt="User">
                                    <div class="text-truncate">
                                        <h6 class="mb-0">Emily Johnson</h6>
                                        <small class="text-muted">UI/UX Designer | Feb 02, 2024</small><br>
                                    </div>
                                    <button class="btn btn-light-primary icon-btn ms-auto"><i class="ri-user-add-line"></i></button>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-md" alt="User">
                                    <div class="text-truncate">
                                        <h6 class="mb-0">Daniel Parker</h6>
                                        <small class="text-muted">Backend Developer | Mar 14, 2024</small><br>
                                    </div>
                                    <button class="btn btn-light-primary icon-btn ms-auto"><i class="ri-user-add-line"></i></button>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-md" alt="User">
                                    <div class="text-truncate">
                                        <h6 class="mb-0">Sarah Thompson</h6>
                                        <small class="text-muted">Project Manager | Apr 01, 2024</small><br>
                                    </div>
                                    <button class="btn btn-light-primary icon-btn ms-auto"><i class="ri-user-add-line"></i></button>
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

<!-- Uploaded js -->
<script src="assets/libs/dropzone/dropzone-min.js"></script>
<!-- Picker -->
<script src="assets/libs/air-datepicker/air-datepicker.js"></script>
<!-- Select -->
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<!-- Upload -->
<script src="assets/js/form/file-upload.init.js"></script>
<script src="assets/js/pages/profile.init.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>

@endsection