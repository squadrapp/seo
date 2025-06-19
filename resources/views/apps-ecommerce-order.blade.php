@extends('partials.layouts.master')

@section('title', 'Order | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Order')

@section('content')

<!-- begin::App -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header pb-6">
                            <h4>Orders List</h4>
                            <div class="d-sm-flex gap-2">
                                <button class="btn btn-outline-light text-muted mb-2 mb-sm-0">
                                    <i class="ri-download-line"></i>Export
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light text-muted dropdown-toggle mb-2 mb-sm-0" type="button" id="moreActionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        More actions
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreActionsDropdown">
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fas fa-file-pdf me-2"></i>Download as PDF</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fas fa-file-excel me-2"></i>Export to Excel</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fas fa-archive me-2"></i>Archive selected</a></li>
                                        <li><a class="dropdown-item text-danger" href="javascript:void(0);"><i class="fas fa-trash-alt me-2"></i>Delete selected</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-primary mb-2 mb-sm-0">
                                    Create order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <span class="text-muted">Total Orders</span>
                                    <h3 class="mb-0 mt-4">21 -</h3>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <span class="text-success text-nowrap"><i class="ri-arrow-up-s-fill"></i> 15.3% last week</span>
                                        <div id="spark1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <span class="text-muted">Order items over time</span>
                                    <h3 class="mb-0 mt-4">15 -</h3>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <span class="text-success text-nowrap"><i class="ri-arrow-up-s-fill"></i> 18.2% last week</span>
                                        <div id="spark2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <span class="text-muted">Returns Orders</span>
                                    <h3 class="mb-0 mt-4">0 -</h3>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <span class="text-danger text-nowrap"><i class="ri-arrow-up-s-fill"></i> 1.2% last week</span>
                                        <div id="spark3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <span class="text-muted">Fulfilled orders over time</span>
                                    <h3 class="mb-0 mt-4">12 -</h3>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <span class="text-success text-nowrap"><i class="ri-arrow-up-s-fill"></i> 12.2% last week</span>
                                        <div id="spark4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pt-0">
                                    <div class="table-box table-responsive border-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="40">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="selectAll">
                                                        </div>
                                                    </th>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Customer</th>
                                                    <th>Payment</th>
                                                    <th>Total</th>
                                                    <th>Delivery</th>
                                                    <th>Items</th>
                                                    <th>Fulfillment</th>
                                                    <th width="80">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input order-checkbox" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-primary">#1002</h6>
                                                    </td>
                                                    <td>11 Feb, 2024</td>
                                                    <td><span class="customer-name">Wade Warren</span></td>
                                                    <td><span class="badge bg-warning-subtle text-warning rounded-pill"><i class="ri-time-line"></i> Pending</span></td>
                                                    <td>$200.00</td>
                                                    <td>N/A</td>
                                                    <td>2 items</td>
                                                    <td><span class="badge bg-danger-subtle text-danger rounded-pill"><i class="ri-time-line"></i> Unfulfilled</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-primary view-order" data-id="1002"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-success"><i class="ri-mail-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input order-checkbox" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-primary">#1004</h6>
                                                    </td>
                                                    <td>13 Feb, 2024</td>
                                                    <td><span class="customer-name">Esther Howard</span></td>
                                                    <td><span class="badge bg-success-subtle text-success rounded-pill"><i class="ri-checkbox-circle-line"></i> Success</span></td>
                                                    <td>$220.00</td>
                                                    <td>N/A</td>
                                                    <td>3 items</td>
                                                    <td><span class="badge bg-success-subtle text-success rounded-pill"><i class="ri-checkbox-circle-line"></i> Fulfilled</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-primary view-order" data-id="1004"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-success"><i class="ri-mail-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input order-checkbox" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-primary">#1007</h6>
                                                    </td>
                                                    <td>15 Feb, 2024</td>
                                                    <td><span class="customer-name">Jenny Wilson</span></td>
                                                    <td><span class="badge bg-warning-subtle text-warning rounded-pill"><i class="ri-time-line"></i> Pending</span></td>
                                                    <td>$25.00</td>
                                                    <td>N/A</td>
                                                    <td>1 items</td>
                                                    <td><span class="badge bg-danger-subtle text-danger rounded-pill"><i class="ri-time-line"></i> Unfulfilled</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-primary view-order" data-id="1007"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-success"><i class="ri-mail-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input order-checkbox" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-primary">#1009</h6>
                                                    </td>
                                                    <td>17 Feb, 2024</td>
                                                    <td><span class="customer-name">Guy Hawkins</span></td>
                                                    <td><span class="badge bg-success-subtle text-success rounded-pill"><i class="ri-checkbox-circle-line"></i> Success</span></td>
                                                    <td>$270.00</td>
                                                    <td>N/A</td>
                                                    <td>5 items</td>
                                                    <td><span class="badge bg-success-subtle text-success rounded-pill"><i class="ri-checkbox-circle-line"></i> Fulfilled</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-primary view-order" data-id="1009"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-success"><i class="ri-mail-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input order-checkbox" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-primary">#1011</h6>
                                                    </td>
                                                    <td>19 Feb, 2024</td>
                                                    <td><span class="customer-name">Jacob Jones</span></td>
                                                    <td><span class="badge bg-warning-subtle text-warning rounded-pill"><i class="ri-time-line"></i> Pending</span></td>
                                                    <td>$320.00</td>
                                                    <td>N/A</td>
                                                    <td>4 items</td>
                                                    <td><span class="badge bg-danger-subtle text-danger rounded-pill"><i class="ri-time-line"></i> Unfulfilled</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-primary view-order" data-id="1011"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-success"><i class="ri-mail-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input order-checkbox" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-primary">#1013</h6>
                                                    </td>
                                                    <td>21 Feb, 2024</td>
                                                    <td><span class="customer-name">Kristin Watson</span></td>
                                                    <td><span class="badge bg-success-subtle text-success rounded-pill"><i class="ri-checkbox-circle-line"></i> Success</span></td>
                                                    <td>$25.00</td>
                                                    <td>N/A</td>
                                                    <td>3 items</td>
                                                    <td><span class="badge bg-success-subtle text-success rounded-pill"><i class="ri-checkbox-circle-line"></i> Fulfilled</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-primary view-order" data-id="1013"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-success"><i class="ri-mail-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input order-checkbox" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-primary">#1015</h6>
                                                    </td>
                                                    <td>23 Feb, 2024</td>
                                                    <td><span class="customer-name">Albert Flores</span></td>
                                                    <td><span class="badge bg-warning-subtle text-warning rounded-pill"><i class="ri-time-line"></i> Pending</span></td>
                                                    <td>$280.00</td>
                                                    <td>N/A</td>
                                                    <td>2 items</td>
                                                    <td><span class="badge bg-danger-subtle text-danger rounded-pill"><i class="ri-time-line"></i> Unfulfilled</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-primary view-order" data-id="1015"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-success"><i class="ri-mail-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input order-checkbox" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-primary">#1018</h6>
                                                    </td>
                                                    <td>25 Feb, 2024</td>
                                                    <td><span class="customer-name">Eleanor Pena</span></td>
                                                    <td><span class="badge bg-success-subtle text-success rounded-pill"><i class="ri-checkbox-circle-line"></i> Success</span></td>
                                                    <td>$350.00</td>
                                                    <td>N/A</td>
                                                    <td>1 items</td>
                                                    <td><span class="badge bg-success-subtle text-success rounded-pill"><i class="ri-checkbox-circle-line"></i> Fulfilled</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-primary view-order" data-id="1018"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-success"><i class="ri-mail-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input order-checkbox" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-primary">#1020</h6>
                                                    </td>
                                                    <td>27 Feb, 2024</td>
                                                    <td><span class="customer-name">Darrell Steward</span></td>
                                                    <td><span class="badge bg-warning-subtle text-warning rounded-pill"><i class="ri-time-line"></i> Pending</span></td>
                                                    <td>$100.00</td>
                                                    <td>N/A</td>
                                                    <td>1 items</td>
                                                    <td><span class="badge bg-danger-subtle text-danger rounded-pill"><i class="ri-time-line"></i> Unfulfilled</span></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-primary view-order" data-id="1020"><i class="ri-eye-line"></i></a>
                                                        <a href="javascript:void(0);" class="btn icon-btn-sm btn-light-success"><i class="ri-mail-line"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex flex-wrap gap-3 align-items-center mt-5">
                                        <div class="fw-medium"> Showing 1 - 10 of 18 Entries</i></div>
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
                </div>
            </div><!--End container-fluid-->

        </div>
    </main><!--End app-wrapper-->

@endsection

@section('js')

<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/app/ecommerce-order.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

@endsection