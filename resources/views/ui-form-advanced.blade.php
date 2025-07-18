@extends('partials.layouts.master')

@section('title', 'UI Advanced | Urbix Admin & Dashboards Template')
@section('title-sub', 'Forms')
@section('pagetitle', 'Advanced')
@section('css')
  <link rel="stylesheet" href="assets/libs/@yaireo/tagify/tagify.css">
    <link rel="stylesheet" href="assets/libs/dual-listbox/dual-listbox.css">
@endsection
@section('content')

            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Tagify</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>
                            <div class="mb-10">
                                <label class="form-label">Default input style</label>
                                <input class="form-control" name='basic' value='tag1, tag2' autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tagify With Custom Suggestions</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>
                            <div class="mb-10">
                                <label class="form-label">Default input style</label>
                                <input name='tags4' class='form-control tagify--custom-dropdown' placeholder='Type an English letter' value='css, html, javascript'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tagify With Custom Suggestions</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>
                            <div class="mb-10">
                                <label class="form-label">Default input style</label>
                                <input class="form-control" name='tags-readonly-mix' placeholder='Type something' value='[
                                            {
                                                "value": "foo",
                                                "readonly": true,
                                                "title": "read-only tag"
                                            },
                                            {
                                                "value": "bar"
                                            },
                                            {
                                                "value": "Locked tag",
                                                "readonly": true,
                                                "title": "Another readonly tag"
                                            }
                                        ]' />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tagify With Custom Suggestions</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>
                            <div class="mb-10">
                                <label class="form-label">Default input style</label>
                                <input name='input-custom-dropdown' class='form-control tagify--custom-dropdown' placeholder='Type an English letter' value='css, html, javascript'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tagify With Custo000m Suggestions</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>
                            <div class="mb-10">
                                <label class="form-label">Default input style</label>
                                <input class="form-control" name='tags-disabled-user-input' value="2,4" placeholder='Select tags from the list'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tagify With Custo000m Suggestions</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>
                            <div class="mb-10">
                                <label class="form-label">Default input style</label>
                                <input class="form-control" name='tags-select-mode' placeholder="Please select" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tagify With mix</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>
                            <div class="mb-10">
                                <label class="form-label">Default input style</label>
                                <textarea class="form-control" name='mix'>[[{"id":101, "value":"cartman", "title":"Eric Cartman"}]] and [[kyle]] do not know [[{"value":"homer simpson", "readonly":true}]] because he's a relic.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">users-list</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>
                            <div class="mb-10">
                                <label class="form-label">Default input style</label>
                                <input name='users-list-tags' class='form-control users-list' value='abatisse2@nih.gov, Justinian Hattersley'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">users-list</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>
                            <div class="mb-10">
                                <label class="form-label">Default input style</label>
                                <div dir='rtl'>
                                    <input name='rtl-example' class='form-control tagify--rtl-exmaple' placeholder='לחץ בשדה והוסף ערך' />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Select by class</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>

                            <div class="m-3">
                                <select id="defaultDualList" multiple>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                    <option value="9">Nine</option>
                                    <option value="10">Ten</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0"> Add options and add eventListeners </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>

                            <div class="m-3">
                                <select id="defaultEventListeners" multiple>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                    <option value="9">Nine</option>
                                    <option value="10">Ten</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Toggle Password</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>

                            <label class="form-label" for="currentPassword">Current Password</label>
                            <div class="input-group mb-3">
                                <input type="password" id="currentPassword" class="form-control" value="123456" name="password" placeholder="8+ characters required" required minlength="8">
                                <a class="input-group-text toggle-password" href="javascript:;" data-target="currentPassword">
                                    <i class="ri-eye-off-line text-muted toggle-icon"></i>
                                </a>
                            </div>

                            <label class="form-label" for="newPassword">New password</label>
                            <div class="input-group mb-3">
                                <input type="password" id="newPassword" class="form-control" name="new-password" placeholder="8+ characters required" required minlength="8">
                                <a class="input-group-text toggle-password" href="javascript:;" data-target="newPassword">
                                    <i class="ri-eye-off-line text-muted toggle-icon"></i>
                                </a>
                            </div>
                            <label class="form-label" for="confirmPassword">Confirm password</label>
                            <div class="input-group mb-3">
                                <input type="password" id="confirmPassword" class="form-control" name="confirm-password" placeholder="Re-enter new password" required minlength="8">
                                <a class="input-group-text toggle-password" href="javascript:;" data-target="confirmPassword">
                                    <i class="ri-eye-off-line text-muted toggle-icon"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-danger" id="passwordError" style="display: none;">Passwords do not match!</div>

                        <button type="submit" id="updatePasswordBtn" class="btn btn-primary">Update Password</button>

                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Default Show Password</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>

                            <label class="form-label" for="newPassword">Password</label>
                            <div class="input-group mb-3">
                                <input type="password" id="newPassword" class="form-control" value="TH6R95E9LsdT" name="password" placeholder="8+ characters required" required minlength="8" data-visible="true">
                                <a class="input-group-text toggle-password" href="javascript:;" data-target="password">
                                    <i class="ri-eye-off-line text-muted toggle-icon"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Clipboard on Text Input</h5>
                        </div>
                        <div class="card-body">
                            <div id="clipboardContainer1" class="clipboard-container d-flex flex-column justify-content-between h-full">
                                <div>
                                    <p class="text-muted mb-4">
                                        Create a basic date picker by initializing Flatpickr with
                                        <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                                    </p>
                                    <p class="f-16">Cut/copy from text input</p>
                                    <input id="clipboardInputField" class="form-control" type="text" placeholder="Type some text to copy / cut">
                                </div>
                                <div class="mt-3 text-end">
                                    <button id="copyButtonInput" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white" data-bs-placement="top" data-bs-title="Copy to clipboard!">
                                        <i class="ri-file-copy-line"></i> Copy
                                    </button>
                                    <button id="cutButtonInput" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white" data-bs-placement="top" data-bs-title="Cut to clipboard!">
                                        <i class="ri-scissors-line"></i> Cut
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Cut/copy from textarea</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                Create a basic date picker by initializing Flatpickr with
                                <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                            </p>

                            <div id="clipboardContainer2">
                                <p class="f-16">Cut/copy from textarea</p>
                                <textarea id="clipboardTextarea" class="form-control fs-14" rows="3" spellcheck="false">
                                    A web designer must always enhance their work since creating websites is a creative effort. Therefore, a web designer must be more imaginative to produce exceptional results. Blogs about web design assist web designers in learning about new technologies, offer lessons, news, direction for a freebie, and much more. These blogs allow web designers to stay creative and improve their abilities. Therefore, advice from web design blogs is required to improve your business.
                                </textarea>
                                <div class="mt-3 text-end">
                                    <button id="copyButtonTextarea" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white" data-bs-placement="top" data-bs-title="Copy to clipboard!">
                                        <i class="ri-file-copy-line"></i> Copy
                                    </button>
                                    <button id="cutButtonTextarea" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white" data-bs-placement="top" data-bs-title="Cut to clipboard!">
                                        <i class="ri-scissors-line"></i> Cut
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Clipboard on Change Icon</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.</p>

                            <div class="input-group mb-3 clipboard-container" data-clipboard-target="clipboardInput">
                                <input type="text" class="form-control clipboard-input" value="This is a sample static text string to copy!" placeholder="Copy to clipboard">
                                <span class="input-group-text clipboard-button" role="button" id="basic-addon2" data-clipboard-action="copy" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white" data-bs-placement="top" data-bs-title="Copy to clipboard!">
                                    <i class="ri-file-copy-line me-1 clipboard-icon"></i> Copy
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End row-->
        </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')
<script src="assets/libs/@yaireo/tagify/tagify.js"></script>
<script src="assets/libs/dual-listbox/dual-listbox.js"></script>
<script src="assets/js/form/advanced-form.init.js"></script>

<script src="assets/js/app.js"></script>
@endsection