@extends('partials.layouts.master')

@section('title', 'UI Advanced | Urbix Admin & Dashboards Template')
@section('title-sub', 'Forms')
@section('pagetitle', 'Input Spin')

@section('content')


            <div class="row">
                <div class="col-12">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Default Touchspin</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>

                            <div class="row g-5">
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="default-touchspin">Default Touchspin</label>
                                    <div class="qty-input">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="default-touchspin" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="primary-touchspin-01">Primary Touchspin</label>
                                    <div class="qty-input qty-input-primary">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="primary-touchspin-01" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="secondary-touchspin">Secondary Touchspin</label>
                                    <div class="qty-input qty-input-secondary">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="secondary-touchspin" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="success-touchspin">Success Touchspin</label>
                                    <div class="qty-input qty-input-success">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="success-touchspin" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="info-touchspin">Info Touchspin</label>
                                    <div class="qty-input qty-input-info">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="info-touchspin" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="warning-touchspin">Warning Touchspin</label>
                                    <div class="qty-input qty-input-warning">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="warning-touchspin" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="danger-touchspin">Danger Touchspin</label>
                                    <div class="qty-input qty-input-danger">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="danger-touchspin" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="dark-touchspin">Dark Touchspin</label>
                                    <div class="qty-input qty-input-dark">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="dark-touchspin" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Outlined Touchspin</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>

                            <div class="row g-5">
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="default-touchspin-1">Default Touchspin</label>
                                    <div class="qty-input qty-input-outline">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="default-touchspin-1" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="primary-touchspin-2">Primary Touchspin</label>
                                    <div class="qty-input qty-input-primary qty-input-outline">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="primary-touchspin-2" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="secondary-touchspin-3">Secondary Touchspin</label>
                                    <div class="qty-input qty-input-secondary qty-input-outline">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="secondary-touchspin-3" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="success-touchspin-4">Success Touchspin</label>
                                    <div class="qty-input qty-input-success qty-input-outline">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="success-touchspin-4" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="info-touchspin-5">Info Touchspin</label>
                                    <div class="qty-input qty-input-info qty-input-outline">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="info-touchspin-5" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="warning-touchspin-6">Warning Touchspin</label>
                                    <div class="qty-input qty-input-warning qty-input-outline">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="warning-touchspin-6" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="danger-touchspin-7">Danger Touchspin</label>
                                    <div class="qty-input qty-input-danger qty-input-outline">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="danger-touchspin-7" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="dark-touchspin-8">Dark Touchspin</label>
                                    <div class="qty-input qty-input-dark qty-input-outline">
                                        <button type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="dark-touchspin-8" type="number" value="2" min="0" max="100">
                                        <button type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Rounded Touchspin</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>

                            <div class="row g-5">
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="rounded-default-touchspin">Default Touchspin</label>
                                    <div class="qty-input qty-input-rounded">
                                        <button class="qty-input-minus" type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="rounded-default-touchspin" type="number" value="2" min="0" max="100">
                                        <button class="qty-input-plus" type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="rounded-primary-touchspin">Primary Touchspin</label>
                                    <div class="qty-input qty-input-primary qty-input-rounded">
                                        <button class="qty-input-minus" type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="rounded-primary-touchspin" type="number" value="2" min="0" max="100">
                                        <button class="qty-input-plus" type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="rounded-secondary-touchspin">Secondary Touchspin</label>
                                    <div class="qty-input qty-input-secondary qty-input-rounded">
                                        <button class="qty-input-minus" type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input rdRounded-="secondary-touchspin" type="number" value="2" min="0" max="100">
                                        <button class="qty-input-plus" type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="rounded-success-touchspin">Success Touchspin</label>
                                    <div class="qty-input qty-input-success qty-input-rounded">
                                        <button class="qty-input-minus" type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="rounded-success-touchspin" type="number" value="2" min="0" max="100">
                                        <button class="qty-input-plus" type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="rounded-info-touchspin">Info Touchspin</label>
                                    <div class="qty-input qty-input-info qty-input-rounded">
                                        <button class="qty-input-minus" type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="rnfoRounded--touchspin" type="number" value="2" min="0" max="100">
                                        <button class="qty-input-plus" type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="rounded-warning-touchspin">Warning Touchspin</label>
                                    <div class="qty-input qty-input-warning qty-input-rounded">
                                        <button class="qty-input-minus" type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="rounded-warning-touchspin" type="number" value="2" min="0" max="100">
                                        <button class="qty-input-plus" type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="rounded-danger-touchspin">Danger Touchspin</label>
                                    <div class="qty-input qty-input-danger qty-input-rounded">
                                        <button class="qty-input-minus" type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="rounded-danger-touchspin" type="number" value="2" min="0" max="100">
                                        <button class="qty-input-plus" type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-3">
                                    <label class="form-label" for="rounded-dark-touchspin">Dark Touchspin</label>
                                    <div class="qty-input qty-input-dark qty-input-rounded">
                                        <button class="qty-input-minus" type="button" data-action="minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input id="rarkRounded--touchspin" type="number" value="2" min="0" max="100">
                                        <button class="qty-input-plus" type="button" data-action="plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End row-->
        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

<script src="assets/js/form/advanced-form.init.js"></script>

<script src="assets/js/app.js"></script>
@endsection