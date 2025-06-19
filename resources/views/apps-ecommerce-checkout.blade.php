@extends('partials.layouts.master')

@section('title', 'Checkout | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Checkout')

@section('content')

<!-- begin::App -->

   
            <div class="row">
                <div class="col-xl-8 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Complete Your Order</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between position-relative progress-tracker">
                                <div class="step px-3 active" data-step="1">
                                    <h6 class="d-flex align-items-center justify-content-center rounded-circle avatar-md step-number"><span>1</span></h6>
                                    <p class="mb-0">Shipping</p>
                                </div>
                                <div class="step px-3" data-step="2">
                                    <h6 class="d-flex align-items-center justify-content-center rounded-circle avatar-md step-number"><span>2</span></h6>
                                    <p class="mb-0">Payment</p>
                                </div>
                                <div class="step px-3" data-step="3">
                                    <h6 class="d-flex align-items-center justify-content-center rounded-circle avatar-md step-number"><span>3</span></h6>
                                    <p class="mb-0">Review</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 1: Shipping Address -->
                    <div class="step-content active" id="step-1">
                        <div class="card">
                            <div class="card-header pb-6">
                                <h4>Select Shipping Address</h4>
                            </div>
                            <div class="card-body border border-top">
                                <div class="row">
                                    <div class="col-xxl-4">
                                        <div class="form-check address-option selected">
                                            <input type="radio" name="address" id="address1" class="form-check-input address-option-radio" checked>
                                            <span class="badge rounded-pill mb-2 bg-primary-subtle text-primary">Home</span>
                                            <h4>Jordan Roughley</h4>
                                            <p class="text-muted mb-2">Phone: 2015184185</p>
                                            <p class="text-muted mb-2">13833 Jayde Squares Apt. 849, Sharonville, Washington, USA - 33199 8539</p>
                                            <div>
                                                <button class="btn btn-light"><i class="ri-edit-line"></i> Edit</button>
                                                <button class="btn btn-light-danger"><i class="ri-delete-bin-line"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="form-check address-option">
                                            <input type="radio" name="address" id="address2" class="form-check-input address-option-radio">
                                            <span class="badge rounded-pill mb-2 bg-success-subtle text-success">Work</span>
                                            <h4>Prof. Ronaldo Funk</h4>
                                            <p class="text-muted mb-2">Phone: 6179419815</p>
                                            <p class="text-muted mb-2">6502 Schroeder Ville Apt. 066, Berrytown, USA - 62144 1437</p>
                                            <div>
                                                <button class="btn btn-light"><i class="ri-edit-line"></i> Edit</button>
                                                <button class="btn btn-light-danger"><i class="ri-delete-bin-line"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <button class="btn add-address-btn align-items-baseline" id="showAddressForm">
                                            <i class="ri-add-circle-line me-1"></i> Add a New Address
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add New Address Form (Initially Hidden) -->
                        <div class="card" id="newAddressForm" style="display: none;">
                            <div class="card-header">
                                <h4>Add New Address</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6 mb-3">
                                            <input type="text" placeholder="Name" class="form-control" id="inputExample01">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" placeholder="Name" class="form-control" id="inputExample02">
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6 mb-3">
                                            <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="tel" class="form-control" id="altPhone" placeholder="Alternative Phone">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <textarea class="form-control" id="streetAddress" rows="3" placeholder="Street Address"></textarea>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" id="city" placeholder="City">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" id="country" placeholder="Country">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" id="zipCode" placeholder="Zip Code">
                                        </div>
                                    </div>

                                    <div class="d-flex gap-2">
                                        <div class="type-option selected" data-type="home">
                                            <i class="ri-home-line"></i>
                                            <h6 class="mb-1">Home</h6>
                                            <span class="fs-13 text-muted">Delivery available all day</span>
                                        </div>
                                        <div class="type-option" data-type="work">
                                            <i class="ri-briefcase-line"></i>
                                            <h6 class="mb-1">Work</h6>
                                            <span class="fs-13 text-muted">Delivery between 10 AM - 5 PM</span>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end gap-2 mt-4">
                                        <button type="button" class="btn btn-white border" id="cancelAddressForm">Cancel</button>
                                        <button type="button" class="btn btn-primary">Save Address</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="apps-ecommerce-cart" class="btn btn-white border"><i class="ri-arrow-left-line me-2"></i>Back</a>
                            <button type="button" class="btn btn-primary" id="toStep2">Continue to Payment</button>
                        </div>
                    </div>

                    <!-- Step 2: Payment Method -->
                    <div class="step-content" id="step-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>Choose Payment Method</h4>
                            </div>
                            <div class="card-body">
                                <div class="payment-option selected">
                                    <div class="form-check">
                                        <input type="radio" name="payment" id="creditCard" class="form-check-input payment-option-radio" checked>
                                    </div>
                                    <i class="ri-bank-card-line fs-5 me-2"></i>
                                    <span>Credit / Debit Card</span>
                                </div>

                                <div class="payment-option">
                                    <div class="form-check">
                                        <input type="radio" name="payment" id="paypal" class="form-check-input payment-option-radio">
                                    </div>
                                    <i class="ri-paypal-line fs-5 me-2"></i>
                                    <span>PayPal</span>
                                </div>

                                <div class="payment-option">
                                    <div class="form-check">
                                        <input type="radio" name="payment" id="applePay" class="form-check-input payment-option-radio">
                                    </div>
                                    <div class="payment-icon">
                                        <i class="ri-apple-line fs-5 me-2"></i>
                                    </div>
                                    <span>Apple Pay</span>
                                </div>

                                <div class="payment-option">
                                    <div class="form-check">
                                        <input type="radio" name="payment" id="googlePay" class="form-check-input payment-option-radio">
                                    </div>
                                    <i class="ri-google-line fs-5 me-2"></i>
                                    <span>Google Pay</span>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="cardDetailsForm">
                            <div class="card-header">
                                <h4>Card Details</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <input type="text" id="cardName" class="form-control" placeholder="Name on Card">
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" id="cardNumber" class="form-control" placeholder="Card Number">
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="text" id="expiry" class="form-control" placeholder="MM/YY">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="text" id="cvv" class="form-control" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="saveCard">
                                        <label class="form-check-label" for="saveCard">
                                            Save card for future purchases
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-white border" id="toStep1"><i class="ri-arrow-left-line me-2"></i>Back to Shipping</button>
                            <button type="button" class="btn btn-primary" id="toStep3">Review Order</button>
                        </div>
                    </div>

                    <!-- Step 3: Order Review -->
                    <div class="step-content" id="step-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Order Summary</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Subtotal</span>
                                    <h6>$129.99</h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Shipping</span>
                                    <h6>$4.99</h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Tax</span>
                                    <h6>$8.45</h6>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="text-muted fs-5">Total</span>
                                    <h5 class="mb-0">$143.43</h5>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4>Delivery Address</h4>
                            </div>
                            <div class="card-body">
                                <!-- Example 2: Person Delivery Address -->
                                <address class="mb-0">
                                    <strong class="fs-5">John Smith</strong><br>
                                    456 Residential Street<br>
                                    Apartment 2B<br>
                                    New York, NY 10001<br>
                                    <span class="d-block mt-2">
                                        <i class="bi bi-telephone me-2"></i>Phone: <a href="tel:+12125557890">(212) 555-7890</a>
                                    </span>
                                    <span class="d-block">
                                        <i class="bi bi-envelope me-2"></i>Email: <a href="mailto:john.smith@example.com">john.smith@example.com</a>
                                    </span>
                                </address>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4>Payment Method</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="ri-bank-card-line fs-3 me-2"></i>
                                    <div>
                                        <h6 class="mb-0">Credit Card</h6>
                                        <span class="text-muted small">Ending in 4242</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-white border" id="toStep2"><i class="ri-arrow-left-line me-2"></i>Back to Payment</button>
                            <button type="button" class="btn btn-primary">Place Order</button>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Order Summary -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Review your cart</h4>
                        </div>
                        <div class="card-body">
                            <div class="cart-item d-flex align-items-center">
                                <img src="assets/images/product/img-03.png" alt="Men's White Shoes" class="avatar-xl">
                                <div class="ps-4 flex-grow-1">
                                    <h6>Men's White Shoes</h6>
                                    <span>1x</span>
                                </div>
                                <h6>$20.00</h6>
                            </div>
                            <hr>
                            <div class="cart-item d-flex align-items-center">
                                <img src="assets/images/product/img-01.png" alt="Crop Top" class="avatar-xl">
                                <div class="ps-4 flex-grow-1">
                                    <h6>Crop Top</h6>
                                    <span>1x</span>
                                </div>
                                <h6>$25.00</h6>
                            </div>

                            <!-- Discount Code -->
                            <div class="pt-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="discountCode" placeholder="Discount Code">
                                    <span class="input-group-text" id="discountCode">Apply</span>
                                </div>
                            </div>

                            <!-- Order Summary -->
                            <div class="py-2">
                                <div class="d-flex justify-content-between py-2">
                                    <span>Subtotal</span>
                                    <span>$45.00</span>
                                </div>
                                <div class="d-flex justify-content-between py-2">
                                    <span>Shipping</span>
                                    <span>$5.00</span>
                                </div>
                                <div class="d-flex justify-content-between py-2">
                                    <span>Discount</span>
                                    <span class="text-danger">-$10.00</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between py-2">
                                    <h5 class="mb-0">Total</h5>
                                    <h5 class="mb-0">$40.00</h5>
                                </div>
                            </div>

                            <!-- Security Badge -->
                            <div class="w-100 bg-light-subtle py-3 my-2 text-center rounded-1">
                                <i class="ri-lock-line"></i>
                                <span>Secure Checkout - SSL Encrypted</span>
                            </div>
                            <p class="mb-0 text-center">Ensuring your financial and personal details are secure during every transaction.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')
<script src="assets/js/app/ecommerce-checkout.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection