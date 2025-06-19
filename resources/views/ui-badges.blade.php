@extends('partials.layouts.master')

@section('title', 'UI Badges | Urbix Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Avatars')
@section('css')
  <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection
@section('content')

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Default Badges</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="default-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-default-badges-tab" data-bs-toggle="pill" data-bs-target="#html-default-badges" type="button" role="tab" aria-controls="html-default-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-default-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-default-badges" type="button" role="tab" aria-controls="preview-default-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="default-badgesContent">
                            <div class="tab-pane fade show active" id="html-default-badges" role="tabpanel" aria-labelledby="html-default-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <p class="text-muted mb-6">
                                        Bootstrap badges are created using the <code>.badge</code> class and can be customized with color classes like
                                        <code>.bg-primary</code>, <code>.bg-secondary</code>, and more to match your design requirements.
                                    </p>

                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary">Primary</span>
                                        <span class="badge bg-secondary">Secondary</span>
                                        <span class="badge bg-success">Success</span>
                                        <span class="badge bg-info">Info</span>
                                        <span class="badge bg-warning">Warning</span>
                                        <span class="badge bg-danger">Danger</span>
                                        <span class="badge bg-dark">Dark</span>
                                        <span class="badge bg-light text-body">Light</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-default-badges" role="tabpanel" aria-labelledby="preview-default-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <pre class="language-html"><code>&lt;span class=&quot;badge bg-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge bg-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge bg-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge bg-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge bg-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge bg-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge bg-dark&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge bg-light text-body&quot;&gt;Light&lt;/span&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Pill-Shaped Badge</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="badge-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-badge-tab" data-bs-toggle="pill" data-bs-target="#html-badge" type="button" role="tab" aria-controls="html-badge" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-badge-tab" data-bs-toggle="pill" data-bs-target="#preview-badge" type="button" role="tab" aria-controls="preview-badge" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="badge-tabs-content">
                            <div class="tab-pane fade show active" id="html-badge" role="tabpanel" aria-labelledby="html-badge-tab" tabindex="0">
                                <div class="card-body">
                                    <p class="text-muted mb-6">
                                        To create a <strong>badge</strong> with a primary background and a rounded pill shape, use the following Bootstrap classes: <code>.badge</code>, <code>.bg-primary</code>, and <code>.rounded-pill</code>.
                                    </p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary rounded-pill">Primary</span>
                                        <span class="badge bg-secondary rounded-pill">Secondary</span>
                                        <span class="badge bg-success rounded-pill">Success</span>
                                        <span class="badge bg-info rounded-pill">Info</span>
                                        <span class="badge bg-warning rounded-pill">Warning</span>
                                        <span class="badge bg-danger rounded-pill">Danger</span>
                                        <span class="badge bg-dark rounded-pill">Dark</span>
                                        <span class="badge bg-light rounded-pill text-body">Light</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-badge" role="tabpanel" aria-labelledby="preview-badge-tab" tabindex="0">
                                <div class="card-body">
                                    <pre class="language-html"><code>&lt;span class="badge bg-primary rounded-pill"&gt;Primary&lt;/span&gt;
&lt;span class="badge bg-secondary rounded-pill"&gt;Secondary&lt;/span&gt;
&lt;span class="badge bg-success rounded-pill"&gt;Success&lt;/span&gt;
&lt;span class="badge bg-info rounded-pill"&gt;Info&lt;/span&gt;
&lt;span class="badge bg-warning rounded-pill"&gt;Warning&lt;/span&gt;
&lt;span class="badge bg-danger rounded-pill"&gt;Danger&lt;/span&gt;
&lt;span class="badge bg-dark rounded-pill"&gt;Dark&lt;/span&gt;
&lt;span class="badge bg-light rounded-pill text-body"&gt;Light&lt;/span&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Light Badges</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="light-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-light-badges-tab" data-bs-toggle="pill" data-bs-target="#html-light-badges" type="button" role="tab" aria-controls="html-light-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-light-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-light-badges" type="button" role="tab" aria-controls="preview-light-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="light-badgesContent">
                            <div class="tab-pane fade show active" id="html-light-badges" role="tabpanel" aria-labelledby="html-light-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <p class="text-muted mb-6">
                                        To create <strong>Light badges</strong> in Bootstrap, utilize the <code>.badge</code> class. You can enhance the appearance of your badges by applying color classes such as <code>.bg-primary-subtle</code>, <code>.badge-secondary-subtle</code> etc.
                                    </p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary-subtle text-primary">Primary</span>
                                        <span class="badge bg-secondary-subtle text-secondary">Secondary</span>
                                        <span class="badge bg-success-subtle text-success">Success</span>
                                        <span class="badge bg-info-subtle text-info">Info</span>
                                        <span class="badge bg-warning-subtle text-warning">Warning</span>
                                        <span class="badge bg-danger-subtle text-danger">Danger</span>
                                        <span class="badge bg-dark-subtle text-body">Dark</span>
                                        <span class="badge bg-light-subtle text-body text-body">Light</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-light-badges" role="tabpanel" aria-labelledby="preview-light-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <pre class="language-html"><code>&lt;span class=&quot;badge bg-primary-subtle text-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge bg-secondary-subtle text-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge bg-success-subtle text-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge bg-info-subtle text-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge bg-warning-subtle text-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge bg-danger-subtle text-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge bg-dark-subtle text-body&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge bg-light-subtle text-body text-body&quot;&gt;Light&lt;/span&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Pill-Shaped Light Badges</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="pill-light-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-pill-light-badges-tab" data-bs-toggle="pill" data-bs-target="#html-pill-light-badges" type="button" role="tab" aria-controls="html-pill-light-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-pill-light-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-pill-light-badges" type="button" role="tab" aria-controls="preview-pill-light-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pill-light-badgesContent">
                            <div class="tab-pane fade show active" id="html-pill-light-badges" role="tabpanel" aria-labelledby="html-pill-light-badges-tab" tabindex="0">
                                <hr class="m-0">
                                <div class="card-body">
                                    <p class="text-muted mb-6">
                                        To create a stylish <strong>badge</strong> with a primary color background and a rounded pill shape, you can utilize the <code>.badge</code>, <code>.bg-primary-subtle</code>, and <code>.rounded-pill</code> classes.
                                    </p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge rounded-pill bg-primary-subtle text-primary">Primary</span>
                                        <span class="badge rounded-pill bg-secondary-subtle text-secondary">Secondary</span>
                                        <span class="badge rounded-pill bg-success-subtle text-success">Success</span>
                                        <span class="badge rounded-pill bg-info-subtle text-info">Info</span>
                                        <span class="badge rounded-pill bg-warning-subtle text-warning">Warning</span>
                                        <span class="badge rounded-pill bg-danger-subtle text-danger">Danger</span>
                                        <span class="badge rounded-pill bg-dark-subtle text-body">Dark</span>
                                        <span class="badge rounded-pill bg-light-subtle text-body">Light</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-pill-light-badges" role="tabpanel" aria-labelledby="preview-pill-light-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <pre class="language-html"><code>&lt;span class=&quot;badge rounded-pill bg-primary-subtle text-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-secondary-subtle text-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-success-subtle text-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-info-subtle text-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-warning-subtle text-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-danger-subtle text-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-dark-subtle text-body&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-light-subtle text-body&quot;&gt;Light&lt;/span&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Outline Badges</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="outline-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-outline-badges-tab" data-bs-toggle="pill" data-bs-target="#html-outline-badges" type="button" role="tab" aria-controls="html-outline-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-outline-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-outline-badges" type="button" role="tab" aria-controls="preview-outline-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="outline-badgesContent">
                            <div class="tab-pane fade show active" id="html-outline-badges" role="tabpanel" aria-labelledby="html-outline-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <p class="text-muted mb-6">Use <strong>default badges</strong> in Bootstrap with the <code>.badge</code> class. Add color classes like <code>.border</code>, <code>.border-*</code>, etc., to style the badge.</p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge border border-primary text-primary">Primary</span>
                                        <span class="badge border border-secondary text-secondary">Secondary</span>
                                        <span class="badge border border-success text-success">Success</span>
                                        <span class="badge border border-info text-info">Info</span>
                                        <span class="badge border border-warning text-warning">Warning</span>
                                        <span class="badge border border-danger text-danger">Danger</span>
                                        <span class="badge border border-dark text-body">Dark</span>
                                        <span class="badge border border-light text-body">Light</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-outline-badges" role="tabpanel" aria-labelledby="preview-outline-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <pre class="language-html"><code>&lt;span class=&quot;badge border border-primary text-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge border border-secondary text-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge border border-success text-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge border border-info text-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge border border-warning text-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge border border-danger text-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge border border-dark text-body&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge border border-light text-body&quot;&gt;Light&lt;/span&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Pill-Shaped Outline Badges</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="pill-outline-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-pill-outline-badges-tab" data-bs-toggle="pill" data-bs-target="#html-pill-outline-badges" type="button" role="tab" aria-controls="html-pill-outline-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-pill-outline-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-pill-outline-badges" type="button" role="tab" aria-controls="preview-pill-outline-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pill-outline-badgesContent">
                            <div class="tab-pane fade show active" id="html-pill-outline-badges" role="tabpanel" aria-labelledby="html-pill-outline-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <p class="text-muted mb-6">Create a <strong>badge</strong> with a primary background and rounded pill shape using <code>.badge</code>, <code>.border</code>, <code>.border-*</code> and <code>.rounded-pill</code> classes.</p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge rounded-pill border border-primary text-primary">Primary</span>
                                        <span class="badge rounded-pill border border-secondary text-secondary">Secondary</span>
                                        <span class="badge rounded-pill border border-success text-success">Success</span>
                                        <span class="badge rounded-pill border border-info text-info">Info</span>
                                        <span class="badge rounded-pill border border-warning text-warning">Warning</span>
                                        <span class="badge rounded-pill border border-danger text-danger">Danger</span>
                                        <span class="badge rounded-pill border border-dark text-body">Dark</span>
                                        <span class="badge rounded-pill border border-light text-body">Light</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-pill-outline-badges" role="tabpanel" aria-labelledby="preview-pill-outline-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <pre class="language-html"><code>&lt;span class=&quot;badge rounded-pill border border-primary text-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-secondary text-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-success text-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-info text-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-warning text-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-danger text-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-dark text-body&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-light text-body&quot;&gt;Light&lt;/span&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->


                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Button Badges</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="button-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-button-badges-tab" data-bs-toggle="pill" data-bs-target="#html-button-badges" type="button" role="tab" aria-controls="html-button-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-button-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-button-badges" type="button" role="tab" aria-controls="preview-button-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-6">Add a badge to a Bootstrap button by placing a <code>&lt;span class="badge"&gt;</code> inside the button. This is great for showing counts or notifications on the button.</p>
                            <div class="tab-content" id="button-badgesContent">
                                <div class="tab-pane fade show active" id="html-button-badges" role="tabpanel" aria-labelledby="html-button-badges-tab" tabindex="0">
                                    <div class="d-flex flex-wrap gap-4">
                                        <button type="button" class="btn btn-primary">
                                            Notifications <span class="badge bg-warning ms-1">4</span>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            Messages <span class="badge bg-success rounded-pill ms-1">2</span>
                                        </button>
                                        <button type="button" class="btn btn-success position-relative">
                                            Notifications <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">7
                                                <span class="visually-hidden">New</span></span>
                                        </button>
                                        <button type="button" class="btn btn-info position-relative">
                                            Notifications <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">New
                                                <span class="visually-hidden">New</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="preview-button-badges" role="tabpanel" aria-labelledby="preview-button-badges-tab" tabindex="0">
                                    <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
    Notifications &lt;span class=&quot;badge bg-success ms-1&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;
    Messages &lt;span class=&quot;badge bg-danger ms-1&quot;&gt;2&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;
    Draft &lt;span class=&quot;badge bg-success ms-1&quot;&gt;2&lt;/span&gt;
&lt;/button&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Outline Button Badges</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="outline-button-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-outline-button-badges-tab" data-bs-toggle="pill" data-bs-target="#html-outline-button-badges" type="button" role="tab" aria-controls="html-outline-button-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-outline-button-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-outline-button-badges" type="button" role="tab" aria-controls="preview-outline-button-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-6">Add a badge to a Bootstrap button by placing a <code>&lt;span class="badge"&gt;</code> inside the button. This is great for showing counts or notifications on the button.</p>
                            <div class="tab-content" id="outline-button-badgesContent">
                                <div class="tab-pane fade show active" id="html-outline-button-badges" role="tabpanel" aria-labelledby="html-outline-button-badges-tab" tabindex="0">
                                    <div class="d-flex flex-wrap gap-4">
                                        <button type="button" class="btn btn-outline-primary">
                                            Notifications <span class="badge bg-primary ms-1">4</span>
                                        </button>
                                        <button type="button" class="btn btn-outline-danger">
                                            Notifications <span class="badge bg-danger rounded-pill ms-1">2</span>
                                        </button>
                                        <button type="button" class="btn btn-outline-success position-relative">
                                            Notifications <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">7
                                                <span class="visually-hidden">New</span></span>
                                        </button>
                                        <button type="button" class="btn btn-outline-info position-relative">
                                            Notifications <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info">New
                                                <span class="visually-hidden">New</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="preview-outline-button-badges" role="tabpanel" aria-labelledby="preview-outline-button-badges-tab" tabindex="0">
                                    <pre class="language-html">
                                        <code>&lt;button type="button" class="btn btn-outline-primary"&gt;
    Notifications &lt;span class="badge bg-primary ms-1"&gt;4&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-danger"&gt;
    Notifications &lt;span class="badge bg-danger rounded-pill ms-1"&gt;2&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-success position-relative"&gt;
    Notifications &lt;span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success"&gt;7
    &lt;span class="visually-hidden"&gt;New&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info position-relative"&gt;
    Notifications &lt;span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info"&gt;New
    &lt;span class="visually-hidden"&gt;New&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;</code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Button Position Badges</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="button-position-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-button-position-badges-tab" data-bs-toggle="pill" data-bs-target="#html-button-position-badges" type="button" role="tab" aria-controls="html-button-position-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-button-position-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-button-position-badges" type="button" role="tab" aria-controls="preview-button-position-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-6">Position badges on Bootstrap buttons by placing a <code>&lt;span class="badge position-absolute"&gt;</code> inside the button. Use utility classes like <code>.top-0</code> and <code>.end-0</code> to adjust the badge position.</p>
                            <div class="tab-content" id="button-position-badgesContent">
                                <div class="tab-pane fade show active" id="html-button-position-badges" role="tabpanel" aria-labelledby="html-button-position-badges-tab" tabindex="0">
                                    <div class="d-flex flex-wrap gap-4">
                                        <button type="button" class="btn btn-primary position-relative">
                                            Mails <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">+9
                                                <span class="visually-hidden">unread messages</span></span>
                                        </button>
                                        <button type="button" class="btn btn-light position-relative">
                                            Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light-subtle rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                        </button>
                                        <button type="button" class="btn btn-primary position-relative p-0 icon-btn rounded">
                                            <i class="ri-mail-fill"></i>
                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-light-subtle rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                        </button>
                                        <button type="button" class="btn btn-light position-relative p-0 icon-btn rounded-circle">
                                            <i class="ri-notification-4-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-light position-relative p-0 icon-btn rounded-circle">
                                            <i class="ri-menu-line"></i>
                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-light-subtle rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="preview-button-position-badges" role="tabpanel" aria-labelledby="preview-button-position-badges-tab" tabindex="0">
                                    <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary position-relative&quot;&gt;
    Mails &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success&quot;&gt;+9 &lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-light position-relative&quot;&gt;
    Alerts &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge border border-light-subtle rounded-circle bg-danger p-1&quot;&gt;&lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary position-relative p-0 icon-btn rounded&quot;&gt;
    &lt;i class=&quot;ri-mail-fill&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge border border-light-subtle rounded-circle bg-danger p-1&quot;&gt;&lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-light position-relative p-0 icon-btn rounded-circle&quot;&gt;
    &lt;i class=&quot;ri-notification-4-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-light position-relative p-0 icon-btn rounded-circle&quot;&gt;
    &lt;i class=&quot;ri-menu-line&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge border border-light-subtle rounded-circle bg-success p-1&quot;&gt;&lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Badge with Icons</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="icon-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-icon-badges-tab" data-bs-toggle="pill" data-bs-target="#html-icon-badges" type="button" role="tab" aria-controls="html-icon-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-icon-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-icon-badges" type="button" role="tab" aria-controls="preview-icon-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="icon-badgesContent">
                            <div class="tab-pane fade show active" id="html-icon-badges" role="tabpanel" aria-labelledby="html-icon-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <p class="text-muted mb-6">
                                        Icon badges can be used to represent actions, statuses, or notifications visually. Combine Bootstrap's
                                        <code>.badge</code> class with an <code>&lt;i&gt;</code> icon element for a modern UI.
                                    </p>

                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary"><i class="ri-notification-3-line"></i> Alerts</span>
                                        <span class="badge bg-secondary-subtle text-secondary"><i class="ri-mail-line"></i> Messages</span>
                                        <span class="badge bg-outline-success text-success border border-success"><i class="ri-check-line"></i> Approved</span>
                                        <span class="badge bg-info rounded-pill"><i class="ri-information-line"></i> Info</span>
                                        <span class="badge bg-warning-subtle text-warning rounded-pill"><i class="ri-error-warning-line"></i> Warnings</span>
                                        <span class="badge bg-outline-danger-subtle text-danger border border-danger rounded-pill"><i class="ri-close-line"></i> Errors</span>
                                        <span class="badge bg-light text-body position-relative"><i class="ri-settings-4-line"></i>
                                            Settings
                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-light-subtle rounded-circle bg-primary p-1"><span class="visually-hidden">unread messages</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-icon-badges" role="tabpanel" aria-labelledby="preview-icon-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <pre class="language-html"><code>&lt;span class=&quot;badge bg-primary&quot;&gt;&lt;i class=&quot;ri-notification-3-line&quot;&gt;&lt;/i&gt; Alerts&lt;/span&gt;
&lt;span class=&quot;badge bg-secondary-subtle text-secondary&quot;&gt;&lt;i class=&quot;ri-mail-line&quot;&gt;&lt;/i&gt; Messages&lt;/span&gt;
&lt;span class=&quot;badge bg-outline-success text-success border border-success&quot;&gt;&lt;i class=&quot;ri-check-line&quot;&gt;&lt;/i&gt; Approved&lt;/span&gt;
&lt;span class=&quot;badge bg-info rounded-pill&quot;&gt;&lt;i class=&quot;ri-information-line&quot;&gt;&lt;/i&gt; Info&lt;/span&gt;
&lt;span class=&quot;badge bg-warning-subtle text-warning rounded-pill&quot;&gt;&lt;i class=&quot;ri-error-warning-line&quot;&gt;&lt;/i&gt; Warnings&lt;/span&gt;
&lt;span class=&quot;badge bg-outline-danger-subtle text-danger border border-danger rounded-pill&quot;&gt;&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt; Errors&lt;/span&gt;
&lt;span class=&quot;badge bg-light text-body position-relative&quot;&gt;
    &lt;i class=&quot;ri-settings-4-line&quot;&gt;&lt;/i&gt; Settings
    &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge border border-light-subtle rounded-circle bg-primary p-1&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;
    &lt;/span&gt;
&lt;/span&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->


                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Badges with Heading</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="heading-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-heading-badges-tab" data-bs-toggle="pill" data-bs-target="#html-heading-badges" type="button" role="tab" aria-controls="html-heading-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-heading-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-heading-badges" type="button" role="tab" aria-controls="preview-heading-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-6">Add badges to headings by placing a <code>&lt;span class="badge"&gt;</code> next to the heading text. This is useful for highlighting important information or counts.</p>
                            <div class="tab-content" id="heading-badgesContent">
                                <div class="tab-pane fade show active" id="html-heading-badges" role="tabpanel" aria-labelledby="html-heading-badges-tab" tabindex="0">
                                    <div>
                                        <h1>Example heading <span class="badge bg-primary">New</span></h1>
                                        <h2>Example heading <span class="badge bg-primary">New</span></h2>
                                        <h3>Example heading <span class="badge bg-primary">New</span></h3>
                                        <h4>Example heading <span class="badge bg-primary">New</span></h4>
                                        <h5>Example heading <span class="badge bg-primary">New</span></h5>
                                        <h6 class="mb-0">Example heading <span class="badge bg-primary">New</span></h6>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="preview-heading-badges" role="tabpanel" aria-labelledby="preview-heading-badges-tab" tabindex="0">
                                    <pre class="language-html"><code>&lt;h1&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
&lt;h2&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
&lt;h3&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
&lt;h4&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
&lt;h5&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
&lt;h6 class=&quot;mb-0&quot;&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->
                <div class="col-lg-6">
                    <div class="card card-h-100">
                        <div class="card-header d-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Square Badges</h5>
                            <ul class="nav nav-pills nav-preview nav-primary mb-0" id="square-badges" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="html-square-badges-tab" data-bs-toggle="pill" data-bs-target="#html-square-badges" type="button" role="tab" aria-controls="html-square-badges" aria-selected="true">HTML</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-square-badges-tab" data-bs-toggle="pill" data-bs-target="#preview-square-badges" type="button" role="tab" aria-controls="preview-square-badges" aria-selected="false">Preview</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="square-badgesContent">
                            <div class="tab-pane fade show active" id="html-square-badges" role="tabpanel" aria-labelledby="html-square-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge border border-primary bg-primary">5</span>
                                        <span class="badge border border-secondary bg-secondary">5</span>
                                        <span class="badge border border-success bg-success">5</span>
                                        <span class="badge border border-info bg-info">5</span>
                                        <span class="badge border border-warning bg-warning">5</span>
                                        <span class="badge border border-danger bg-danger">5</span>
                                        <span class="badge border border-dark bg-dark">5</span>
                                        <span class="badge border border-light bg-light text-light-emphasis">5</span>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="card-body">
                                    <p class="text-muted mb-6">Theme color Archive just adding class<code> .badge </code></p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge rounded-pill text-primary bg-primary-subtle">5</span>
                                        <span class="badge rounded-pill text-secondary bg-secondary-subtle">5</span>
                                        <span class="badge rounded-pill text-success bg-success-subtle">5</span>
                                        <span class="badge rounded-pill text-info bg-info-subtle">5</span>
                                        <span class="badge rounded-pill text-warning bg-warning-subtle">5</span>
                                        <span class="badge rounded-pill text-danger bg-danger-subtle">5</span>
                                        <span class="badge rounded-pill text-dark bg-dark-subtle">5</span>
                                        <span class="badge rounded-pill text-dark bg-light-subtle">5</span>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="card-body">
                                    <p class="text-muted mb-6">Use theme colors in badges by simply adding the<code> .badge </code></p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge border text-primary border-primary-subtle"><i class="ri-star-line"></i></span>
                                        <span class="badge border text-secondary border-secondary-subtle"><i class="ri-mail-line"></i></span>
                                        <span class="badge border text-success border-success-subtle"><i class="ri-check-line"></i></span>
                                        <span class="badge border text-info border-info-subtle"><i class="ri-information-line"></i></span>
                                        <span class="badge border text-warning border-warning-subtle"><i class="ri-error-warning-line"></i></span>
                                        <span class="badge border text-danger border-danger-subtle"><i class="ri-close-line"></i></span>
                                        <span class="badge border text-dark border-dark-subtle"><i class="ri-lock-line"></i></span>
                                        <span class="badge border text-dark border-light-subtle"><i class="ri-settings-4-line"></i></span>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="preview-square-badges" role="tabpanel" aria-labelledby="preview-square-badges-tab" tabindex="0">
                                <div class="card-body">
                                    <pre class="language-html"><code>&lt;span class=&quot;badge border border-primary bg-primary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-secondary bg-secondary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-success bg-success&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-info bg-info&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-warning bg-warning&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-danger bg-danger&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-dark bg-dark&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-light bg-light text-light-emphasis&quot;&gt;5&lt;/span&gt;</code>
<code>&lt;span class=&quot;badge rounded-pill text-primary bg-primary-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill text-secondary bg-secondary-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill text-success bg-success-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill text-info bg-info-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill text-warning bg-warning-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill text-danger bg-danger-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill text-dark bg-dark-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill text-dark bg-light-subtle&quot;&gt;5&lt;/span&gt;</code>
<code>&lt;span class=&quot;badge border text-primary border-primary-subtle&quot;&gt;&lt;i class=&quot;ri-star-line&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;span class=&quot;badge border text-secondary border-secondary-subtle&quot;&gt;&lt;i class=&quot;ri-mail-line&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;span class=&quot;badge border text-success border-success-subtle&quot;&gt;&lt;i class=&quot;ri-check-line&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;span class=&quot;badge border text-info border-info-subtle&quot;&gt;&lt;i class=&quot;ri-information-line&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;span class=&quot;badge border text-warning border-warning-subtle&quot;&gt;&lt;i class=&quot;ri-error-warning-line&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;span class=&quot;badge border text-danger border-danger-subtle&quot;&gt;&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;span class=&quot;badge border text-dark border-dark-subtle&quot;&gt;&lt;i class=&quot;ri-lock-line&quot;&gt;&lt;/i&gt;&lt;/span&gt;
&lt;span class=&quot;badge border text-dark border-light-subtle&quot;&gt;&lt;i class=&quot;ri-settings-4-line&quot;&gt;&lt;/i&gt;&lt;/span&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End col-->

            </div><!--End row-->
        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

<script src="assets/libs/prismjs/prism.js"></script>
<!--App js-->
<script src="assets/js/app.js"></script>
@endsection