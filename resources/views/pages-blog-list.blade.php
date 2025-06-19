@extends('partials.layouts.master')

@section('title', 'Page | Urbix Admin & Dashboards Template')
@section('title-sub', 'Pages')
@section('pagetitle', 'Blog List')

@section('content')

            <div class="row">
                <div class="col-xl-8 col-xxl-9">
                    <div class="row gx-6 gy-3">
                        <div class="col-12">
                            <div class="main-blog-card position-relative rounded-3 overflow-hidden mb-4 shadow-sm">
                                <img src="assets/images/small/img-15.jpg" alt="Article Image" class="img-fluid w-100 object-fit-cover h-500px">
                                <div class="p-6 bg-overlay">
                                    <h5 class="mb-2 text-white">Design In The Age Of AI: How to adapt fairly.</h5>
                                    <p class="mb-4">In this article, you’ll learn how to adapt your visual tone and skills to a new era where AI is changing almost everything...</p>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar" class="rounded-circle" width="32" height="32">
                                            <small class="text-light">Anonymous AI No</small>
                                            <span class="text-light opacity-75">•</span>
                                            <small class="text-light">April 6, 2025</small>
                                        </div>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <span class="badge bg-secondary-subtle text-white bg-opacity-25">design</span>
                                            <span class="badge bg-secondary-subtle text-white bg-opacity-25">ai</span>
                                            <span class="badge bg-secondary-subtle text-white bg-opacity-25">creative</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div dir="ltr" class="swiper default-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-1.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-2.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-5.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-3.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-6.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/pages/post-4.jpg" alt="Blog Post" class="img-fluid object-fit-cover h-100 w-100 rounded" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/images/small/img-1.jpg" class="img-fluid rounded mb-5 w-100" alt="Blog image">
                                    <h5 class="fw-semibold mb-3 text-truncate">The Art of Design: Where Structure Meets Imagination</h5>
                                    <p class="text-muted mb-4 text-truncate-2">Dive into the world of form, and motion come together to create visual harmony that inspires innovation in modern design.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-3">
                                            <i class="ri-heart-line cursor-pointer"></i>
                                            <i class="ri-share-line cursor-pointer"></i>
                                            <i class="ri-bookmark-line cursor-pointer"></i>
                                        </div>
                                        <small>Mar 2024</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/images/small/img-2.jpg" class="img-fluid rounded mb-5 w-100" alt="Blog image">
                                    <h5 class="fw-semibold mb-3 text-truncate">How traveling made me a happier person.</h5>
                                    <p class="text-muted mb-4 text-truncate-2">Discover how exploring new places opened my mind, reduced stress, and brought more joy to everyday life.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-3">
                                            <i class="ri-heart-line cursor-pointer"></i>
                                            <i class="ri-share-line cursor-pointer"></i>
                                            <i class="ri-bookmark-line cursor-pointer"></i>
                                        </div>
                                        <small>Feb 2024</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/images/small/img-3.jpg" class="img-fluid rounded mb-5 w-100" alt="Blog image">
                                    <h5 class="fw-semibold mb-3 text-truncate">Workspace That Sparks Creativity</h5>
                                    <p class="text-muted mb-4 text-truncate-2">A clean, organized desk can boost focus and productivity your ideas deserve the perfect environment to grow.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-3">
                                            <i class="ri-heart-line cursor-pointer"></i>
                                            <i class="ri-share-line cursor-pointer"></i>
                                            <i class="ri-bookmark-line cursor-pointer"></i>
                                        </div>
                                        <small>Apr 2024</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3">
                    <div class="blog-details-list mb-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="position-relative">
                                    <div class="form-icon">
                                        <input type="email" class="form-control form-control-icon" id="inputExample26" placeholder="Search for ...">
                                        <i class="bi bi-search"></i>
                                    </div>
                                </div>
                                <h6 class="mb-4 mt-6">Recent Posts</h6>
                                <div class="border-bottom py-4">
                                    <div class="d-flex gap-4 justify-content-between align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/small/img-6.jpg" class="rounded object-fit-cover h-64px w-100" alt="Blog Image">
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="javascript:void(0)" class="fw-semibold text-body text-decoration-none d-block">Collaboration Drives Success</a>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <span class="text-muted d-block small">06 Nov 2025</span>
                                                <div>
                                                    <button type="button" class="btn btn-light icon-btn-sm"><i class="bi bi-three-dots"></i></button>
                                                    <button type="button" class="btn btn-light icon-btn-sm"><i class="bi bi-bookmark"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom py-4">
                                    <div class="d-flex gap-4 justify-content-between align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/small/img-2.jpg" class="rounded object-fit-cover h-64px w-100" alt="Blog Image">
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="javascript:void(0)" class="fw-semibold text-body text-decoration-none d-block">Design Inspired by Nature</a>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <span class="text-muted d-block small">13 Oct 2025</span>
                                                <div>
                                                    <button type="button" class="btn btn-light icon-btn-sm"><i class="bi bi-three-dots"></i></button>
                                                    <button type="button" class="btn btn-light icon-btn-sm"><i class="bi bi-bookmark"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom py-4">
                                    <div class="d-flex gap-4 justify-content-between align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/small/img-4.jpg" class="rounded object-fit-cover h-64px w-100" alt="Blog Image">
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="javascript:void(0)" class="fw-semibold text-body text-decoration-none d-block">Capturing Cities with Precision</a>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <span class="text-muted d-block small">22 Oct 2025</span>
                                                <div>
                                                    <button type="button" class="btn btn-light icon-btn-sm"><i class="bi bi-three-dots"></i></button>
                                                    <button type="button" class="btn btn-light icon-btn-sm"><i class="bi bi-bookmark"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="mb-4 mt-6">Category</h6>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0 fw-medium">All</p>
                                    <span class="text-muted fs-11">(80)</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0 fw-medium">Lifestyle</p>
                                    <span class="text-muted fs-11">(45)</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0 fw-medium">Travel</p> <!-- Corrected "Ture" to "Travel" -->
                                    <span class="text-muted fs-11">(20)</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0 fw-medium">Design</p>
                                    <span class="text-muted fs-11">(15)</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0 fw-medium">Technology</p>
                                    <span class="text-muted fs-11">(30)</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0 fw-medium">Food</p>
                                    <span class="text-muted fs-11">(18)</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0 fw-medium">Wellness</p>
                                    <span class="text-muted fs-11">(12)</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0 fw-medium">Fashion</p>
                                    <span class="text-muted fs-11">(22)</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0 fw-medium">Productivity</p>
                                    <span class="text-muted fs-11">(9)</span>
                                </div>
                                <h6 class="mb-4 mt-6">Popular Post</h6>
                                <div class="d-flex flex-wrap gap-4">
                                    <img src="assets/images/small/img-7.jpg" alt="Blog Post" class="avatar-3xl object-fit-cover rounded-2">
                                    <img src="assets/images/small/img-8.jpg" alt="Blog Post" class="avatar-3xl object-fit-cover rounded-2">
                                    <img src="assets/images/small/img-9.jpg" alt="Blog Post" class="avatar-3xl object-fit-cover rounded-2">
                                    <img src="assets/images/small/img-10.jpg" alt="Blog Post" class="avatar-3xl object-fit-cover rounded-2">
                                    <img src="assets/images/small/img-11.jpg" alt="Blog Post" class="avatar-3xl object-fit-cover rounded-2">
                                    <img src="assets/images/small/img-12.jpg" alt="Blog Post" class="avatar-3xl object-fit-cover rounded-2">
                                </div>
                                <h6 class="mb-4 mt-6">Tags</h6>
                                <div class="d-flex flex-wrap gap-2 widget-tag">
                                    <div><a href="#!" class="badge bg-primary-subtle text-primary">Design</a></div>
                                    <div><a href="#!" class="badge bg-primary-subtle text-primary">Development</a></div>
                                    <div><a href="#!" class="badge bg-primary-subtle text-primary">Business</a></div>
                                    <div><a href="#!" class="badge bg-primary-subtle text-primary">Project</a></div>
                                    <div><a href="#!" class="badge bg-primary-subtle text-primary">Travel</a></div>
                                    <div><a href="#!" class="badge bg-primary-subtle text-primary">Lifestyle</a></div>
                                    <div><a href="#!" class="badge bg-primary-subtle text-primary">Photography</a></div>
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

<script src="assets/js/pages/blog-list.init.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection