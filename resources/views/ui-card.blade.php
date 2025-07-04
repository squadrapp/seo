@extends('partials.layouts.master')

@section('title', 'UI Card | Urbix Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Card')

@section('content')

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <img src="assets/images/small/img-10.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Card title</h5>
                            <p class="card-text text-muted">
                                You have received a new message from John Doe regarding your recent inquiry.
                                He has provided additional details and is looking forward to your response.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="card-title mb-0 fw-semibold">New Message</h6>
                            <div class="dropdown">
                                <button class="btn btn-light btn-sm" type="button" data-bs-toggle="dropdown">
                                    <i class="ri-more-2-fill"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Clear Cache</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Upgrade Storage</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-4 align-items-start mb-4">
                                <div class="avatar">
                                    <img src="assets/images/small/img-5.jpg" alt="User Avatar" class="avatar-xl rounded object-fit-cover">
                                </div>
                                <div>
                                    <p class="fw-medium mb-1">John Doe</p>
                                    <p class="text-muted small mb-2">
                                        Regarding your recent inquiry, I wanted to follow up with additional details.
                                        Please let me know if you have any further.
                                    </p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-light-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer bg-light text-end">
                            <small class="text-muted"><i class="ri-time-line me-1"></i> 1 hour ago</small>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Information Card</h5>
                        </div>
                        <div class="card-body">
                            <img src="assets/images/small/img-5.jpg" alt="Card Image" class="w-100 h-144px object-fit-cover rounded mb-4">
                            <h5 class="card-title mb-3">Important Information</h5>
                            <p class="card-text text-muted">
                                Stay updated with the latest trends and news in the tech industry. Subscribe to our newsletter.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">Subscribe Now</a>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <small class="text-muted">Posted 3 days ago</small>
                            <a href="javascript:void(0)" class="link">Read More<i class="ri-arrow-right-double-line"></i></a>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Web Development Masterclass</h5>
                            <p class="text-muted">
                                Learn the latest web development technologies, including HTML, CSS, JavaScript, and React.
                                Master responsive design, modern frameworks, to build dynamic, high-performance websites.
                            </p>

                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <span>Rating: </span>
                                    <div class="rating">
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-fill text-warning"></i>
                                        <i class="ri-star-line text-muted"></i>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-light-primary">Enroll Now</a>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <small class="text-muted">Starts October 1, 2024</small>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Welcome to Our Service</h5>
                            <button class="btn btn-light btn-sm">Action</button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special Offer</h5>
                            <p class="card-text">
                                Enjoy a 50% discount on your next purchase. Use the code below at checkout.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">Redeem Offer</a>
                        </div>
                        <div class="card-footer">
                            Offer ends soon!
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Danger Alert</h5>
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="ri-alert-line"></i> Alert
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Critical System Update</h5>
                            <p class="card-text">
                                Immediate action is required. Please update your system to the latest version to avoid security risks.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">Update Now</a>
                        </div>
                        <div class="card-footer">
                            Last update: 1 hour ago
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Low Storage Warning</h5>
                            <div class="dropdown">
                                <button class="btn btn-light btn-sm" type="button" data-bs-toggle="dropdown">
                                    <i class="ri-more-2-fill"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Clear Cache</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Upgrade Storage</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Your system is running low on storage. Please clear unnecessary files to avoid performance issues.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">Fix Now</a>
                        </div>
                        <div class="card-footer text-muted">
                            Last checked 30 minutes ago
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <img src="assets/images/small/img-1.jpg" class="card-img-top" alt="Conference">
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Join us for the Annual Tech Conference 2024 to explore the latest trends and innovations in technology.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">Register Now</a>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                        </ul>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Success Card with Image</h5>
                        </div>
                        <img src="assets/images/small/img-2.jpg" alt="Success image">
                        <div class="card-body">
                            <h5 class="card-title">Achievement Unlocked</h5>
                            <p class="card-text">
                                Congratulations! You have successfully completed the course.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">View Certificate</a>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center p-4 rounded">
                            <div class="avatar-item d-flex mx-auto w-max border-primary">
                                <img class="img-fluid avatar-xl" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                            </div>
                            <h5 class="card-title fw-semibold mt-3">Jane Doe</h5>
                            <p class="card-text text-muted">Frontend Developer at <strong>XYZ Corp</strong></p>
                            <div class="skills mb-3">
                                <strong>✨ Skills:</strong>
                                <ul class="list-unstyled d-flex justify-content-center flex-wrap mt-2">
                                    <li class="badge bg-info me-1">HTML</li>
                                    <li class="badge bg-info me-1">CSS</li>
                                    <li class="badge bg-info me-1">JavaScript</li>
                                    <li class="badge bg-info me-1">React</li>
                                    <li class="badge bg-info me-1">Angular</li>
                                </ul>
                            </div>
                            <p class="card-text"><strong>📍 Location:</strong> San Francisco, CA</p>
                            <p class="card-text"><strong>💼 Experience:</strong> 5 years of crafting stunning web experiences.</p>
                            <p class="card-text"><strong>🎓 Education:</strong> B.S. in Computer Science from Stanford University</p>
                            <div class="d-flex justify-content-center mt-5">
                                <a href="#!" class="btn btn-light me-2">Connect</a>
                                <a href="#!" class="btn btn-light-primary">View Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <img src="assets/images/small/img-3.jpg" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title mb-3">New Smartphone</h5>
                            <p class="card-text text-muted">
                                The latest smartphone with cutting-edge technology, 5G support, and an ultra-clear display.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">Buy Now</a>
                        </div>
                        <div class="card-footer text-muted">
                            Only 5 left in stock!
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <img src="assets/images/small/img-4.jpg" class="card-img-top" alt="Product Image">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">New Smartphone</h5>
                            <div class="dropdown">
                                <button class="btn btn-light btn-sm" type="button" data-bs-toggle="dropdown">
                                    <i class="ri-more-2-fill"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Add to Wishlist</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Compare</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                The latest smartphone with 5G support, an ultra-clear display, and a powerful processor.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">Buy Now</a>
                        </div>
                        <div class="card-footer text-muted">
                            Only 3 left in stock!
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-4">
                    <div class="card card-h-100">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/small/img-5.jpg" class="d-block w-100" alt="Product Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/small/img-6.jpg" class="d-block w-100" alt="Product Image 2">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-3">Smartphone X</h5>
                            <p class="card-text text-muted">
                                Latest model, ultra-clear display, and 5G support.
                                Equipped with a powerful processor for seamless performance and an advanced camera system for stunning photos.
                                Enjoy an immersive experience with a high refresh rate screen and long-lasting battery life.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-primary">Buy Now</a>
                        </div>
                        <div class="card-footer">
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60% Sold</div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-4">
                    <div class="card card-h-100 blog-post-extended">
                        <img src="assets/images/small/img-14.jpg" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title mb-3">10 Tips to Improve Your Coding Skills</h5>
                            <p class="card-text text-muted">
                                Learn the essential tips for creating visually appealing, user-friendly, and highly functional websites.
                                Master the principles of modern web design, including responsive layouts, intuitive navigation, and accessibility best practices.
                            </p>

                        </div>
                        <div class="card-footer text-muted">
                            Published on: <strong>Sept 15, 2024</strong>
                            <span class="float-end">5 min read</span>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-4">
                    <div class="card card-h-100 top-rated-card">
                        <div class="card-body">
                            <img src="assets/images/small/img-7.jpg" class="card-img-top mb-3" alt="Product Image">
                            <h5 class="card-title fw-semibold">Sunset Sound</h5>
                            <p class="card-text">Experience the warmth of the sun with these high-quality noise-canceling headphones, designed to immerse you in vibrant sound.</p>
                            <div class="rating mb-3">
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-fill text-warning"></i>
                                <i class="ri-star-line text-muted"></i>
                                <span class="ms-2">(4.5/5)</span>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-primary w-100">Buy Now</a>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-4">
                    <div class="card card-h-100 service-card-badge">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="mb-3 position-relative">
                                <span class="badge bg-primary position-absolute top-0 end-0 mt-4 me-4">Top News</span>
                                <img src="assets/images/small/img-8.jpg" class="card-img-top mb-3" alt="Service Image">
                                <h5 class="card-title">Beautiful Bridges</h5>
                                <p class="card-text">Discover stunning bridges that connect people and places, showcasing the beauty of design and nature.</p>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-light-primary w-100 mt-auto">Read More</a>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-md-6 col-xl-4">
                    <div class="card text-bg-dark">
                        <img src="assets/images/small/img-4.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-reset">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-md-6 col-xl-4">
                    <div class="card card-h-100 text-bg-light">
                        <img src="assets/images/small/img-3.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-reset">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-md-6 col-xl-8">
                    <div class="row row-cols-1 row-cols-md-3 g-0">
                        <div class="col">
                            <div class="card border-0 rounded-end-0 shadow-sm">
                                <div class="card-body">
                                    <img src="assets/images/small/img-7.jpg" alt="Logo" class="mx-auto w-100 rounded">
                                    <h5 class="card-title mt-4 mb-3">Card Groups</h5>
                                    <p class="card-text text-muted">This is a wider card supporting text below to content.</p>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 rounded-0 shadow-sm">
                                <div class="card-body">
                                    <img src="assets/images/small/img-7.jpg" alt="Logo" class="mx-auto w-100 rounded">
                                    <h5 class="card-title mt-4 mb-3">Card Groups</h5>
                                    <p class="card-text text-muted">This is a wider card supporting text below to content.</p>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 rounded-start-0 shadow-sm">
                                <div class="card-body">
                                    <img src="assets/images/small/img-7.jpg" alt="Logo" class="mx-auto w-100 rounded">
                                    <h5 class="card-title mt-4 mb-3">Card Groups</h5>
                                    <p class="card-text text-muted">This is a wider card supporting text below to content.</p>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->

            </div><!--End row-->

            <h5 class="mb-3 text-decoration-underline">Card Colors</h5>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h6 class="card-title mb-0 text-white">Primary Card</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                You have received a new message from John Doe regarding your recent inquiry.
                            </p>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-md-6 col-xl-3">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h6 class="card-title mb-0 text-white">Secondary Card</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                You have received a new message from John Doe regarding your recent inquiry.
                            </p>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-md-6 col-xl-3">
                    <div class="card card-success">
                        <div class="card-header">
                            <h6 class="card-title mb-0 text-white">Success Card</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                You have received a new message from John Doe regarding your recent inquiry.
                            </p>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-md-6 col-xl-3">
                    <div class="card card-info">
                        <div class="card-header">
                            <h6 class="card-title mb-0 text-white">Info Card</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                You have received a new message from John Doe regarding your recent inquiry.
                            </p>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-md-6 col-xl-3">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h6 class="card-title mb-0 text-white">Warning Card</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                You have received a new message from John Doe regarding your recent inquiry.
                            </p>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-md-6 col-xl-3">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h6 class="card-title mb-0 text-white">Danger Card</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                You have received a new message from John Doe regarding your recent inquiry.
                            </p>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-md-6 col-xl-3">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h6 class="card-title mb-0 text-white">Dark Card</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                You have received a new message from John Doe regarding your recent inquiry.
                            </p>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-md-6 col-xl-3">
                    <div class="card card-light">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Light Card</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                You have received a new message from John Doe regarding your recent inquiry.
                            </p>
                        </div>
                    </div>
                </div><!--End col-->
            </div><!--End row-->

        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')


<script src="assets/js/app.js"></script>
@endsection