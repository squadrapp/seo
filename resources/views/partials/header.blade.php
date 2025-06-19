<!-- Begin Header -->
<header class="app-header" id="appHeader">
    <div class="container-fluid w-100">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-inline-flex align-items-center gap-2">
                <a href="index" class="align-items-end logo-main d-none me-5">
                    <img height="35" width="34" class="logo-dark" alt="Dark Logo" src="assets/images/logo-md.png">
                    <h3 class="text-body-emphasis fw-bolder mb-0 ms-1">Urbix</h3>
                </a>
                <button type="button" class="vertical-toggle btn header-btn" id="toggleSidebar" aria-label="Toggle Sidebar">
                    <i class="bi bi-arrow-bar-left header-icon"></i>
                </button>
                <button type="button" class="horizontal-toggle btn header-btn d-none" id="toggleHorizontal" aria-label="Toggle Menu">
                    <i class="ri-menu-2-line header-icon"></i>
                </button>
                <!-- Search Bar -->
                <div class="form-icon right d-none d-md-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <input type="text" class="form-control form-control-icon bg-transparent rounded-pill min-w-300px" id="Search" placeholder="Search" required>
                    <div class="search-btn">
                        <div><i class="ri-search-line text-muted fs-16"></i></div>
                        <div><span class="badge bg-light-subtle text-muted">CTRL D</span></div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 d-flex align-items-center gap-4">
                <div class="d-flex gap-2 align-items-center">
                    <div class="dropdown pe-dropdown-mega d-none d-md-block">
                        <button class="btn header-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                            <i class="bi bi-bell"></i>
                            <div class="icon-dot"></div>
                        </button>
                        <div class="dropdown-menu dropdown-mega-md header-dropdown-menu pe-noti-dropdown-menu p-0">
                            <div class="p-3 border-bottom">
                                <h6 class="d-flex align-items-center mb-0">Notification <span class="badge bg-success-subtle text-success ms-auto">4 Unread</span></h6>
                            </div>
                            <div>
                                <div class="noti-item">
                                    <div class="avatar-md d-flex align-items-center justify-content-center bg-success-subtle text-success fs-16">
                                        <i class="bi bi-bag-check-fill"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#!" class="text-decoration-none stretched-link">
                                            <h6 class="mb-1 fw-semibold">Item Back in Stock</h6>
                                        </a>
                                        <p class="text-muted mb-2 fs-12 mb-2">Today, 02:45 PM</p>
                                        <div class="p-2 bg-body-tertiary bg-opacity-50 rounded">
                                            <p class="mb-0 lh-base fs-13">Good news! The item you wanted is back in stock. Grab it before it’s gone again!</p>
                                        </div>
                                    </div>
                                    <a href="#!" class="position-absolute top-0 end-0 mt-2 me-3 fs-18 link link-danger z-1">
                                        <i class="bi bi-x"></i>
                                    </a>
                                </div>
                                <div class="noti-item">
                                    <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Iamge" class="avatar-md">
                                    <div>
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 text-muted"><strong class="fw-semibold text-body">Donald</strong><i class="ri-heart-3-fill text-danger ms-1"></i></h6>
                                        </a>
                                        <p class="text-muted mb-0 fs-12 mb-2">Friday, 11:29 PM</p>
                                    </div>
                                    <a href="#!" class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i class="bi bi-x"></i></a>
                                </div>
                                <div class="noti-item">
                                    <div class="avatar-md d-flex align-items-center justify-content-center bg-danger-subtle text-danger fs-16">
                                        <i class="bi bi-fire"></i>
                                    </div>
                                    <div>
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-2">Birthday Reminder</h6>
                                        </a>
                                        <p class="text-muted mb-2 fs-12 mb-2">Tuesday, 02:45 PM</p>
                                        <div class="p-2 bg-body-tertiary bg-opacity-50 rounded">
                                            <p class="mb-0 lh-base fs-13">Don’t forget! It’s Emily birthday tomorrow. Send them a message!</p>
                                        </div>
                                    </div>
                                    <a href="#!" class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i class="bi bi-x"></i></a>
                                </div>
                                <div class="noti-item">
                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image" class="avatar-md">
                                    <div>
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 text-muted"><strong class="fw-semibold text-body">Richard</strong><i class="bi bi-person-plus-fill text-primary fs-16 ms-1"></i></h6>
                                        </a>
                                        <p class="text-muted mb-0 fs-12">Monday, 07:14 AM</p>
                                    </div>
                                    <a href="#!" class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i class="bi bi-x"></i></a>
                                </div>
                                <div class="noti-item">
                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image" class="avatar-md">
                                    <div>
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-2">Olivia <strong class="fw-normal text-muted fs-13">liked your recent post</strong></h6>
                                        </a>
                                        <p class="text-muted mb-0 fs-12">Thursday 3:20 PM</p>
                                    </div>
                                    <a href="#!" class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i class="bi bi-x"></i></a>
                                </div>
                                <div class="noti-item">
                                    <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image" class="avatar-md">
                                    <div>
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-2 text-body">Mia <strong class="fw-normal text-muted fs-13">shared a file in Marketing Campaign</strong></h6>
                                        </a>
                                        <p class="text-muted mb-3 fs-12">Thursday 3:20 PM</p>
                                        <div class="d-flex align-items-center gap-2 p-2 position-relative z-1 border rounded">
                                            <div class="avatar-md d-flex align-items-center rounded justify-content-center flex-shrink-0 bg-danger-subtle text-danger">
                                                <i class="bi bi-file-pdf"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!">
                                                    <h6 class="mb-2">Campaign_Strategy.mp4</h6>
                                                </a>
                                                <p class="mb-0 text-muted fs-12">MP4 | 14 MB</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#!" class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown pe-dropdown-mega d-none d-md-block">
                        <button class="btn btn-icon header-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Messages">
                            <i class="bi bi-cart position-relative"></i>
                            <div class="icon-dot"></div>
                        </button>
                        <ul class="dropdown-menu dropdown-mega-md header-dropdown-menu p-0">
                            <div class="card mb-0">
                                <div class="p-5 border-bottom d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Cart Items</h5>
                                    <span class="badge text-primary bg-primary-subtle">3</span>
                                </div>
                                <ul class="list-unstyled list-none mb-0 p-4" id="header-cart-items-scroll">
                                    <li class="cart-item">
                                        <div class="d-flex items-start cart-dropdown-item">
                                            <img src="assets/images/product/img-02.png" class="avatar-lg me-4 p-1 rounded border" alt="img">
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h6><a href="apps-ecommerce-products-details" class="text-reset">Stop Watch</a></h6>
                                                    <p class="mb-0 fs-12 text-muted">Quantity: <span>2 x $159</span></p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center px-2">
                                                <h6 class="m-0 fw-normal">$<span class="cart-item-price">318</span></h6>
                                            </div>
                                            <div class="ps-2 d-flex">
                                                <button type="button" class="btn btn-sm"><i class="ri-close-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="d-flex items-start cart-dropdown-item">
                                            <img src="assets/images/product/img-03.png" class="avatar-lg me-4 p-1 rounded border" alt="img">
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h6><a href="apps-ecommerce-products-details" class="text-reset">Jeens Shoes</a></h6>
                                                    <p class="mb-0 fs-12 text-muted">Quantity: <span>1 x $399</span></p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center px-2">
                                                <h6 class="m-0 fw-normal">$<span class="cart-item-price">399</span></h6>
                                            </div>
                                            <div class="ps-2 d-flex">
                                                <button type="button" class="btn btn-sm"><i class="ri-close-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="d-flex items-start cart-dropdown-item">
                                            <img src="assets/images/product/img-04.png" class="avatar-lg me-4 p-1 rounded border" alt="img">
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h6><a href="apps-ecommerce-products-details" class="text-reset">Solder Less T-shirt</a></h6>
                                                    <p class="mb-0 fs-12 text-muted">Quantity: <span>3 x $259</span></p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center px-2">
                                                <h6 class="m-0 fw-normal">$<span class="cart-item-price">777</span></h6>
                                            </div>
                                            <div class="ps-2 d-flex">
                                                <button type="button" class="btn btn-sm"><i class="ri-close-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="px-5 py-4 bg-light-subtle d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Order Total:</h6>
                                    <span class="fw-semibold">$1494.00</span>
                                </div>
                                <div class="p-5 d-flex justify-content-end gap-3">
                                    <a href="apps-ecommerce-cart"><button class="btn btn-light" type="button">View Cart</button></a>
                                    <a class="btn btn-primary view-checkout" href="apps-ecommerce-checkout">Checkout </a>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <button class="btn header-btn d-block d-md-none" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="ri-search-line"></i>
                    </button>
                    <button class="btn header-btn d-none d-md-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="Settings">
                        <i class="bi bi-gear"></i>
                    </button>
                </div>
                <div class="dark-mode-btn" id="toggleMode">
                    <button class="btn header-btn active" id="lightModeBtn" type="button" aria-label="Switch to light mode">
                        <i class="bi bi-brightness-high"></i>
                    </button>
                    <button class="btn header-btn" id="darkModeBtn" type="button" aria-label="Switch to Dark mode">
                        <i class="bi bi-moon-stars"></i>
                    </button>
                </div>
                <div class="dropdown pe-dropdown-mega d-none d-md-block">
                    <button class="header-profile-btn btn gap-1 text-start" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-none d-xl-block pe-2">
                            <span class="d-block mb-0 fs-12 fw-semibold">Jaydon Levin</span>
                            <span class="d-block mb-0 fs-10 text-muted">jaydon@gmail.com</span>
                        </div>
                        <span class="header-btn btn position-relative">
                            <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image" class="img-fluid rounded-circle">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-mega-sm header-dropdown-menu p-3">
                        <div class="border-bottom pb-2 mb-2 d-flex align-items-center gap-2">
                            <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image" class="avatar-md">
                            <div>
                                <a href="javascript:void(0)">
                                    <h6 class="mb-0 lh-base">Jaydon Levin</h6>
                                </a>
                                <p class="mb-0 fs-13 text-muted">jaydon@gmail.com</p>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-1 border-bottom pb-1">
                            <li><a class="dropdown-item" href="pages-profile"><i class="bi bi-person me-2"></i> View Profile</a></li>
                            <li><a class="dropdown-item" href="pages-profile"><i class="bi bi-gear me-2"></i> Settings</a></li>
                            <li><a class="dropdown-item" href="pages-billing-subscription"><i class="bi bi-award me-2"></i> Subscription</a></li>
                        </ul>
                        <ul class="list-unstyled mb-1 border-bottom pb-1">
                            <li><a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-clock me-2"></i> ChangLog</a></li>
                            <li><a class="dropdown-item" href="pages-pricing"><i class="bi bi-currency-dollar"></i> Pricing</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-headset me-2"></i> Support</a></li>
                        </ul>
                        <ul class="list-unstyled mb-0">
                            <li><a class="dropdown-item" href="auth-signout"><i class="bi bi-box-arrow-right me-2"></i> Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END Header -->

<!-- Search Modal -->
<div class="modal fade search-modal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-block">
          <div class="form-icon">
            <input type="text" class="form-control form-control-icon" id="searchInputInModal" placeholder="Search" required>
            <div class="search-btn w-44px">
              <i class="ri-search-line text-muted fs-16"></i>
            </div>
            <button type="button" class="btn-close position-absolute end-0 top-50 translate-middle-y d-inline-block m-0" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        </div>
        <div class="modal-body" data-simplebar id="list-items">
          <ul class="list-unstyled mb-0" id="searchList"></ul>
        </div>
      </div>
    </div>
  </div>