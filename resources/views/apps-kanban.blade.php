@extends('partials.layouts.master')

@section('title', 'Kanban | Urbix Admin & Dashboards Template')
@section('title-sub', 'Applications')
@section('pagetitle', 'Kanban')
@section('css')
    <!-- Selector Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">

    <link rel="stylesheet" href="assets/libs/dragula/dragula.min.css">
@endsection
@section('content')


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4>Members on boards</h4>
                                    <div class="avatar-group mt-2">
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
                                </div>
                                <div class="d-flex flex-wrap gap-3 align-items-center">
                                    <div class="dropdown">
                                        <button class="btn border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-equalizer-3-line"></i>
                                            Filter
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Newest</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Date Added</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">A - Z</a></li>
                                        </ul>
                                    </div>
                                    <button class="btn border-0"><i class="ri-user-shared-line fs-5 me-2"></i>Share</button>
                                    <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#createContactModal">
                                        <i class="bi bi-plus-lg me-1"></i>Create Deal
                                    </button>
                                    <div class="dropdown dropdown-menu-end">
                                        <button class="btn border-0 p-0" type="button" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                            <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex overflow-x-scroll gap-4">
                                    <!-- New Deals -->
                                    <div class="kanban-list">
                                        <div class="d-flex justify-content-between align-items-center pb-4 border-bottom">
                                            <div>
                                                <span class="badge bg-primary-subtle text-primary">TO DO</span>
                                                <span class="badge bg-secondary-subtle text-secondary">3</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn border-0 p-0"><i class="bi bi-plus fs-4"></i></button>
                                                <div class="dropdown dropdown-menu-end">
                                                    <button class="btn border-0 p-0" type="button" data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="b1">
                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-danger-subtle text-danger"><i class="ri-circle-fill me-1"></i>Important</span>
                                                    <span class="badge bg-info-subtle text-info">UI/UX Designer</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Urbix</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/3</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-2.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>236</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>89</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>51</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-primary-subtle text-primary">Urgent</span>
                                                    <span class="badge bg-warning-subtle text-warning">Branding</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Fabkin</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/6</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>489</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>64</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>23</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-secondary-subtle text-secondary">UX stages</span>
                                                    <span class="badge bg-warning-subtle text-warning">Branding</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Be specific</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/5</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>156</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>39</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>19</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <button class="btn btn-light w-100">+ Add Card</button>
                                        </div>
                                    </div>

                                    <!-- In Progress -->
                                    <div class="kanban-list">
                                        <div class="d-flex justify-content-between align-items-center pb-4 border-bottom">
                                            <div>
                                                <span class="badge bg-danger-subtle text-danger">Proposal Sent</span>
                                                <span class="badge bg-secondary-subtle text-secondary">2</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn border-0 p-0"><i class="bi bi-plus fs-4"></i></button>
                                                <div class="dropdown dropdown-menu-end">
                                                    <button class="btn border-0 p-0" type="button" data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="b2">
                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-success-subtle text-success">UI Reserch</span>
                                                    <span class="badge bg-primary-subtle text-primary">Urgent</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Tracking</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/2</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>69</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>13</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>3</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-danger-subtle text-danger">Important</span>
                                                    <span class="badge bg-secondary-subtle text-secondary">Low</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Zeno</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/7</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-9.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>69</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>13</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>3</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <button class="btn btn-light w-100">+ Add Card</button>
                                        </div>
                                    </div>

                                    <!-- Closed Won -->
                                    <div class="kanban-list">
                                        <div class="d-flex justify-content-between align-items-center pb-4 border-bottom">
                                            <div>
                                                <span class="badge bg-success-subtle text-success">Negotiation</span>
                                                <span class="badge bg-secondary-subtle text-secondary">3</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn border-0 p-0"><i class="bi bi-plus fs-4"></i></button>
                                                <div class="dropdown dropdown-menu-end">
                                                    <button class="btn border-0 p-0" type="button" data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="b3">
                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-info-subtle text-info">Negotiation</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Dax</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/3</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-9.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>199</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>26</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>15</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-primary-subtle text-primary">Analytics</span>
                                                    <span class="badge bg-warning-subtle text-warning">Branding</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Prototyping</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/5</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-8.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>498</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>156</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>94</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-success-subtle text-success">Reserch</span>
                                                    <span class="badge bg-info-subtle text-info">High</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Testing</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/7</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-10.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>259</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>134</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>46</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <button class="btn btn-light w-100">+ Add Card</button>
                                        </div>
                                    </div>

                                    <!-- Closed Lost -->
                                    <div class="kanban-list">
                                        <div class="d-flex justify-content-between align-items-center pb-4 border-bottom">
                                            <div>
                                                <span class="badge bg-warning-subtle text-warning">Closed Won</span>
                                                <span class="badge bg-secondary-subtle text-secondary">2</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn border-0 p-0"><i class="bi bi-plus fs-4"></i></button>
                                                <div class="dropdown dropdown-menu-end">
                                                    <button class="btn border-0 p-0" type="button" data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="b4">
                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-info-subtle text-info">High</span>
                                                    <span class="badge bg-danger-subtle text-danger">Important</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">User Research</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/4</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-11.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>376</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>179</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>59</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-primary-subtle text-primary">Urgent</span>
                                                    <span class="badge bg-secondary-subtle text-secondary">Low</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Wireframing</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/6</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-12.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>179</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>111</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>55</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <button class="btn btn-light w-100">+ Add Card</button>
                                        </div>
                                    </div>

                                    <!-- Closed Lost -->
                                    <div class="kanban-list">
                                        <div class="d-flex justify-content-between align-items-center pb-4 border-bottom">
                                            <div>
                                                <span class="badge bg-info-subtle text-info">Closed Lost</span>
                                                <span class="badge bg-secondary-subtle text-secondary">1</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn border-0 p-0"><i class="bi bi-plus fs-4"></i></button>
                                                <div class="dropdown dropdown-menu-end">
                                                    <button class="btn border-0 p-0" type="button" data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="b5">
                                            <div class="card border my-4">
                                                <div class="card-body p-4">
                                                    <span class="badge bg-success-subtle text-success">UI Reserch</span>
                                                    <span class="badge bg-warning-subtle text-warning">Branding</span>
                                                    <div class="dropdown dropdown-menu-end float-end">
                                                        <a class="btn border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="py-3">
                                                        <h6 class="mb-1">Dax Zeno</h6>
                                                        <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur placeat pariatur saepe.</p>
                                                    </div>
                                                    <div class="border px-2 py-1 text-muted align-items-center rounded d-inline-flex">
                                                        <i class="bi bi-list-check me-1"></i><span class="fs-12">0/5</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                                    <div class="avatar-group">
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                        </a>
                                                        <a href="#!" class="avatar-item">
                                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg" alt="avatar image">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-end gap-2 align-content-center fs-12">
                                                        <a href="#!" class="text-muted"><i class="bi bi-heart me-2"></i>279</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-send me-2"></i>145</a>
                                                        <a href="#!" class="text-muted"><i class="bi bi-chat-dots me-2"></i>69</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <button class="btn btn-light w-100">+ Add Card</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lead Create Modal -->
                <div class="modal fade" id="createContactModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createContactModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createContactModalLabel">Create New Lead</h5>
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
                                                    <div class="h-24px w-24px rounded-pill bg-primary d-flex justify-content-center align-items-center text-white border border-3 border-white position-absolute fs-10 top-0 end-0">
                                                        <i class="bi bi-camera"></i>
                                                    </div>
                                                    <input type="file" class="position-absolute top-0 end-0 w-100 h-100 opacity-0 form-control" id="avatar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="contactName" class="form-label">Contact Name</label>
                                            <input type="text" class="form-control" id="contactName" placeholder="Enter Contact name" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="contactEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="contactEmail" placeholder="Enter email address" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="contactPhone" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" id="contactPhone" placeholder="Enter phone number" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="dealStatus" class="form-label">Deal Status</label>
                                            <select class="form-select" id="dealStatus" required>
                                                <option value="newLead">New</option>
                                                <option value="converted">High</option>
                                                <option value="lost">Low</option>
                                                <option value="returning">Website</option>
                                                <option value="returning">Negotiation</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create Deal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection

@section('js')
    <!-- Selector Js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <script src="assets/libs/dragula/dragula.min.js"></script>
    <!-- File Js -->
    <script src="assets/js/app/kanban.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endsection