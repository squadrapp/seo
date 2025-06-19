@extends('partials.layouts.master')

@section('title', 'Products | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Products')

@section('content')

<!-- begin::App -->

            <div class="row">
                <div class="col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="fs-16">Filters</h3>
                            <a href="javascript:void(0);" class="link text-decoration-underline">Clear All</a>
                        </div>
                        <div class="form-icon right m-5 mb-0">
                            <input type="text" class="form-control rounded-3 border form-control-icon" placeholder="Search...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                        <div class="accordion accordion-flush filter-accordion" id="filterAccordion">
                            <div class="card-body border-bottom">
                                <h4 class="text-muted text-uppercase fs-12 fw-medium mb-6">Products</h4>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="javascript:void(0)" class="text-body fw-medium">Men's Wear</a>
                                        <span class="badge bg-light text-muted">5</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="javascript:void(0)" class="text-body fw-medium">Vegetables</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="javascript:void(0)" class="text-body fw-medium">Smartwatches</a>
                                        <span class="badge bg-light text-muted">5</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="javascript:void(0)" class="text-body fw-medium">Mobile Phones</a>
                                        <span class="badge bg-light text-muted">6</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="javascript:void(0)" class="text-body fw-medium">Sofas</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="javascript:void(0)" class="text-body fw-medium">Car Accessories</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="javascript:void(0)" class="text-body fw-medium">Home Appliances</a>
                                        <span class="badge bg-light text-muted">7</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <a href="javascript:void(0)" class="text-body fw-medium">Toys</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body border-bottom">
                                <h4 class="text-muted text-uppercase fs-12 fw-medium mb-6">Products</h4>
                                <div class="mt-2" id="slider-round"></div>
                                <div class="d-flex justify-content-between mt-3">
                                    <p class="m-0 fw-semibold">Min Val: <span class="fs-12 text-muted" id="slider-margin-value-min"></span></p>
                                    <p class="m-0 fw-semibold">Max Val: <span class="fs-12 text-muted" id="slider-margin-value-max"></span></p>
                                </div>
                            </div>
                            <div class="card-body border-bottom">
                                <h4 class="text-muted text-uppercase fs-12 fw-medium mb-6">Sizes</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-light btn-sm">XS</button>
                                    <button type="button" class="btn btn-outline-light btn-sm">S</button>
                                    <button type="button" class="btn btn-outline-light btn-sm">M</button>
                                    <button type="button" class="btn btn-outline-light btn-sm">L</button>
                                    <button type="button" class="btn btn-outline-light btn-sm">XL</button>
                                    <button type="button" class="btn btn-outline-light btn-sm">2XL</button>
                                    <button type="button" class="btn btn-outline-light btn-sm">3XL</button>
                                    <button type="button" class="btn btn-outline-light btn-sm">4XL</button>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingBrands">
                                    <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBrands" aria-expanded="false" aria-controls="collapseBrands">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Brands</span>
                                    </button>
                                </h2>
                                <div id="collapseBrands" class="accordion-collapse collapse" aria-labelledby="headingBrands" data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div class="form-icon right">
                                            <input type="text" class="form-control rounded-3" placeholder="Search brands...">
                                            <i class="ri-search-2-line search-icon"></i>
                                        </div>
                                        <div class="d-flex flex-column gap-3 mt-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brand1">
                                                <label class="form-check-label" for="brand1">AND/OR (17)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brand2">
                                                <label class="form-check-label" for="brand2">7 For All Mankind (20)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brand4">
                                                <label class="form-check-label" for="brand4">AllSaints (13)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brand5">
                                                <label class="form-check-label" for="brand5">Barbour (1)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brand6">
                                                <label class="form-check-label" for="brand6">Betty & Co. (10)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brand7">
                                                <label class="form-check-label" for="brand7">Betty Barclay (41)</label>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-link p-0 mt-4 text-muted">View More<i class="ri-arrow-down-s-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingDiscount">
                                    <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDiscount" aria-expanded="false" aria-controls="collapseDiscount">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Discount</span>
                                    </button>
                                </h2>
                                <div id="collapseDiscount" class="accordion-collapse collapse" aria-labelledby="headingDiscount" data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-column gap-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="discount1">
                                                <label class="form-check-label" for="discount1">50% or more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="discount2">
                                                <label class="form-check-label" for="discount2">40% or more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="discount3">
                                                <label class="form-check-label" for="discount3">30% or more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="discount4" checked>
                                                <label class="form-check-label" for="discount4">20% or more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="discount5">
                                                <label class="form-check-label" for="discount5">10% or more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="discount6">
                                                <label class="form-check-label" for="discount6">Less than 10%</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingRating">
                                    <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRating" aria-expanded="false" aria-controls="collapseRating">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span>
                                    </button>
                                </h2>
                                <div id="collapseRating" class="accordion-collapse collapse" aria-labelledby="headingRating" data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <div class="card shadow-none border rounded mb-0">
                                                    <div class="card-body p-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input me-2" type="checkbox" id="rating4" checked>
                                                            <label class="form-check-label" for="rating4">4 & Up</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card shadow-none border rounded mb-0">
                                                    <div class="card-body p-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input me-2" type="checkbox" id="rating3">
                                                            <label class="form-check-label" for="rating3">3 & Up</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card shadow-none border rounded mb-0">
                                                    <div class="card-body p-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input me-2" type="checkbox" id="rating2">
                                                            <label class="form-check-label" for="rating2">2 & Up</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card shadow-none border rounded mb-0">
                                                    <div class="card-body p-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input me-2" type="checkbox" id="rating1">
                                                            <label class="form-check-label" for="rating1">1 & Up</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card ecommerce-card">
                                <div class="d-flex justify-content-between align-items-center position-absolute top-0 start-0 end-0 p-3">
                                    <span class="badge bg-danger">− 30%</span>
                                    <a href="apps-ecommerce-wishlist" class="btn btn-link p-0 fs-20 text-muted" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" data-bs-title="Wishlist">
                                        <i class="ri-heart-3-line"></i>
                                    </a>
                                </div>
                                <div class="card-body text-start">
                                    <img src="assets/images/product/img-01.png" class="img-fluid" alt="Crop Top">
                                    <a href="apps-ecommerce-products-details" class="fw-semibold text-body mb-1 text-truncate">Summer Ribbed Crop Top</a>
                                    <p class="text-muted mb-3 text-truncate-2">Stylish and breathable crop top perfect for warm-weather outfits and casual wear.</p>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="d-flex flex-grow-1">
                                            <button aria-label="Select primary color" class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <span class="fs-12 fw-semibold">4.5<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span>
                                        </div>
                                    </div>
                                    <div class="price d-flex flex-wrap justify-content-between align-items-end">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-light text-muted">Apparel</span>
                                            <span class="badge bg-light text-muted">Topwear</span>
                                        </div>
                                        <div class="text-end">
                                            <p class="text-muted text-decoration-line-through mb-0 fs-12">$29.99</p>
                                            <strong class="fs-16">$20.99</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center cart-button px-6">
                                        <a href="apps-ecommerce-checkout" class="btn btn-primary w-100">Buy $20.99</a>
                                        <a href="apps-ecommerce-cart" class="btn btn-light icon-btn"><i class="ri-shopping-cart-2-line fs-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card ecommerce-card">
                                <div class="d-flex justify-content-between align-items-center position-absolute top-0 start-0 end-0 p-3">
                                    <span class="badge bg-danger">− 40%</span>
                                    <a href="apps-ecommerce-wishlist" class="btn btn-link p-0 fs-20 text-muted" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" data-bs-title="Add to Wishlist">
                                        <i class="ri-heart-3-line"></i>
                                    </a>
                                </div>
                                <div class="card-body text-start">
                                    <img src="assets/images/product/img-02.png" class="img-fluid" alt="Analog Wrist Watch">
                                    <a href="apps-ecommerce-products-details" class="fw-semibold text-body mb-1 text-truncate">Fossil Grant Chronograph Watch</a>
                                    <p class="text-muted mb-3 text-truncate-2">Elegant analog wrist watch with genuine leather strap and stopwatch functionality.</p>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="d-flex flex-grow-1">
                                            <button aria-label="Select primary color" class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <span class="fs-12 fw-semibold">4.6<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span>
                                        </div>
                                    </div>
                                    <div class="price d-flex flex-wrap justify-content-between align-items-end">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-light text-muted">Watches</span>
                                            <span class="badge bg-light text-muted">Chronograph</span>
                                        </div>
                                        <div class="text-end">
                                            <p class="text-muted text-decoration-line-through mb-0 fs-12">$149.99</p>
                                            <strong class="fs-16">$89.99</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center cart-button px-6">
                                        <a href="apps-ecommerce-checkout" class="btn btn-primary w-100">Buy $89.99</a>
                                        <a href="apps-ecommerce-cart" class="btn btn-light icon-btn"><i class="ri-shopping-cart-2-line fs-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card ecommerce-card">
                                <div class="d-flex justify-content-between align-items-center position-absolute top-0 start-0 end-0 p-3">
                                    <span class="badge bg-danger">− 50%</span>
                                    <a href="apps-ecommerce-wishlist" class="btn btn-link p-0 fs-20" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" data-bs-title="Wishlist">
                                        <i class="ri-heart-3-line"></i>
                                    </a>
                                </div>
                                <div class="card-body text-start">
                                    <img src="assets/images/product/img-03.png" class="img-fluid" alt="Running Shoes">
                                    <a href="apps-ecommerce-products-details" class="fw-semibold text-body mb-1 text-truncate">Nike Air Zoom Pegasus 39</a>
                                    <p class="text-muted mb-3 text-truncate-2">Breathable running shoes designed for comfort and long-distance performance.</p>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="d-flex flex-grow-1">
                                            <button aria-label="Select primary color" class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <span class="fs-12 fw-semibold">4.8<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span>
                                        </div>
                                    </div>
                                    <div class="price d-flex flex-wrap justify-content-between align-items-end">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-light text-muted">Shoes</span>
                                            <span class="badge bg-light text-muted">Running</span>
                                        </div>
                                        <div class="text-end">
                                            <p class="text-muted text-decoration-line-through mb-0 fs-12">$119.99</p>
                                            <strong class="fs-16">$59.99</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center cart-button px-6">
                                        <a href="apps-ecommerce-checkout" class="btn btn-primary w-100">Buy $59.99</a>
                                        <a href="apps-ecommerce-cart" class="btn btn-light icon-btn"><i class="ri-shopping-cart-2-line fs-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card ecommerce-card">
                                <div class="d-flex justify-content-between align-items-center position-absolute top-0 start-0 end-0 p-3">
                                    <span class="badge bg-danger">− 40%</span>
                                    <a href="apps-ecommerce-wishlist" class="btn btn-link p-0 fs-20 text-muted" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" data-bs-title="Wishlist">
                                        <i class="ri-heart-3-line"></i>
                                    </a>
                                </div>
                                <div class="card-body text-start">
                                    <img src="assets/images/product/img-04.png" class="img-fluid" alt="Winter Crop Top">
                                    <a href="apps-ecommerce-products-details" class="fw-semibold text-body mb-1 text-truncate">Knitted Winter Crop Top</a>
                                    <p class="text-muted mb-3 text-truncate-2">Stay stylish and warm with this cozy knitted crop top—perfect for layering in colder seasons.</p>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="d-flex flex-grow-1">
                                            <button aria-label="Select primary color" class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <span class="fs-12 fw-semibold">4.6<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span>
                                        </div>
                                    </div>
                                    <div class="price d-flex flex-wrap justify-content-between align-items-end">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-light text-muted">Winter</span>
                                            <span class="badge bg-light text-muted">Crop Top</span>
                                        </div>
                                        <div class="text-end">
                                            <p class="text-muted text-decoration-line-through mb-0 fs-12">$49.99</p>
                                            <strong class="fs-16">$29.99</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center cart-button px-6">
                                        <a href="apps-ecommerce-checkout" class="btn btn-primary w-100">Buy $29.99</a>
                                        <a href="apps-ecommerce-cart" class="btn btn-light icon-btn"><i class="ri-shopping-cart-2-line fs-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card ecommerce-card">
                                <div class="d-flex justify-content-between align-items-center position-absolute top-0 start-0 end-0 p-3">
                                    <span class="badge bg-success">− 25%</span>
                                    <a href="apps-ecommerce-wishlist" class="btn btn-link p-0 fs-20 text-muted" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" data-bs-title="Wishlist">
                                        <i class="ri-heart-3-line"></i>
                                    </a>
                                </div>
                                <div class="card-body text-start">
                                    <img src="assets/images/product/img-05.png" class="img-fluid" alt="Men's Casual T-Shirt">
                                    <a href="apps-ecommerce-products-details" class="fw-semibold text-body mb-1 text-truncate">Men's Casual Cotton T-Shirt</a>
                                    <p class="text-muted mb-3 text-truncate-2">Comfortable and versatile t-shirt made with soft cotton—great for everyday casual wear.</p>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="d-flex flex-grow-1">
                                            <button aria-label="Select primary color" class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-dark-subtle text-dark color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-success-subtle text-success color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <span class="fs-12 fw-semibold">4.4<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span>
                                        </div>
                                    </div>
                                    <div class="price d-flex flex-wrap justify-content-between align-items-end">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-light text-muted">Men</span>
                                            <span class="badge bg-light text-muted">T-Shirt</span>
                                        </div>
                                        <div class="text-end">
                                            <p class="text-muted text-decoration-line-through mb-0 fs-12">$19.99</p>
                                            <strong class="fs-16">$14.99</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center cart-button px-6">
                                        <a href="apps-ecommerce-checkout" class="btn btn-primary w-100">Buy $14.99</a>
                                        <a href="apps-ecommerce-cart" class="btn btn-light icon-btn"><i class="ri-shopping-cart-2-line fs-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card ecommerce-card">
                                <div class="d-flex justify-content-between align-items-center position-absolute top-0 start-0 end-0 p-3">
                                    <span class="badge bg-danger">− 40%</span>
                                    <a href="apps-ecommerce-wishlist" class="btn btn-link p-0 fs-20 text-muted" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" data-bs-title="Wishlist">
                                        <i class="ri-heart-3-line"></i>
                                    </a>
                                </div>
                                <div class="card-body text-start">
                                    <img src="assets/images/product/img-06.png" class="img-fluid" alt="Winter Crop Top">
                                    <a href="apps-ecommerce-products-details" class="fw-semibold text-body mb-1 text-truncate">Knitted Winter Crop Top</a>
                                    <p class="text-muted mb-3 text-truncate-2">Stay stylish and warm with this cozy knitted crop top—perfect for layering in colder seasons.</p>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="d-flex flex-grow-1">
                                            <button aria-label="Select primary color" class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <span class="fs-12 fw-semibold">4.6<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span>
                                        </div>
                                    </div>
                                    <div class="price d-flex flex-wrap justify-content-between align-items-end">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-light text-muted">Winter</span>
                                            <span class="badge bg-light text-muted">Crop Top</span>
                                        </div>
                                        <div class="text-end">
                                            <p class="text-muted text-decoration-line-through mb-0 fs-12">$49.99</p>
                                            <strong class="fs-16">$29.99</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center cart-button px-6">
                                        <a href="apps-ecommerce-checkout" class="btn btn-primary w-100">Buy $29.99</a>
                                        <a href="apps-ecommerce-cart" class="btn btn-light icon-btn"><i class="ri-shopping-cart-2-line fs-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card ecommerce-card">
                                <div class="d-flex justify-content-between align-items-center position-absolute top-0 start-0 end-0 p-3">
                                    <span class="badge bg-danger">− 30%</span>
                                    <a href="apps-ecommerce-wishlist" class="btn btn-link p-0 fs-20 text-muted" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" data-bs-title="Wishlist">
                                        <i class="ri-heart-3-line"></i>
                                    </a>
                                </div>
                                <div class="card-body text-start">
                                    <img src="assets/images/product/img-07.png" class="img-fluid" alt="Elegant Heels">
                                    <a href="apps-ecommerce-products-details" class="fw-semibold text-body mb-1 text-truncate">Elegant Block Heels</a>
                                    <p class="text-muted mb-3 text-truncate-2">Step into elegance with these chic block heels—perfect for formal events or adding flair to your everyday outfit.</p>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="d-flex flex-grow-1">
                                            <button aria-label="Select primary color" class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <span class="fs-12 fw-semibold">4.7<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span>
                                        </div>
                                    </div>
                                    <div class="price d-flex flex-wrap justify-content-between align-items-end">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-light text-muted">Heels</span>
                                            <span class="badge bg-light text-muted">Footwear</span>
                                        </div>
                                        <div class="text-end">
                                            <p class="text-muted text-decoration-line-through mb-0 fs-12">$69.99</p>
                                            <strong class="fs-16">$48.99</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center cart-button px-6">
                                        <a href="apps-ecommerce-checkout" class="btn btn-primary w-100">Buy $48.99</a>
                                        <a href="apps-ecommerce-cart" class="btn btn-light icon-btn"><i class="ri-shopping-cart-2-line fs-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card ecommerce-card">
                                <div class="d-flex justify-content-between align-items-center position-absolute top-0 start-0 end-0 p-3">
                                    <span class="badge bg-danger">− 30%</span>
                                    <a href="apps-ecommerce-wishlist" class="btn btn-link p-0 fs-20 text-muted" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" data-bs-title="Wishlist">
                                        <i class="ri-heart-3-line"></i>
                                    </a>
                                </div>
                                <div class="card-body text-start">
                                    <img src="assets/images/product/img-08.png" class="img-fluid" alt="Elegant Purse">
                                    <a href="apps-ecommerce-products-details" class="fw-semibold text-body mb-1 text-truncate">Leather Handbag</a>
                                    <p class="text-muted mb-3 text-truncate-2">This sleek leather handbag is the perfect accessory for any occasion—crafted for style and durability.</p>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="d-flex flex-grow-1">
                                            <button aria-label="Select primary color" class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                            <button aria-label="Select primary color" class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i class="ri-circle-fill fs-14"></i></button>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <span class="fs-12 fw-semibold">4.8<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span>
                                        </div>
                                    </div>
                                    <div class="price d-flex flex-wrap justify-content-between align-items-end">
                                        <div class="d-flex gap-1">
                                            <span class="badge bg-light text-muted">Handbag</span>
                                            <span class="badge bg-light text-muted">Leather</span>
                                        </div>
                                        <div class="text-end">
                                            <p class="text-muted text-decoration-line-through mb-0 fs-12">$120.00</p>
                                            <strong class="fs-16">$84.00</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center cart-button px-6">
                                        <a href="apps-ecommerce-checkout" class="btn btn-primary w-100">Buy $84.00</a>
                                        <a href="apps-ecommerce-cart" class="btn btn-light icon-btn"><i class="ri-shopping-cart-2-line fs-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-wrap gap-4 align-items-center p-5 pt-0">
                                <div class="fw-medium"> Showing 1 - 10 of 18 Entries</div>
                                <div class="ms-auto">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:voide(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:voide(0)">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="javascript:voide(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:voide(0)">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:voide(0)">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:voide(0)">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:voide(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div>
        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

<script src="assets/libs/nouislider/nouislider.min.js"></script>
<script type="module" src="assets/js/app/ecommerce-product.init.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection