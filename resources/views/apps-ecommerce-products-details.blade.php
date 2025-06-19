@extends('partials.layouts.master')

@section('title', 'Product Details | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Product Details')
@section('css')
    <link rel="stylesheet" href="assets/libs/@yaireo/tagify/tagify.css">
    <link rel="stylesheet" href="assets/libs/dual-listbox/dual-listbox.css">
@endsection
@section('content')


<!-- begin::App -->

            <div class="card">
                <div class="card-body">
                    <div class="row g-5 g-xl-10">
                        <div class="col-xl-5">
                            <div dir="ltr" class="swiper product-main bg-light p-6 rounded mb-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-fluid w-100" alt="Product Image" src="assets/images/product/img-25.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid w-100" alt="Product Image" src="assets/images/product/img-26.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid w-100" alt="Product Image" src="assets/images/product/img-27.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid w-100" alt="Product Image" src="assets/images/product/img-28.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid w-100" alt="Product Image" src="assets/images/product/img-29.png">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="swiper product-small">
                                <div class="swiper-wrapper gap-4">
                                    <div class="swiper-slide bg-light rounded">
                                        <img src="assets/images/product/img-25.png" alt="Product Image" class="img-fluid cursor-pointer" />
                                    </div>
                                    <div class="swiper-slide bg-light-subtle rounded">
                                        <img src="assets/images/product/img-26.png" alt="Product Image" class="img-fluid cursor-pointer" />
                                    </div>
                                    <div class="swiper-slide bg-light-subtle rounded">
                                        <img src="assets/images/product/img-27.png" alt="Product Image" class="img-fluid cursor-pointer" />
                                    </div>
                                    <div class="swiper-slide bg-light-subtle rounded">
                                        <img src="assets/images/product/img-28.png" alt="Product Image" class="img-fluid cursor-pointer" />
                                    </div>
                                    <div class="swiper-slide bg-light-subtle rounded">
                                        <img src="assets/images/product/img-29.png" alt="Product Image" class="img-fluid cursor-pointer" />
                                    </div>
                                </div>
                            </div>
                        </div><!--End col-->
                        <div class="col-xl-7">
                            <a href="apps-ecommerce-create-products" class="btn btn-link p-0 fs-20 text-muted float-end" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" data-bs-title="Edit">
                                <i class="ri-edit-2-line"></i>
                            </a>                            
                            <span class="badge bg-success-subtle text-success">In Stock</span>
                            <h3 class="mb-1 mt-8 fw-medium">Schiffli Full Sleeve Girls' Winter Dress</h3>
                            <div>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill-half text-warning"></i>
                                <span class="fw-medium ms-1 fs-13">4.6
                                    <a class="text-muted ms-2" href="#!">(4.7k Reviews)</a>
                                </span>
                            </d>
                            <div class="fs-18 my-6">
                                <span class="fw-bold">$899</span>
                                <span class="mb-0 text-muted ms-1"> <s> $999</s></span>
                            </div>
                            <div>
                                <p class="fs-15 fw-semibold mb-2">Description :</p>
                                <p class="text-muted mb-0 lh-lg">This stylish girls' winter dress features a unique Schiffli pattern with full sleeves, crafted from soft and breathable fabric. Perfect for chilly days, it offers both warmth and fashion. Ideal for casual outings or special occasions.</p>
                            </div>
                            <div class="row align-items-center flex-wrap mt-0 mb-6 g-5">
                                <div class="col-md-6">     
                                    <div class="d-flex gap-3 align-items-center">
                                        <p class="fs-15 fw-semibold mb-0">Size :</p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Currently Out of Stock">
                                                <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio1" checked>
                                                <label class="btn btn-outline-light fw-medium avatar-md rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio1">S</label>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Only 4 Pieces Left">
                                                <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio2">
                                                <label class="btn btn-outline-light fw-medium avatar-md rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio2">M</label>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="6 Pieces Available">
                                                <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio3">
                                                <label class="btn btn-outline-light fw-medium avatar-md rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio3">L</label>
                                            </div>
                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Currently Out of Stock">
                                                <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio4">
                                                <label class="btn btn-outline-light fw-medium avatar-md rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio4">XL</label>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex gap-3 align-items-center">
                                        <p class="fs-15 fw-semibold mb-0">Color:</p>
                                        <div class="d-flex gap-2 align-items-center">
                                            <button type="button" class="btn bg-primary-subtle text-primary color-btn"><i class="ri-circle-fill fs-14"></i></button>
                                            <button type="button" class="btn bg-dark-subtle text-dark color-btn"><i class="ri-circle-fill fs-14"></i></button>
                                            <button type="button" class="btn bg-success-subtle text-success color-btn"><i class="ri-circle-fill fs-14"></i></button>
                                            <button type="button" class="btn bg-danger-subtle text-danger color-btn"><i class="ri-circle-fill fs-14"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qty-input qty-input-rounded">
                                <button type="button" data-action="minus">
                                    <i class="ri-subtract-line"></i>
                                </button>
                                <input id="rounded-default-touchspin" type="number" value="2" min="0" max="100">
                                <button type="button" data-action="plus">
                                    <i class="ri-add-line"></i>
                                </button>
                            </div>
                            <div class="d-flex flex-column gap-2 my-6">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="bg-light rounded-circle avatar-md d-flex justify-content-center align-items-center fs-16 text-muted"><i class="ri-heart-line"></i></span>
                                    <span>Add to wishlist</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="bg-light rounded-circle avatar-md d-flex justify-content-center align-items-center fs-16 text-muted"><i class="ri-eye-line"></i></span>
                                    <span>565 people are viewing the products</span>
                                </div>
                            </div>
                            <div class="row g-6">
                                <div class="col-md-6">
                                    <h6 class="mb-1">Services:</h6>
                                    <ul class="list-group list-borderless">
                                        <li class="list-group-item"><i class="ri-arrow-go-back-line me-1 text-muted"></i> 7 Days Return</li>
                                        <li class="list-group-item"><i class="ri-refresh-line me-1 text-muted"></i> 7 Days Replacement</li>
                                        <li class="list-group-item"><i class="ri-cash-line me-1 text-muted"></i> Cash on Delivery Available</li>
                                        <li class="list-group-item pb-0"><i class="ri-truck-line me-1 text-muted"></i>Free Delivery over ₹499</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="mb-1">Return:</h6>
                                    <ul class="list-group list-borderless">
                                        <li class="list-group-item"><i class="ri-arrow-go-back-line text-muted me-1"></i> Free store return</li>
                                        <li class="list-group-item"><i class="ri-truck-line text-muted me-1"></i> Free returns via USPS Dropoff Service</li>
                                    </ul>                                  
                                </div>
                            </div>   
                            <div class="mt-6">
                                <div class="d-flex align-items-center gap-2">
                                  <h6 class="mb-0">Share:</h6>
                                  <div class="d-flex align-items-center gap-2">
                                      <a href="#!" class="bg-light rounded-circle avatar-md d-flex justify-content-center align-items-center fs-16 text-muted"><i class="ri-facebook-line"></i></a>
                                      <a href="#!" class="bg-light rounded-circle avatar-md d-flex justify-content-center align-items-center fs-16 text-muted"><i class="ri-twitter-line"></i></a>
                                      <a href="#!" class="bg-light rounded-circle avatar-md d-flex justify-content-center align-items-center fs-16 text-muted"><i class="ri-pinterest-line"></i></a>
                                  </div>
                                </div>
                              </div>
                        </div><!--End col-->
                    </div>
                </div>
                </div>
            </div><!--End card-->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center justify-content-between g-5">
                        <div class="col-xxl-6">
                            <div class="row g-5">
                                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 border-end-0 border-end-md">
                                    <span class="badge bg-primary-subtle text-primary mb-3">Very Good</span>
                                    <h6 class="mb-6">User Reviews</h6>
                                    <h3 class="fw-semibold">4.76</h3>
                                    <div class="text-warning">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </div>
                                    <p class="mb-0 text-muted">Based on (23,435) ratings</p>
                                </div>
                                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 px-3">
                                    <div class="d-flex align-items-center gap-3 mb-4">
                                      <div class="fs-12 fw-semibold">5<i class="ri-star-fill fs-11 ms-1 align-middle text-warning"></i></div>
                                      <div class="progress progress-sm flex-fill">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <div class="text-muted">Design</div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 mb-4">
                                      <div class="fs-12 fw-semibold">4<i class="ri-star-fill fs-11 ms-1 align-middle text-warning"></i></div>
                                      <div class="progress progress-sm flex-fill">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <div class="text-muted">Material</div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 mb-4">
                                      <div class="fs-12 fw-semibold">3<i class="ri-star-fill fs-11 ms-1 align-middle text-warning"></i></div>
                                      <div class="progress progress-sm flex-fill">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <div class="text-muted">Comfort</div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 mb-4">
                                      <div class="fs-12 fw-semibold">2<i class="ri-star-fill fs-11 ms-1 align-middle text-warning"></i></div>
                                      <div class="progress progress-sm flex-fill">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 39%" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <div class="text-muted">Quality</div>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                      <div class="fs-12 fw-semibold">1<i class="ri-star-fill fs-11 ms-1 align-middle text-warning"></i></div>
                                      <div class="progress progress-sm flex-fill">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 27%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <div class="text-muted">Color</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div dir="ltr" class="swiper swiper-reviews px-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide card border shadow-none rounded w-100 mb-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between flex-column min-h-160px">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between mb-3 mb-md-0">
                                                  <div class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle me-3 avatar-md" alt="Reviewer Avatar">
                                                    <div>
                                                      <h6 class="mb-0 fw-semibold">Alexa Morgan</h6>
                                                      <div class="d-flex align-items-center fs-12 text-muted"><i class="ri-star-s-fill text-warning me-1"></i> 4.8</div>
                                                    </div>
                                                  </div>
                                                  <span class="badge bg-info-subtle text-info">Top Reviewer</span>
                                                </div>
                                                <div class="mb-5 mb-md-0">
                                                  <h6 class="fw-semibold mb-1">Absolutely love this product!</h6>
                                                  <p class="text-muted mb-0 text-truncate">Soft material, perfect design, fast delivery. Will buy again!</p>                                                                                        
                                                </div>
                                                <div class="row align-items-end">
                                                  <div class="col-md-6">
                                                    <div class="d-flex gap-2">
                                                      <a href="#!">
                                                        <img src="assets/images/product/img-06.png" class="img-thumbnail border-0 rounded w-50px" alt="Review Image 1">
                                                      </a>
                                                      <a href="#!">
                                                        <img src="assets/images/product/img-07.png" class="img-thumbnail border-0 rounded w-50px" alt="Review Image 2">
                                                      </a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 text-sm-end mt-3 mt-sm-0">
                                                    <button class="btn btn-outline-secondary btn-sm me-2">Report Abuse</button>
                                                    <button class="btn btn-light btn-sm me-1" title="Helpful">
                                                      <i class="ri-thumb-up-line"></i>
                                                    </button>
                                                    <button class="btn btn-light btn-sm" title="Not Helpful">
                                                      <i class="ri-thumb-down-line"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card border shadow-none rounded w-100 mb-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between flex-column min-h-160px">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between mb-3 mb-md-0">
                                                  <div class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-4.jpg" class="rounded-circle me-3 avatar-md" alt="Reviewer Avatar">
                                                    <div>
                                                      <h6 class="mb-0 fw-semibold">John Doe</h6>
                                                      <div class="d-flex align-items-center fs-12 text-muted"><i class="ri-star-s-fill text-warning me-1"></i> 4.5</div>
                                                    </div>
                                                  </div>
                                                  <span class="badge bg-info-subtle text-info">Verified Buyer</span>
                                                </div>
                                                   <div class="mb-5 mb-md-0">
                                                  <h6 class="fw-semibold mb-1">Great quality, highly recommend!</h6>
                                                  <p class="text-muted mb-0 text-truncate">Perfect fit, very comfortable, and arrived on time. Definitely recommend to others!</p>
                                                </div>
                                                <div class="row align-items-end">
                                                  <div class="col-md-6">
                                                    <div class="d-flex gap-2">
                                                      <a href="#!">
                                                        <img src="assets/images/product/img-08.png" class="img-thumbnail border-0 rounded w-50px" alt="Review Image 1">
                                                      </a>
                                                      <a href="#!">
                                                        <img src="assets/images/product/img-09.png" class="img-thumbnail border-0 rounded w-50px" alt="Review Image 2">
                                                      </a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 text-sm-end mt-3 mt-sm-0">
                                                    <button class="btn btn-outline-secondary btn-sm me-2">Report Abuse</button>
                                                    <button class="btn btn-light btn-sm me-1" title="Helpful">
                                                      <i class="ri-thumb-up-line"></i>
                                                    </button>
                                                    <button class="btn btn-light btn-sm" title="Not Helpful">
                                                      <i class="ri-thumb-down-line"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card border shadow-none rounded w-100 mb-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between flex-column min-h-160px">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between mb-3 mb-md-0">
                                                  <div class="d-flex align-items-center">
                                                    <img src="assets/images/avatar/avatar-5.jpg" class="rounded-circle me-3 avatar-md" alt="Reviewer Avatar">
                                                    <div>
                                                      <h6 class="mb-0 fw-semibold">Sophia Lee</h6>
                                                      <div class="d-flex align-items-center fs-12 text-muted"><i class="ri-star-s-fill text-warning me-1"></i> 4.7</div>
                                                    </div>
                                                  </div>
                                                  <span class="badge bg-info-subtle text-info">Verified Purchase</span>
                                                </div>
                                                   <div class="mb-5 mb-md-0">
                                                  <h6 class="fw-semibold mb-1">Excellent product, very satisfied!</h6>
                                                  <p class="text-muted mb-0 text-truncate">The product exceeded my expectations. It's durable and stylish. Worth every penny!</p>
                                                </div>
                                                <div class="row align-items-end">
                                                  <div class="col-md-6">
                                                    <div class="d-flex gap-2">
                                                      <a href="#!">
                                                        <img src="assets/images/product/img-10.png" class="img-thumbnail border-0 rounded w-50px" alt="Review Image 1">
                                                      </a>
                                                      <a href="#!">
                                                        <img src="assets/images/product/img-11.png" class="img-thumbnail border-0 rounded w-50px" alt="Review Image 2">
                                                      </a>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 text-sm-end mt-3 mt-sm-0">
                                                    <button class="btn btn-outline-secondary btn-sm me-2">Report Abuse</button>
                                                    <button class="btn btn-light btn-sm me-1" title="Helpful">
                                                      <i class="ri-thumb-up-line"></i>
                                                    </button>
                                                    <button class="btn btn-light btn-sm" title="Not Helpful">
                                                      <i class="ri-thumb-down-line"></i>
                                                    </button>
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
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-0 align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-action-title mb-0">Product Description</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <nav>
                                <ul class="nav nav-tabs-bordered" id="nav-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="nav-details-tab" data-bs-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-details" aria-selected="false" tabindex="-1">Description</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="nav-specify-tab" data-bs-toggle="tab" href="#nav-specify" role="tab" aria-controls="nav-specify" aria-selected="true">Specification</a>
                                </li>
                                </ul>
                            </nav>
                            <div class="tab-content border border-0 pt-6">
                                <div class="tab-pane fade active show" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab">
                                    <p class="text-muted">The Apple MacBook Pro is a premium laptop designed to deliver exceptional performance in a compact and lightweight form. With a stunning 13.3-inch Retina display that offers sharp resolution and true-to-life color accuracy, it is ideal for professionals and creatives. Powered by a 7th Gen Intel Core i5 processor with a base speed of 2.3 GHz, it handles multitasking with ease. The aluminum unibody in Space Grey adds to its elegance while keeping it sturdy and portable at just 1.37 kg. With up to 10 hours of battery life and macOS’s seamless experience, this laptop is built for productivity and portability.</p>
                                    <p class="text-muted">Equipped with a high-resolution 2560×1600 pixel display, the MacBook Pro provides crisp visuals for everything from video editing to everyday browsing. Its wide color gamut and brightness make it an excellent choice for creative professionals who demand precision and clarity. Despite its powerful internals, the MacBook Pro remains cool and quiet, making it suitable for both office environments and on-the-go productivity.</p>
                                    <p class="text-muted">Apple’s signature macOS operating system offers a clean, intuitive interface and powerful built-in tools, including enhanced security features and seamless integration with other Apple devices. Whether you're editing large files, managing multiple apps, or attending virtual meetings, the MacBook Pro ensures a smooth experience. Its robust battery, stylish design, and reliable hardware make it a long-term investment for those seeking performance and elegance in one package.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-specify" role="tabpanel" aria-labelledby="nav-specify-tab">
                                    <div class="table-responsive">
                                    <table class="table mb-0 text-nowrap">
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="w-288px">Brand</th>
                                            <td>Apple</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Model</th>
                                            <td>MacBook Pro</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Price</th>
                                            <td>$2499</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Dimensions (mm)</th>
                                            <td>304.10 × 212.40 × 14.90</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Weight</th>
                                            <td>1.37 kg</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td>Space Grey</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Operating System</th>
                                            <td>macOS</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Battery Life</th>
                                            <td>Up to 10 hours</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Display Size</th>
                                            <td>13.30-inch</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Resolution</th>
                                            <td>2560×1600 pixels</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Touch Screen</th>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Processor</th>
                                            <td>Intel Core i5 7th Gen</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Base Clock Speed</th>
                                            <td>2.3 GHz</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!--End row-->
        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

<script src="assets/libs/@yaireo/tagify/tagify.js"></script>
<script src="assets/libs/dual-listbox/dual-listbox.js"></script>

<!-- Swiper JS -->
<script src="assets/libs/swiper/swiper-bundle.min.js"></script>

<script src="assets/js/form/advanced-form.init.js"></script>

<script src="assets/js/app/ecommerce-product-detail.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection