@extends('partials.layouts.master')

@section('title', 'Bootstrap Icons | Urbix Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Bootstrap Icons')

@section('content')


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="carbon">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <h4 class="card-title mb-2">Package Managers</h4>
                            <p class="card-text mb-0 text-muted">Easily install Bootstrap Icons via npm for use in your web applications.</p>
                            <pre class="mb-0"><deckgo-highlight-code lang="scss">
                                <code slot="code">npm i bootstrap-icons --save</code>
                            </deckgo-highlight-code></pre>
                            <p class="mb-0 text-muted">import CSS to your icons.scss</p>
                            <pre class="mb-0"><deckgo-highlight-code lang="scss">
                                <code slot="code">@import 'bootstrap-icons/fonts/bootstrap-icons.css';</code>
                            </deckgo-highlight-code></pre>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Basic Icons</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-2">
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-arrow-clockwise"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-left-circle"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-arrows-collapse-vertical"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-arrows-move"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-balloon"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-basket3"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-book"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Color Icons</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-2">
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-arrow-clockwise text-primary"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-left-circle text-secondary"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-arrows-collapse-vertical text-success"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-arrows-move text-danger"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-balloon text-warning"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-basket3 text-info"></i></div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center"><i class="bi bi-book text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Using SVG Code</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                                        <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-bar-contract" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M3.646 14.854a.5.5 0 0 0 .708 0L8 11.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708m0-13.708a.5.5 0 0 1 .708 0L8 4.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-fill" viewBox="0 0 16 16">
                                        <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dropbox" viewBox="0 0 16 16">
                                        <path d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555z" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Using SVG Color Code</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box text-primary" viewBox="0 0 16 16">
                                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes text-success" viewBox="0 0 16 16">
                                        <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill text-warning" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-bar-contract text-danger" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M3.646 14.854a.5.5 0 0 0 .708 0L8 11.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708m0-13.708a.5.5 0 0 1 .708 0L8 4.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-fill text-secondary" viewBox="0 0 16 16">
                                        <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dropbox text-info" viewBox="0 0 16 16">
                                        <path d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555z" />
                                    </svg>
                                </div>
                                <div class="avatar-lg fs-5 border rounded d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire text-dark" viewBox="0 0 16 16">
                                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h6 class="card-title">Using SVG Code</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center gap-5">
                                <div>
                                    <i class="bi bi-slack fs-10"></i>
                                </div>
                                <div>
                                    <i class="bi bi-slack fs-12"></i>
                                </div>
                                <div>
                                    <i class="bi bi-slack fs-14"></i>
                                </div>
                                <div>
                                    <i class="bi bi-slack fs-16"></i>
                                </div>
                                <div>
                                    <i class="bi bi-slack fs-18"></i>
                                </div>
                                <div>
                                    <i class="bi bi-slack fs-20"></i>
                                </div>
                                <div>
                                    <i class="bi bi-slack fs-22"></i>
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

<script type="module" src="https://unpkg.com/@deckdeckgo/highlight-code@latest/dist/deckdeckgo-highlight-code/deckdeckgo-highlight-code.esm.js"></script>


<script src="assets/js/app.js"></script>
@endsection