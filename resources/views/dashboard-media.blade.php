@extends('partials.layouts.master')

@section('title', 'Index | Urbix Admin & Dashboards Template')
@section('title-sub', 'Dashboard')
@section('pagetitle', 'Media')
@section('css')
<link rel="stylesheet" type="text/css" href="assets/libs/jsvectormap/jsvectormap.min.css">
@endsection
@section('content')

                <div class="row">
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-xl-4 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/secialmedia/facebook.png" class="h-32px w-32px me-3" alt="Facebook">
                                                <p class="mb-0 fw-semibold">Facebook</p>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mt-6 g-0">
                                            <div class="col-xxl-6">
                                                <div class="border-end-xxl border-bottom border-bottom-xxl-0 pb-4 pb-xxl-0">
                                                    <h2 class="mb-0">26,458</h2>
                                                    <p class="mb-0 fw-semibold">Follwers</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <div class="text-xxl-end mb-0 pt-4 pt-xxl-0">
                                                    <h4 class="mb-0">+9k</h4>
                                                    <p class="mb-0">likes/day</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/secialmedia/instagram.png" class="h-32px w-32px me-3" alt="Instagram">
                                                <p class="mb-0 fw-semibold">Instagram</p>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mt-6 g-0">
                                            <div class="col-xxl-6">
                                                <div class="border-end-xxl border-bottom border-bottom-xxl-0 pb-4 pb-xxl-0">
                                                    <h2 class="mb-0">33,854</h2>
                                                    <p class="mb-0 fw-semibold">Follwers</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <div class="text-xxl-end mb-0 pt-4 pt-xxl-0">
                                                    <h4 class="mb-0">+97k</h4>
                                                    <p class="mb-0">likes/day</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/secialmedia/twitter.png" class="h-32px w-32px me-3" alt="Twitter">
                                                <p class="mb-0 fw-semibold">Twitter</p>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mt-6 g-0">
                                            <div class="col-xxl-6">
                                                <div class="border-end-xxl border-bottom border-bottom-xxl-0 pb-4 pb-xxl-0">
                                                    <h2 class="mb-0">36,778</h2>
                                                    <p class="mb-0 fw-semibold">Follwers</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <div class="text-xxl-end mb-0 pt-4 pt-xxl-0">
                                                    <h4 class="mb-0">+149k</h4>
                                                    <p class="mb-0">likes/day</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Engagement Rate</h4>
                                    </div>
                                    <div class="card-body" id="engagement"></div>
                                </div>
                            </div>
                            <div class="col-xxl-3">
                                <div class="row">
                                    <div class="col-xxl-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p class="mb-1 fs-18">Engaged Users</p>
                                                <h3 class="fw-semibold">12.2k</h3>
                                                <div id="spark1"></div>
                                                <p class="mb-0"><span class="fw-medium text-success"><i class="ri-arrow-up-fill"></i> </span>19%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p class="mb-2 fs-18">Page Impression</p>
                                                <h3 class="fw-semibold">48</h3>
                                                <div id="spark2"></div>
                                                <p class="mb-0"><span class="fw-medium text-danger"><i class="ri-arrow-down-fill"></i> </span>8%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Visitor’s Profile</h4>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body">
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
                                                <div id="donutChart"></div>
                                                <div class="row">
                                                    <div class="col-6 py-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-flex justify-content-end">
                                                                <i class="bi bi-circle-fill me-2 text-primary"></i>
                                                                <h4 class="mb-0">Male</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6 py-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-flex">
                                                                <i class="bi bi-circle-fill me-2 text-primary opacity-60"></i>
                                                                <h4 class="mb-0">Female</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header pb-5 mb-4">
                                                    <h4>Page Reach</h4>
                                                    <div class="btn-group">
                                                        <button class="btn btn-outline-light text-body dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Weekly
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0)">Weekly</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">In Transit</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Delivered</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Pending</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Delayed</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Canceled</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-xxl-flex align-items-center mb-1">
                                                        <h1>83.8</h1>
                                                        <p class="fs-16 fw-normal mb-0">visitors per month</p>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="avatar-group justify-content-center">
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg" alt="avatar image">
                                                            </a>
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-2.jpg" alt="avatar image">
                                                            </a>
                                                            <a href="#!" class="avatar-item">
                                                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                                            </a>
                                                        </div>
                                                        <p class="mb-0 ms-2">236+ New users</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daily visitors</h4>
                                <div>
                                    <button class="btn btn-light">
                                        <i class="ri-arrow-left-wide-line"></i>
                                    </button>
                                    <button class="btn btn-light mx-3">
                                        11-20 Jan
                                    </button>
                                    <button class="btn btn-light">
                                        <i class="ri-arrow-right-wide-fill"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl-7">
                                        <div id="visitors"></div>
                                    </div>
                                    <div class="col-xxl-5 mt-auto">
                                        <div class="row row-cols-3">
                                            <div class="col">
                                                <div class="p-6 bg-light text-center rounded-3">
                                                    <h4>25.20K</h4>
                                                    <p class="mb-0">Facebook</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-6 bg-light text-center rounded-3">
                                                    <h4>38.94K</h4>
                                                    <p class="mb-0">Instagram</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-6 bg-light text-center rounded-3">
                                                    <h4>75.05K</h4>
                                                    <p class="mb-0">Twitter</p>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-8 pt-3">
                                                <ul class="d-flex justify-content-around list-unstyled">
                                                    <li class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="h-32px w-32px d-flex justify-content-center align-items-center bg-primary-subtle me-3 rounded"></div>
                                                            <h6 class="fs-16 mb-0">Productivity</h6>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="fs-16 mb-0">+1.8K</h6>
                                                            <h6 class="fs-16 mx-2 mb-0">Productivity</h6>
                                                            <i class="ri-arrow-up-long-line text-success fs-5"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="d-flex justify-content-around list-unstyled">
                                                    <li class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="h-32px w-32px d-flex justify-content-center align-items-center bg-info me-3 rounded"></div>
                                                            <h6 class="fs-16 mb-0">Productivity</h6>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="fs-16 mb-0">-185</h6>
                                                            <h6 class="fs-16 mx-2 mb-0">Productivity</h6>
                                                            <i class="ri-arrow-down-long-line text-danger fs-5"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="d-flex justify-content-around list-unstyled">
                                                    <li class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="h-32px w-32px d-flex justify-content-center align-items-center bg-primary me-3 rounded"></div>
                                                            <h6 class="fs-16 mb-0">Productivity</h6>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="fs-16 mb-0">+230</h6>
                                                            <h6 class="fs-16 mx-2 mb-0">Productivity</h6>
                                                            <i class="ri-arrow-up-long-line text-success fs-5"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Global Engagement</h4>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-body" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div id="global"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4>Post Activity</h4>
                                    <p class="fs-14 mb-0">From 15 Feb - 15 May,2024</p>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm">Change Period</a>
                            </div>
                            <div class="row g-0 row-cols-3 border-top border-bottom mt-6">
                                <div class="col">
                                    <div class="py-4 text-center">
                                        <h2>687</h2>
                                        <p class="mb-0 text-muted">Stories</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="py-4 text-center">
                                        <h2>189</h2>
                                        <p class="mb-0 text-muted">Posts</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="py-4 text-center">
                                        <h2>24</h2>
                                        <p class="mb-0 text-muted">Reels</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="p-0">
                                    <div class="my-2 d-flex justify-content-around text-center">
                                        <h5>S</h5>
                                        <h5>M</h5>
                                        <h5>T</h5>
                                        <h5>W</h5>
                                        <h5>T</h5>
                                        <h5>F</h5>
                                        <h5>S</h5>
                                    </div>
                                    <div class="calendar-grid" id="calendar-grid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4>Your Accounts</h4>
                                    <p class="fs-14 mb-0">You have 2 accounts</p>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm">+ Add Account</a>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-4 my-4">
                                    <div class="position-relative">
                                        <div class="avatar-item">
                                            <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                        </div>
                                        <img src="assets/images/secialmedia/instagram.png" class="position-absolute border-2 border border-white h-20px w-20px rounded-circle bg-success end-0 bottom-0" alt="Instagram">
                                    </div>
                                    <div class="w-100">
                                        <div>
                                            <h6 class="fs-16 mb-1">@samanthawilliam_</h6>
                                            <div class="d-flex text-muted">
                                                <span>Instagram</span>
                                                <ul class="mb-0">
                                                    <li>278,534 Followers</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-outline-primary">Active</a>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center gap-4 my-4">
                                    <div class="position-relative">
                                        <div class="avatar-item">
                                            <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                        </div>
                                        <img src="assets/images/secialmedia/twitter.png" class="position-absolute border-2 border border-white h-20px w-20px rounded-circle bg-success end-0 bottom-0" alt="Twitter">
                                    </div>
                                    <div class="w-100">
                                        <div>
                                            <h6 class="fs-16 mb-1">@samanthawilliam_</h6>
                                            <div class="d-flex text-muted">
                                                <span>Twitter / X</span>
                                                <ul class="mb-0">
                                                    <li>48,190 Followers</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                                <hr>
                                <div class="d-flex align-items-center gap-4 my-4">
                                    <div class="position-relative">
                                        <div class="avatar-item">
                                            <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                        </div>
                                        <img src="assets/images/secialmedia/instagram.png" class="position-absolute border-2 border border-white h-20px w-20px rounded-circle bg-success end-0 bottom-0" alt="Instagram">
                                    </div>
                                    <div class="w-100">
                                        <div>
                                            <h6 class="fs-16 mb-1">@samanthawilliam_</h6>
                                            <div class="d-flex text-muted">
                                                <span>Dribble</span>
                                                <ul class="mb-0">
                                                    <li>48,190 Followers</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                                <hr>
                                <div class="d-flex align-items-center gap-4 my-4">
                                    <div class="position-relative">
                                        <div class="avatar-item">
                                            <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                        </div>
                                        <img src="assets/images/secialmedia/behance.png" class="position-absolute border-2 border border-white h-20px w-20px rounded-circle bg-success end-0 bottom-0" alt="Behance">
                                    </div>
                                    <div class="w-100">
                                        <div>
                                            <h6 class="fs-16 mb-1">@samanthawilliam_</h6>
                                            <div class="d-flex text-muted">
                                                <span>Behance</span>
                                                <ul class="mb-0">
                                                    <li>48,190 Followers</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                                <hr>
                                <div class="d-flex align-items-center gap-4 my-4">
                                    <div class="position-relative">
                                        <div class="avatar-item">
                                            <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                        </div>
                                        <img src="assets/images/secialmedia/youtube.png" class="position-absolute border-2 border border-white h-20px w-20px rounded-circle bg-success end-0 bottom-0" alt="You Tube">
                                    </div>
                                    <div class="w-100">
                                        <div>
                                            <h6 class="fs-16 mb-1">@samanthawilliam_</h6>
                                            <div class="d-flex text-muted">
                                                <span>YouTube</span>
                                                <ul class="mb-0">
                                                    <li>48,190 Followers</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4>Post Insights</h4>
                                    <p class="fs-14 mb-0">Posted on May 10, 2024 -6:10pm</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-xl-flex justify-content-between align-items-center gap-4">
                                    <div>
                                        <h6 class="fs-16 mb-1">Accounts reached</h6>
                                        <h2 class="mb-0">5,192,879</h2>
                                    </div>
                                    <div id="reached"></div>
                                </div>
                                <hr>
                                <div class="d-xl-flex justify-content-between align-items-center gap-4">
                                    <div>
                                        <h6 class="fs-16 mb-1">Followers</h6>
                                        <h2 class="mb-0">+2,953</h2>
                                    </div>
                                    <div id="followers"></div>
                                </div>
                                <hr>
                                <div class="d-flex mt-4">
                                    <div>
                                        <h4>Unique Finding</h4>
                                        <p class="fw-semibold">You have gained more reach and followers when the post is related to workspace or productivity. Keep it up!</p>
                                        <a class="btn btn-outline-primary rounded-pill" href="javascript:void(0)">Subscribe for another finding</a>
                                    </div>
                                    <div class="mt-auto">
                                        <img src="assets/images/dashboard/laptop.png" class="img-fluid" width="300px" alt="Laptop">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4 class="flex-grow-1">Global Reach</h4>
                                    <p class="mb-0 fs-14"><span class="text-success">+8.6%</span>Than last month</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h-30px w-30px position-relative d-flex justify-content-center align-items-center rounded-circle bg-light me-2"><i class="ri-upload-cloud-line"></i></div>
                                    Export
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-auto me-2">
                                        <div class="w-144px my-5 py-2">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between align-items-center fs-13">
                                                    <p class="text-muted mb-1">Indonesia</p>
                                                </div>
                                                <div class="progress bg-primary-subtle progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 75%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-144px my-5 py-2">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between align-items-center fs-13">
                                                    <p class="text-muted mb-1">India</p>
                                                </div>
                                                <div class="progress bg-primary-subtle progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-144px my-5 py-2">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between align-items-center fs-13">
                                                    <p class="text-muted mb-1">America</p>
                                                </div>
                                                <div class="progress bg-primary-subtle progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 90%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-144px mt-5 pt-2">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between align-items-center fs-13">
                                                    <p class="text-muted mb-1">Europe</p>
                                                </div>
                                                <div class="progress bg-primary-subtle progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 25%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-auto">
                                        <div class="w-144px mt-5 pt-2">
                                            <div class="w-100">
                                                <div class="d-flex justify-content-between align-items-center fs-13">
                                                    <p class="text-muted mb-1">Other</p>
                                                </div>
                                                <div class="progress bg-primary-subtle progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 10%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="world-map" class="min-h-320px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Segmentation Age</h4>
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
                                <ul class="d-flex list-unstyled mb-0">
                                    <li class="d-flex me-5">
                                        <i class="bi bi-square-fill text-primary me-2"></i>
                                        <h4>Male</h4>
                                    </li>
                                    <li class="d-flex">
                                        <i class="bi bi-square-fill text-primary opacity-25 me-2"></i>
                                        <h4>Female</h4>
                                    </li>
                                </ul>
                                <div id="segmentation"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection

@section('js')
    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world.js"></script>

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/dashboard/media.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endsection