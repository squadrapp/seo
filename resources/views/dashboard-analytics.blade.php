@extends('partials.layouts.master')

@section('title', 'Analytics | Urbix Admin & Dashboards Template')
@section('title-sub', 'Dashboard')
@section('pagetitle', 'Analytics')
@section('css')
 <link rel="stylesheet" type="text/css" href="assets/libs/jsvectormap/jsvectormap.min.css">
@endsection
@section('content')


            <div class="row">
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Recent Sales</h4>
                            <a href="javascript:void(0)" class="link">View All</a>
                        </div>
                        <div class="card-body">
                            <div class="row gy-6">
                                <div class="col-md-6 col-xl-3">
                                    <div class="card border shadow-none mb-0">
                                        <div class="card-body">
                                            <div class="h-50px w-50px position-relative d-flex justify-content-center align-items-center text-primary bg-light-subtle rounded-2 fs-4">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <h2 class="mt-8 mb-2 fs-24 fw-semibold">
                                                <span class="counter-value" data-target="20">$20</span>k
                                            </h2>
                                            <p class="mb-0 text-truncate fs-16 mb-1">Total Sales</p>
                                            <span class="text-primary">+10% from yesterday</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card border shadow-none mb-0">
                                        <div class="card-body">
                                            <div class="h-50px w-50px position-relative d-flex justify-content-center align-items-center text-primary bg-light-subtle rounded-2 fs-4">
                                                <i class="bi bi-postcard"></i>
                                            </div>
                                            <h2 class="mt-8 mb-2 fs-24 fw-semibold">
                                                <span class="counter-value" data-target="1">1</span>k
                                            </h2>
                                            <p class="mb-0 text-truncate fs-16 mb-1">Total Order</p>
                                            <span class="text-primary">+8% from yesterday</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card border shadow-none mb-0">
                                        <div class="card-body">
                                            <div class="h-50px w-50px position-relative d-flex justify-content-center align-items-center text-primary bg-light-subtle rounded-2 fs-4">
                                                <i class="bi bi-box-seam"></i>
                                            </div>
                                            <h2 class="mt-8 mb-2 fs-24 fw-semibold">
                                                <span class="counter-value" data-target="500">500</span>k
                                            </h2>
                                            <p class="mb-0 text-truncate fs-16 mb-1">Product Sold</p>
                                            <span class="text-primary">+2% from yesterday</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card border shadow-none mb-0">
                                        <div class="card-body">
                                            <div class="h-50px w-50px position-relative d-flex justify-content-center align-items-center text-primary bg-light-subtle rounded-2 fs-4">
                                                <i class="bi bi-box-seam"></i>
                                            </div>
                                            <h2 class="mt-8 mb-2 fs-24 fw-semibold">
                                                <span class="counter-value" data-target="400">400</span>k
                                            </h2>
                                            <p class="mb-0 text-truncate fs-16 mb-1">New Customer</p>
                                            <span class="text-primary">+3% from yesterday</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h4>Level</h4>
                        </div>
                        <div class="card-body">
                            <div id="level-chart"></div>
                            <div class="row">
                                <div class="col-6 py-1 border-end">
                                    <ul class="list-unstyled mb-0">
                                        <li><i class="bi bi-circle-fill me-2 text-primary"></i>Volume</li>
                                    </ul>
                                </div>
                                <div class="col-6 py-1">
                                    <ul class="d-flex justify-content-end list-unstyled mb-0">
                                        <li><i class="bi bi-circle-fill me-2 text-light"></i>Service</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Monthly Transaction Sales</h4>
                        </div>
                        <div class="card-body">
                            <div id="transaction"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sales Overview</h4>
                        </div>
                        <div class="card-body">
                            <div id="overview"></div>
                            <div class="row">
                                <div class="col-6 py-1">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex justify-content-end">
                                            <i class="bi bi-circle-fill me-2 text-primary"></i>
                                            <div>
                                                <h5 class="fs-18">$223.45</h5>
                                                <p class="fs-18 mb-0">Profit</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 py-1">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex">
                                            <i class="bi bi-circle-fill me-2 text-primary opacity-25"></i>
                                            <div>
                                                <h5 class="fs-18">$223.45</h5>
                                                <p class="fs-18 mb-0">Profit</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h4 class="flex-grow-1">Active Users</h4>
                                        <p class="mb-0 fs-14"><span class="text-success">+8.6%</span>Than last month</p>
                                    </div>
                                    <a href="javascript:void(0)" class="link">View All</a>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-auto">
                                            <h5>23,214</h5>
                                            <p class="text-nowrap">Total Active User</p>
                                        </div>
                                        <div id="world-map" class="min-h-320px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header flex-wrap gap-4">
                                    <h4 class="flex-grow-1 mb-0">Top Products</h4>
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="form-icon">
                                            <input type="text" class="form-control form-control-icon rounded-2" id="firstNameLayout4" placeholder="Search Here ..." required>
                                            <i class="ri-search-2-line text-muted"></i>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Filters
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0)">Filters</a>
                                                <a class="dropdown-item" href="javascript:void(0)">In Transit</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Delivered</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Pending</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Delayed</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Canceled</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-box table-responsive">
                                        <table class="table table-hover text-nowrap align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Popularity</th>
                                                    <th>Sales</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><strong>Home Decor Range</strong></td>
                                                    <td class="py-4">
                                                        <div class="progress my-4">
                                                            <div class="progress-bar bg-primary" style="width: 60%;"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-warning-subtle text-warning">46%</span></td>
                                                    <td>
                                                        <div class="dropdown dropdown-menu-end">
                                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><strong>Kitchen Essentials</strong></td>
                                                    <td class="py-4">
                                                        <div class="progress my-4">
                                                            <div class="progress-bar bg-primary opacity-50" style="width: 20%;"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-primary-subtle text-primary">17%</span></td>
                                                    <td>
                                                        <div class="dropdown dropdown-menu-end">
                                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><strong>Cup Holders</strong></td>
                                                    <td class="py-4">
                                                        <div class="progress my-4">
                                                            <div class="progress-bar bg-primary opacity-75" style="width: 30%;"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-primary-subtle text-primary">19%</span></td>
                                                    <td>
                                                        <div class="dropdown dropdown-menu-end">
                                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><strong>Knitted Coasters</strong></td>
                                                    <td class="py-4">
                                                        <div class="progress my-4">
                                                            <div class="progress-bar bg-primary" style="width: 50%;"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-warning-subtle text-warning">23%</span></td>
                                                    <td>
                                                        <div class="dropdown dropdown-menu-end">
                                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><strong>Sweatshirts (Large)</strong></td>
                                                    <td class="py-4">
                                                        <div class="progress my-4">
                                                            <div class="progress-bar bg-primary opacity-25" style="width: 80%;"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-warning-subtle text-warning">77%</span></td>
                                                    <td>
                                                        <div class="dropdown dropdown-menu-end">
                                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td><strong>Black Jeans (S - 32)</strong></td>
                                                    <td class="py-4">
                                                        <div class="progress my-4">
                                                            <div class="progress-bar bg-primary opacity-75" style="width: 80%;"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-warning-subtle text-warning">77%</span></td>
                                                    <td>
                                                        <div class="dropdown dropdown-menu-end">
                                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Overall sales</h4>
                                </div>
                                <div class="card-body">
                                    <div id="overall"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Revenue Updates</h4>
                                </div>
                                <div class="card-body">
                                    <div id="revenue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4>Monthly Earnings</h4>
                                    <div class="h-36px w-36px d-flex justify-content-center align-items-center rounded bg-info-subtle text-info fs-5">
                                        <i class="bi bi-transparency"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2">$8,320<span class="text-success"><i class="ri-arrow-right-up-line mx-2"></i></span>
                                        <span class="fs-6">+12%</span>
                                    </h3>
                                    <div id="spark1" class="apexcharts-container"></div>
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

<!-- Vector map-->
<script src="assets/libs/jsvectormap/jsvectormap.min.js"></script>
<script src="assets/libs/jsvectormap/maps/world.js"></script>

<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/dashboard/analytics.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection