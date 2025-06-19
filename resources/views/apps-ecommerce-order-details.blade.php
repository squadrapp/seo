@extends('partials.layouts.master')

@section('title', 'Order Details | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Order Details')

@section('content')

<!-- begin::App -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header pb-6">
                            <h4>Order <span class="text-primary">#252596</span></h4>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-secondary">
                                    <i class="ri-mail-line"></i> Message Customer
                                </button>
                                <button class="btn btn-primary">
                                    <i class="ri-map-pin-line"></i> Track Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-9 col-xl-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Order Items (4)</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/product/img-02.png" class="avatar-xl me-3" alt="Smart Watch For Man">
                                <div class="flex-grow-1">
                                    <h6>Smart Watch For Man</h6>
                                    <div class="d-flex text-muted fs-12">
                                        <span class="me-2"><i class="ri-palette-line"></i> Blue / Black</span>
                                        <span class="me-2"><i class="ri-leaf-line"></i> Watch For Men</span>
                                        <span class="me-2"><i class="ri-archive-2-line"></i> Qty: 1</span>
                                    </div>
                                </div>
                                <h6 class="mb-0">$120.00</h6>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/product/img-04.png" class="avatar-xl me-3" alt="Crop Top">
                                <div class="flex-grow-1">
                                    <h6>Crop Top</h6>
                                    <div class="d-flex text-muted fs-12">
                                        <span class="me-2"><i class="ri-palette-line"></i> Blue / Black</span>
                                        <span class="me-2"><i class="fas fa-watch"></i> Office Chair</span>
                                        <span class="me-2"><i class="ri-archive-2-line"></i> Qty: 1</span>
                                    </div>
                                </div>
                                <h6 class="mb-0">$135.00</h6>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/product/img-03.png" class="avatar-xl me-3" alt="Mens Sports Shoes">
                                <div class="flex-grow-1">
                                    <h6>Mens Sports Shoes</h6>
                                    <div class="d-flex text-muted fs-12">
                                        <span class="me-2"><i class="ri-palette-line"></i> Grey / Black</span>
                                        <span class="me-2"><i class="fas fa-camera"></i> Sports Shoes</span>
                                        <span class="me-2"><i class="ri-archive-2-line"></i> Qty: 1</span>
                                    </div>
                                </div>
                                <h6 class="mb-0">$250.00</h6>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/product/img-08.png" class="avatar-xl me-3" alt="Girls Handbags Purse">
                                <div class="flex-grow-1">
                                    <h6>Girls Handbags Purse</h6>
                                    <div class="d-flex text-muted fs-12">
                                        <span class="me-2"><i class="ri-palette-line"></i> Blue / Black</span>
                                        <span class="me-2"><i class="fas fa-camera"></i> Purse</span>
                                        <span class="me-2"><i class="ri-archive-2-line"></i> Qty: 1</span>
                                    </div>
                                </div>
                                <h6 class="mb-0">$450.00</h6>
                            </div>
                            <hr>
                            <div class="py-2">
                                <div class="d-flex justify-content-between py-1">
                                    <span>Subtotal</span>
                                    <span>$955.00</span>
                                </div>
                                <div class="d-flex justify-content-between py-1">
                                    <span>Shipping</span>
                                    <span>$3.50</span>
                                </div>
                                <div class="d-flex justify-content-between py-1">
                                    <span>Tax</span>
                                    <span>$0.00</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between py-1">
                                    <h5 class="mb-0">Total</h5>
                                    <h5 class="mb-0">$958.00</h5>
                                </div>
                            </div>

                            <div class="p-3 bg-light rounded mt-4">
                                <strong>Order Note:</strong> Ship All The Ordered Item Together By Friday And I Send You An Email Please Check. Thanks!
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4>Order Activity</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex py-2 position-relative">
                                <div class="d-flex justify-content-center align-items-center me-3 avatar-md bg-success-subtle text-success rounded-circle">
                                    <i class="ri-check-line"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Ready to Pickup</h6>
                                    <p class="mb-0 text-muted">Order #252596 from T-Shirt</p>
                                    <span class="text-muted fs-12">11:00</span>
                                </div>
                                <div class="timeline-line"></div>
                            </div>

                            <div class="d-flex py-2 position-relative">
                                <div class="d-flex justify-content-center align-items-center me-3 avatar-md bg-warning-subtle text-warning rounded-circle">
                                    <i class="ri-archive-2-line"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Order Processed</h6>
                                    <p class="mb-0 text-muted">Order #252596 from T-Shirt</p>
                                    <span class="text-muted fs-12">10:30</span>
                                </div>
                                <div class="timeline-line"></div>
                            </div>

                            <div class="d-flex py-2 position-relative">
                                <div class="d-flex justify-content-center align-items-center me-3 avatar-md bg-success-subtle text-success rounded-circle">
                                    <i class="ri-bank-card-line"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Payment Confirmed</h6>
                                    <p class="mb-0 text-muted">Order #252596 from T-Shirt</p>
                                    <span class="text-muted fs-12">10:00</span>
                                </div>
                                <div class="timeline-line"></div>
                            </div>

                            <div class="d-flex py-2 position-relative">
                                <div class="d-flex justify-content-center align-items-center me-3 avatar-md bg-info-subtle text-info rounded-circle">
                                    <i class="ri-shopping-cart-line"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Order Placed</h6>
                                    <p class="mb-0 text-muted">Order #252596 from T-Shirt</p>
                                    <span class="text-muted fs-12">09:30</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mb-6">
                        <div class="btn-group">
                            <button class="btn btn-primary" id="updateStatus">Update Status</button>
                            <button class="btn btn-outline-secondary" onclick="window.print()">Print Invoice</button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-outline-secondary">Refund</button>
                            <button class="btn btn-outline-secondary">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Customer Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">Name</p>
                                        <h6>Courtney Henry</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">Mobile</p>
                                        <h6>001230088</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">Email</p>
                                        <h6>courtneyhenry@gmail.com</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">Landmark</p>
                                        <h6>N/A</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">Address</p>
                                        <h6>3100</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">Pin Code</p>
                                        <h6>123456</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">Area</p>
                                        <h6>N/A</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">Payment</p>
                                        <h6>Online</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">City</p>
                                        <h6>London</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">Status</p>
                                        <h6>
                                            <i class="bi bi-circle-fill me-2 text-success"></i>
                                            Paid
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <p class="fs-12 text-uppercase text-muted mb-1">State</p>
                                        <h6>London</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-3">
                                <button class="btn btn-outline-secondary w-100">View All Orders</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4>Order Status</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-success-subtle text-success rounded-pill">Paid</span>
                                <p class="mb-0">April 14, 2025</p>
                            </div>

                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="mt-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">Change Status</label>
                                    <select class="form-select" id="statusSelect">
                                        <option value="processing">Processing</option>
                                        <option value="shipped">Shipped</option>
                                        <option value="delivered">Delivered</option>
                                        <option value="cancelled">Cancelled</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary w-100" id="saveStatus">Save Changes</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4>Delivery Tracking</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="mb-2">Shipping Provider</div>
                                <div class="fw-bold">Express Delivery</div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-2">Tracking Number</div>
                                <div class="fw-bold">EXP123456789GB</div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-2">Estimated Delivery</div>
                                <div class="fw-bold">April 16, 2025</div>
                            </div>

                            <button class="btn btn-outline-primary w-100">Update Tracking</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Status Update -->
            <div class="modal fade" id="statusModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Order Status</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label class="form-label" for="modalStatusSelect">Select Status</label>
                                <select class="form-select" id="modalStatusSelect">
                                    <option value="processing">Processing</option>
                                    <option value="ready">Ready to Pickup</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="addComment">Add Comment (Optional)</label>
                                <textarea class="form-control" id="addComment" rows="3" placeholder="Add any notes about this status change"></textarea>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="notifyCustomer">
                                <label class="form-check-label" for="notifyCustomer">
                                    Notify Customer
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="confirmStatusUpdate">Update Status</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

<script src="assets/js/app/ecommerce-order-details.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection