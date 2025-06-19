@extends('partials.layouts.master')

@section('title', 'Page | Urbix Admin & Dashboards Template')
@section('title-sub', 'Pages')
@section('pagetitle', 'Blog Details')

@section('content')


      <div class="row">
        <div class="col-12 col-xl-8">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-5 mb-6">
                <div class="d-flex align-items-center gap-3">
                  <img src="assets/images/avatar/avatar-3.jpg" alt="Liam Carter" class="rounded-circle shadow-sm avatar-md">
                  <div>
                    <h6 class="mb-0">Liam Carter <i class="bi bi-patch-check-fill text-primary ms-1 fs-13" title="Verified"></i></h6>
                    <small class="text-muted">1 day ago · <span class="text-primary">Designer</span></small>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <a href="#!" class="badge bg-primary-subtle text-primary"><i class="bi bi-hand-thumbs-up me-1"></i>Like</a>
                  <a href="#!" class="badge bg-success-subtle text-success"><i class="bi bi-share me-1"></i>Share</a>
                  <div class="dropdown">
                    <button class="btn btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-three-dots-vertical fs-15"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#!"><i class="ri-error-warning-line me-2"></i>Report</a></li>
                      <li><a class="dropdown-item" href="#!"><i class="ri-edit-2-line me-2"></i>Edit</a></li>
                      <li><a class="dropdown-item" href="#!"><i class="ri-delete-bin-line me-2"></i>Delete</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <img src="assets/images/small/img-6.jpg" class="img-fluid w-100 h-320px object-fit-cover rounded-3" alt="Blog Image">
              <div class="mt-5">
                <div class="d-flex align-items-center justify-content-end gap-4 mb-4">
                  <div><i class="ri-time-line me-1"></i>Mar 2, 2024</div>
                  <div><i class="ri-eye-line me-1"></i>62 views</div>
                  <div><i class="bi bi-chat-dots me-1"></i>15 comments</div>
                </div>
                <h5 class="mb-3">The Enduring Power of Minimalist Design</h5>
                <p class="mb-2 text-muted">
                  Minimalism is more than a design trend—it's a philosophy rooted in simplicity, clarity, and purpose. By stripping away the non-essential, minimalist design allows key elements to shine, resulting in clean, intuitive, and highly functional experiences.
                </p>
                <p class="mb-4 text-muted">
                  Emerging in the early 20th century, minimalism was heavily influenced by the Bauhaus movement, which emphasized form following function. Over time, this philosophy expanded beyond art and architecture into nearly every creative field, including product design, branding, and digital interfaces.
                </p>
                <ul class="list-unstyled list-group list-borderless mb-5 ps-0">
                  <li class="list-group-item"><strong>1920s–1950s:</strong> Bauhaus introduces the idea of "less but better."</li>
                  <li class="list-group-item"><strong>1960s–1980s:</strong> Artists and architects explore minimalism as a bold visual statement.</li>
                  <li class="list-group-item"><strong>1990s–Today:</strong> Brands like Apple champion minimalism in technology and UI/UX design.</li>
                </ul>
                <h5 class="mb-3">Why Minimalism Matters Today</h5>
                <p class="mb-4 text-muted">
                  In an age of information overload, minimalism offers relief through clarity and focus. From websites to mobile apps, designers favor minimal interfaces for faster load times, better usability, and improved accessibility—particularly vital on smaller screens where every pixel counts.
                </p>
                <p class="mb-5 text-muted">
                  At its core, minimalism isn’t just an aesthetic—it’s a user-first mindset that prioritizes:
                </p>
                <ul class="list-unstyled list-group list-borderless mb-8 ps-0">
                  <li class="list-group-item"><strong>Clarity:</strong> Removing visual noise for better comprehension.</li>
                  <li class="list-group-item"><strong>Efficiency:</strong> Optimizing load performance and responsiveness.</li>
                  <li class="list-group-item"><strong>Focus:</strong> Highlighting only the most essential content and actions.</li>
                </ul>
                <div class="px-5 py-6 w-100 rounded-2 bg-light-subtle text-center position-relative">
                  <i class="bi bi-quote fs-55 position-absolute top-0 start-0 text-opacity-25 mt-n8 ms-1"></i>
                  <p class="mb-2 fw-semibold">
                    “When you give joy to other people, you get more joy in return. You should give a good thought to the happiness that you can give out.”
                  </p>
                  <i class="text-opacity-75 fs-12">— Norman Vincent Peale</i>
                </div>
                <h5 class="mt-5 mb-3">Conclusion</h5>
                <p class="mb-4 text-muted">
                  As our digital lives grow increasingly complex, minimalism remains a powerful guide. Whether designing a website, mobile app, or brand identity, embracing simplicity enables designers to create purposeful, elegant, and impactful experiences that resonate deeply with users.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h6 class="card-title mb-0 fw-semibold">Comments</h6>
            </div>
            <div class="card-body">
              <div class="px-5 mx-n5" data-simplebar style="height: 380px;">
                <div class="p-5 bg-light-subtle rounded-3 mb-4">
                  <div class="d-flex flex-wrap align-items-start gap-4">
                    <img src="assets/images/avatar/avatar-3.jpg" alt="Don Russell" class="rounded-circle avatar-lg shadow-sm">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between mt-2 mb-3">
                        <h5 class="mb-0">Don Russell</h5>
                        <small class="text-muted">Jan 21, 2024 • 11:25 PM</small>
                      </div>
                      <p class="mb-6">
                        Absolutely love the simplicity and elegance of this design!
                      </p>
                      <div class="d-flex gap-2">
                        <button type="button" class="btn btn-light-primary btn-sm rounded-2">Reply<i class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                        <button type="button" class="btn btn-light-danger btn-sm rounded-2">Like<i class="bi bi-heart ms-1"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-5 bg-light-subtle rounded-3 mb-4 ms-5 ms-md-16">
                  <div class="d-flex flex-wrap align-items-start gap-4">
                    <img src="assets/images/avatar/avatar-2.jpg" alt="Emily Carter" class="rounded-circle avatar-lg shadow-sm">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between mt-2 mb-3">
                        <h5 class="mb-0">Emily Carter</h5>
                        <small class="text-muted">Feb 02, 2024 • 9:10 AM</small>
                      </div>
                      <p class="mb-6">
                        Loved how clean and purposeful the layout is! Minimalism isn’t just a trend—it’s a necessity in today’s UI-heavy world.
                      </p>
                      <div class="d-flex gap-2">
                        <button type="button" class="btn btn-light-primary btn-sm rounded-2">Reply <i class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                        <button type="button" class="btn btn-light-danger btn-sm rounded-2">Like <i class="bi bi-heart ms-1"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-5 bg-light-subtle rounded-3 mb-4">
                  <div class="d-flex flex-wrap align-items-start gap-4">
                    <img src="assets/images/avatar/avatar-5.jpg" alt="Jacob Mendez" class="rounded-circle avatar-lg shadow-sm">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between mt-2 mb-3">
                        <h5 class="mb-0">Jacob Mendez</h5>
                        <small class="text-muted">Feb 14, 2024 • 3:42 PM</small>
                      </div>
                      <p class="mb-6">
                        This is exactly the kind of design that makes content feel digestible. Beautiful spacing and readability.
                      </p>
                      <div class="d-flex gap-2">
                        <button type="button" class="btn btn-light-primary btn-sm rounded-2">Reply <i class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                        <button type="button" class="btn btn-light-danger btn-sm rounded-2">Like <i class="bi bi-heart ms-1"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-5 bg-light-subtle rounded-3 mb-4">
                  <div class="d-flex flex-wrap align-items-start gap-4">
                    <img src="assets/images/avatar/avatar-6.jpg" alt="Sophia Lin" class="rounded-circle avatar-lg shadow-sm">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between mt-2 mb-3">
                        <h5 class="mb-0">Sophia Lin</h5>
                        <small class="text-muted">Mar 03, 2024 • 8:30 PM</small>
                      </div>
                      <p class="mb-6">
                        I always appreciate a design that knows when to stop. This keeps things neat without feeling empty. Great job!
                      </p>
                      <div class="d-flex gap-2">
                        <button type="button" class="btn btn-light-primary btn-sm rounded-2">Reply <i class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                        <button type="button" class="btn btn-light-danger btn-sm rounded-2">Like <i class="bi bi-heart ms-1"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-5 bg-light-subtle rounded-3 mb-4 ms-5 ms-md-20">
                  <div class="d-flex flex-wrap align-items-start gap-4">
                    <img src="assets/images/avatar/avatar-7.jpg" alt="Liam Foster" class="rounded-circle avatar-lg shadow-sm">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between mt-2 mb-3">
                        <h5 class="mb-0">Liam Foster</h5>
                        <small class="text-muted">Mar 15, 2024 • 4:12 PM</small>
                      </div>
                      <p class="mb-6">
                        Clear layout and good spacing—this design doesn’t distract from the content. Minimalism done right!
                      </p>
                      <div class="d-flex gap-2">
                        <button type="button" class="btn btn-light-primary btn-sm rounded-2">Reply <i class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                        <button type="button" class="btn btn-light-danger btn-sm rounded-2">Like <i class="bi bi-heart ms-1"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-5 bg-light-subtle rounded-3 mb-4">
                  <div class="d-flex flex-wrap align-items-start gap-4">
                    <img src="assets/images/avatar/avatar-8.jpg" alt="Nora Martinez" class="rounded-circle avatar-lg shadow-sm">
                    <div class="flex-grow-1">
                      <div class="d-flex justify-content-between mt-2 mb-3">
                        <h5 class="mb-0">Nora Martinez</h5>
                        <small class="text-muted">Mar 21, 2024 • 7:58 AM</small>
                      </div>
                      <p class="mb-6">
                        This kind of clean interface makes me want to scroll. Really good UX sense behind the scenes!
                      </p>
                      <div class="d-flex gap-2">
                        <button type="button" class="btn btn-light-primary btn-sm rounded-2">Reply <i class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                        <button type="button" class="btn btn-light-danger btn-sm rounded-2">Like <i class="bi bi-heart ms-1"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4">
          <div class="blog-details-list mb-6">
            <div class="card ">
              <div class="card-header">
                <h5 class="card-title">Recent Posts</h5>
              </div>
              <div class="card-body">
                <div class="border-bottom pb-4">
                  <div class="d-flex gap-4 justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                      <img src="assets/images/small/img-1.jpg" class="rounded object-fit-cover h-64px w-100" alt="Blog Image">
                    </div>
                    <div class="flex-grow-1">
                      <a href="#!" class="fw-semibold text-body text-decoration-none d-block">Mastering Typography in Web Design</a>
                      <div class="d-flex justify-content-between align-items-center mt-2">
                        <span class="text-muted d-block small">06 Nov 2025</span>
                        <div>
                          <button class="btn btn-light icon-btn-sm"><i class="bi bi-three-dots"></i></button>
                          <button class="btn btn-light icon-btn-sm"><i class="bi bi-bookmark"></i></button>
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
                      <a href="javascript:void(0)" class="fw-semibold text-body text-decoration-none d-block">Visual Hierarchy in UI Design</a>
                      <div class="d-flex justify-content-between align-items-center mt-2">
                        <span class="text-muted d-block small">13 Oct 2025</span>
                        <div>
                          <button class="btn btn-light icon-btn-sm"><i class="bi bi-three-dots"></i></button>
                          <button class="btn btn-light icon-btn-sm"><i class="bi bi-bookmark"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border-bottom py-4">
                  <div class="d-flex gap-4 justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                      <img src="assets/images/small/img-3.jpg" class="rounded object-fit-cover h-64px w-100" alt="Blog Image">
                    </div>
                    <div class="flex-grow-1">
                      <a href="javascript:void(0)" class="fw-semibold text-body text-decoration-none d-block">Capturing Stories Through Portraits</a>
                      <div class="d-flex justify-content-between align-items-center mt-2">
                        <span class="text-muted d-block small">18 Oct 2025</span>
                        <div>
                          <button class="btn btn-light icon-btn-sm"><i class="bi bi-three-dots"></i></button>
                          <button class="btn btn-light icon-btn-sm"><i class="bi bi-bookmark"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="py-4">
                  <div class="d-flex gap-4 justify-content-between align-items-center">
                    <div class="flex-shrink-0">
                      <img src="assets/images/small/img-4.jpg" class="rounded object-fit-cover h-64px w-100" alt="Blog Image">
                    </div>
                    <div class="flex-grow-1">
                      <a href="javascript:void(0)" class="fw-semibold text-body text-decoration-none d-block">Creating Immersive Travel Content</a>
                      <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="text-muted small">10 Sep 2025</span>
                        <div>
                          <button class="btn btn-light icon-btn-sm"><i class="bi bi-three-dots"></i></button>
                          <button class="btn btn-light icon-btn-sm"><i class="bi bi-bookmark"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-light-primary mx-auto d-block">Load More</button>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <label class="mb-5 px-5 py-3 bg-light-subtle rounded"> Subscribe to get updates about latest <span class="fw-bold"> News & Posts</span> </label>
                  <div class="position-relative">
                    <input class="form-control" id="composeCc" type="email" placeholder="Email Here">
                    <button type="button" class="btn btn-primary btn-sm position-absolute top-0 end-0 rounded-start-0 h-full px-3">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0 fw-semibold">Popular Post</h6>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-3">
                  <img src="assets/images/small/img-7.jpg" alt="Blog Post" class="img-fluid avatar-xxl object-fit-cover rounded-2">
                  <img src="assets/images/small/img-8.jpg" alt="Blog Post" class="img-fluid avatar-xxl object-fit-cover rounded-2">
                  <img src="assets/images/small/img-9.jpg" alt="Blog Post" class="img-fluid avatar-xxl object-fit-cover rounded-2">
                  <img src="assets/images/small/img-10.jpg" alt="Blog Post" class="img-fluid avatar-xxl object-fit-cover rounded-2">
                  <img src="assets/images/small/img-11.jpg" alt="Blog Post" class="img-fluid avatar-xxl object-fit-cover rounded-2">
                  <img src="assets/images/small/img-12.jpg" alt="Blog Post" class="img-fluid avatar-xxl object-fit-cover rounded-2">
                  <img src="assets/images/small/img-13.jpg" alt="Blog Post" class="img-fluid avatar-xxl object-fit-cover rounded-2">
                  <img src="assets/images/small/img-14.jpg" alt="Blog Post" class="img-fluid avatar-xxl object-fit-cover rounded-2">
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Tags</h5>
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                  <span class="badge bg-primary-subtle text-primary">#UX</span>
                  <span class="badge bg-primary-subtle text-primary">#Dev</span>
                  <span class="badge bg-primary-subtle text-primary">#Agile</span>
                  <span class="badge bg-primary-subtle text-primary">#Digital</span>
                  <span class="badge bg-primary-subtle text-primary">#Remote</span>
                  <span class="badge bg-primary-subtle text-primary">#SEO</span>
                  <span class="badge bg-primary-subtle text-primary">#Design</span>
                  <span class="badge bg-primary-subtle text-primary">#Marketing</span>
                  <span class="badge bg-primary-subtle text-primary">#Mobile</span>
                  <span class="badge bg-primary-subtle text-primary">#Branding</span>
                  <span class="badge bg-primary-subtle text-primary">#DevOps</span>
                  <span class="badge bg-primary-subtle text-primary">#AI</span>
                  <span class="badge bg-primary-subtle text-primary">#ML</span>
                  <span class="badge bg-primary-subtle text-primary">#NoCode</span>
                  <span class="badge bg-primary-subtle text-primary">#CMS</span>
                  <span class="badge bg-primary-subtle text-primary">#Web3</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h6 class="card-title mb-0 fw-semibold">Leave a Comment</h6>
            </div>
            <div class="card-body">
              <form action="#">
                <div class="row g-4">
                  <div class="col-12 col-xl-6">
                    <label for="firstName" class="form-label">Full Name<span class="text-danger ms-1">*</span></label>
                    <input type="text" placeholder="Enter First Name" class="form-control" id="firstName" required>
                  </div>
                  <div class="col-12 col-xl-6">
                    <label for="Username" class="form-label">Username<span class="text-danger ms-1">*</span></label>
                    <input type="text" placeholder="Enter Your Username" class="form-control" id="lastName" required>
                  </div>
                  <div class="col-12 col-xl-6">
                    <label for="inputExample26" class="form-label">Email<span class="text-danger ms-1">*</span></label>
                    <input type="email" class="form-control" id="inputExample26" placeholder="example@gmail.com">
                  </div>
                  <div class="col-12 col-xl-6">
                    <label for="Role" class="form-label">Role<span class="text-danger ms-1">*</span></label>
                    <input type="email" class="form-control" id="Role" placeholder="Role">
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="simple-date">Write Comment<span class="text-danger ms-1">*</span></label>
                    <textarea name="forComment" rows="5" class="form-control" placeholder="Type Comment Here"></textarea>
                  </div>
                  <div class="col-12 justify-content-end d-flex mt-6">
                    <button type="button" class="btn btn-primary">Post Comment</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div><!--End container-fluid-->
  </main><!--End app-wrapper-->

@endsection

@section('js')
<!-- App js -->
<script src="assets/js/app.js"></script>

<script src="assets/libs/simplebar/simplebar.min.js"></script>

@endsection