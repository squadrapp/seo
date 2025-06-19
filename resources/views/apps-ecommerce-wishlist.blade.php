@extends('partials.layouts.master')

@section('title', 'Wishlist | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Wishlist')
@section('css')
 <link rel="stylesheet" href="assets/libs/@yaireo/tagify/tagify.css">
    <link rel="stylesheet" href="assets/libs/dual-listbox/dual-listbox.css">
@endsection
@section('content')

<!-- begin::App -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="cart-table">
                                    <thead>
                                        <tr>
                                            <th>PRODUCT</th>
                                            <th>DESCRIPTION</th>
                                            <th>AVAILABILITY</th>
                                            <th>UNIT PRICE</th>
                                            <th>QTY</th>
                                            <th>TOTAL</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="product-1">
                                            <td>
                                                <img src="assets/images/product/img-01.png" alt="Cotton T-shirt" class="img-fluid avatar-xxl">
                                            </td>
                                            <td>
                                                <h6 class="mb-1">
                                                    <a href="apps-ecommerce-products" class="text-body">Cotton T-shirt</a>
                                                </h6>
                                                <span>SKU: demo_12 Size: S, Color: Grey</span>
                                            </td>
                                            <td>
                                                <span class="badge bg-success px-3 rounded-3">In stock</span>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">$28.98</h6>
                                                <span class="text-success">-5%</span>
                                                <p class="mb-0 text-muted"><del>$30.51</del></p>
                                            </td>
                                            <td>
                                                <div class="qty-input qty-input-outline">
                                                    <button type="button" data-action="minus" onclick="decreaseQuantity('qty-1')">
                                                        <i class="ri-subtract-line"></i>
                                                    </button>
                                                    <input id="qty-1" type="number" value="1" min="0" max="100">
                                                    <button type="button" data-action="plus" onclick="increaseQuantity('qty-1')">
                                                        <i class="ri-add-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0" id="total-1">$28.98</h6>
                                            </td>
                                            <td>
                                                <button class="btn"><i class="ri-close-line remove-item" onclick="removeItem('product-1')"></i></button>
                                            </td>
                                        </tr>
                                        <tr id="product-2">
                                            <td>
                                                <img src="assets/images/product/img-02.png" alt="Rollax Watch" class="img-fluid avatar-xxl">
                                            </td>
                                            <td>
                                                <h6 class="mb-1">
                                                    <a href="apps-ecommerce-products" class="text-body">Rollax Watch</a>
                                                </h6>
                                                <span>SKU: demo_2 Color: Yellow</span>
                                            </td>
                                            <td>
                                                <span class="badge bg-success px-3 rounded-3">In stock</span>
                                            </td>
                                            <td>
                                                <h6>$27.00</h6>
                                            </td>
                                            <td>
                                                <div class="qty-input qty-input-outline">
                                                    <button type="button" data-action="minus" onclick="decreaseQuantity('qty-2')">
                                                        <i class="ri-subtract-line"></i>
                                                    </button>
                                                    <input id="qty-2" type="number" value="1" min="0" max="100">
                                                    <button type="button" data-action="plus" onclick="increaseQuantity('qty-2')">
                                                        <i class="ri-add-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0" id="total-2">$27.00</h6>
                                            </td>
                                            <td>
                                                <button class="btn"><i class="ri-close-line remove-item" onclick="removeItem('product-2')"></i></button>
                                            </td>
                                        </tr>
                                        <tr id="product-3">
                                            <td>
                                                <img src="assets/images/product/img-03.png" alt="White Shoes" class="img-fluid avatar-xxl">
                                            </td>
                                            <td>
                                                <h6 class="mb-1">
                                                    <a href="apps-ecommerce-products" class="text-body">White Shoes</a>
                                                </h6>
                                                <span>SKU: demo_1 Color: Black</span>
                                            </td>
                                            <td>
                                                <span class="badge bg-success px-3 rounded-3">In stock</span>
                                            </td>
                                            <td>
                                                <h6>$16.51</h6>
                                            </td>
                                            <td>
                                                <div class="qty-input qty-input-outline">
                                                    <button type="button" data-action="minus" onclick="decreaseQuantity('qty-3')">
                                                        <i class="ri-subtract-line"></i>
                                                    </button>
                                                    <input id="qty-3" type="number" value="1" min="0" max="100">
                                                    <button type="button" data-action="plus" onclick="increaseQuantity('qty-3')">
                                                        <i class="ri-add-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0" id="total-3">$16.51</h6>
                                            </td>
                                            <td>
                                                <button class="btn"><i class="ri-close-line remove-item" onclick="removeItem('product-3')"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-top-0 p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="apps-ecommerce-products" class="btn btn-outline-primary">Continue Shopping</a>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="d-flex justify-content-end align-items-center">
                                        <h6 class="me-3 mb-0">Total: <span id="cart-total">$72.49</span></h6>
                                        <a href="apps-ecommerce-checkout" class="btn btn-primary">Checkout</a>
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

<script src="assets/js/app/ecommerce-wishlist.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection