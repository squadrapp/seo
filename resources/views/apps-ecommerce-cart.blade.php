@extends('partials.layouts.master')

@section('title', 'Cart | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Cart')

@section('content')

<!-- begin::App -->


    
            <div class="row">
                <div class="col-xxl-9 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Shopping Cart <span class="text-muted">(4 items)</span></h4>
                            <div>
                                <a href="javascript:void(0);" class="text-decoration-none">For the best shopping experience, <span class="fw-bold">sign in</span></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-subtle-warning alert-border-warning alert-dismissible fade show" role="alert">
                                <i class="fas fa-truck me-2"></i> Free shipping, arrives Mon, Sep 11-Thu, Sep 14
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4>4 Items</h4>
                            <button class="btn btn-sm" type="button" id="toggleItems">
                                <i class="ri-arrow-down-s-line"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="collapse show" id="itemsCollapse">
                                <div class="arrival-section mb-3 p-3 bg-light">
                                    <strong>Arrives by Mon, Sep 11</strong>
                                    <span class="float-end">3 items</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 text-muted fs-12">
                                        Sold and shipped by Certified 2 Day Express <span class="badge bg-success">Pro Seller</span>
                                    </p>
                                    <button class="btn btn-sm remove-btn">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </div>
                                <div class="d-sm-flex p-4 position-relative product-card">
                                    <img src="assets/images/product/img-01.png" alt="Casual T-shirt" class="avatar-xxl me-3">
                                    <div class="flex-grow-1">
                                        <h5>Casual Wear Full Sleeve Round Neck Premium Cotton Kids T-Shirts...</h5>
                                        <div class="text-muted">
                                            <p class="mb-0">Actual Color: Gray</p>
                                            <p class="mb-0">Size: M"</p>
                                            <p class="mb-0">Eligible for FREE Shipping</p>
                                        </div>

                                        <div class="d-md-flex justify-content-between align-items-center mt-3">
                                            <a href="javascript:void(0);" class="btn-link">Save for Later</a>
                                            <div class="qty-input qty-input-outline mt-2 mt-md-0">
                                                <span class="me-2">Quantity:</span>
                                                <button type="button" data-action="minus" onclick="decreaseQuantity('qty-3')">
                                                    <i class="ri-subtract-line"></i>
                                                </button>
                                                <input id="qty-3" type="number" data-price="925.99" value="3" min="0" max="100">
                                                <button type="button" data-action="plus" onclick="increaseQuantity('qty-3')">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm-end mt-3 mt-sm-0">
                                        <h5 class="mb-0" id="total_qty-3">$855.99</h5>
                                        <h6 class="text-muted mb-0"><del>$899.99</del></h6>
                                        <span class="badge bg-success-subtle text-success">You Save $35</span>
                                    </div>
                                </div>

                                <div class="arrival-section mb-3 p-3 bg-light">
                                    <strong>Arrives by Mon, Sep 11</strong>
                                    <span class="float-end">1 items</span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 text-muted fs-12">
                                        Sold and shipped by Certified 2 Day Express <span class="badge bg-success">Pro Seller</span>
                                    </p>
                                    <button class="btn btn-sm remove-btn">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </div>

                                <div class="d-sm-flex p-4 position-relative product-card">
                                    <img src="assets/images/product/img-02.png" alt="Balck Watch" class="avatar-xxl me-3">
                                    <div class="flex-grow-1">
                                        <h5>Black Premium Watch for Men with Black Colored Chain Watch..</h5>
                                        <div class="text-muted">
                                            <p class="mb-0">Actual Color: Black</p>
                                            <p class="mb-0">Size: Free</p>
                                            <p class="mb-0">Eligible for FREE Shipping</p>
                                        </div>

                                        <div class="d-md-flex justify-content-between align-items-center mt-3">
                                            <a href="javascript:void(0);" class="btn-link">Save for Later</a>
                                            <div class="qty-input qty-input-outline mt-2 mt-md-0">
                                                <span class="me-2">Quantity:</span>
                                                <button type="button" data-action="minus" onclick="decreaseQuantity('qty-1')">
                                                    <i class="ri-subtract-line"></i>
                                                </button>
                                                <input id="qty-1" type="number" data-price="250" value="1" min="0" max="100">
                                                <button type="button" data-action="plus" onclick="increaseQuantity('qty-1')">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm-end mt-3 mt-sm-0">
                                        <h5 class="mb-0" id="total_qty-1">$925.99</h5>
                                        <h6 class="text-muted mb-0"><del>$990.99</del></h6>
                                        <span class="badge bg-success-subtle text-success">You Save $75</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Order Summary</h4class=>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <span>Sub Total (4 items)</span>
                                <span>$1499.18</span>
                            </div>

                            <div class="d-flex justify-content-between py-2">
                                <span>You Savings</span>
                                <span class="text-success">$150.00</span>
                            </div>

                            <div class="d-flex justify-content-between py-2">
                                <span>Delivery</span>
                                <div>
                                    <span class="badge bg-success me-2">Standard</span>
                                    <span>$30.99</span>
                                </div>
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="discountCode" placeholder="Apply Coupon">
                                <span class="input-group-text" id="discountCode"><i class="ri-bookmark-line"></i></span>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between py-2">
                                <h5 class="mb-0">Estimated total</h5>
                                <h5 class="mb-0">$1530.18</h5>
                            </div>

                            <div class="d-flex justify-content-between py-2">
                                <span>Shipping</span>
                                <span class="text-success">Free</span>
                            </div>

                            <div class="d-flex justify-content-between py-2">
                                <span>Taxes</span>
                                <span>15% ($150.67)</span>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between py-2">
                                <h4>Total</h4>
                                <h4>$1,680.50</h4>
                            </div>

                            <a href="apps-ecommerce-checkout" class="btn btn-primary w-100">Continue to checkout</a>

                            <div class="mt-4">
                                <h6>Accepted Method</h6>
                                <div class="d-flex gap-2 mt-2">
                                    <div class="w-50px py-1 border rounded-1 d-flex align-items-center justify-content-center">
                                        <i class="ri-paypal-line"></i>
                                    </div>
                                    <div class="w-50px py-1 border rounded-1 d-flex align-items-center justify-content-center">
                                        <i class="ri-visa-line"></i>
                                    </div>
                                    <div class="w-50px py-1 border rounded-1 d-flex align-items-center justify-content-center">
                                        <i class="ri-mastercard-line"></i>
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

<script src="assets/js/app/ecommerce-cart.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection