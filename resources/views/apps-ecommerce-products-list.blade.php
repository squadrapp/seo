@extends('partials.layouts.master')

@section('title', 'Product List | Urbix Admin & Dashboards Template')
@section('title-sub', 'E-Commerce')
@section('pagetitle', 'Product List')
@section('css')
 <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
  <!--datatable css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
  <!--datatable responsive css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
@endsection
@section('content')

<!-- begin::App -->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="row g-4 p-6 pb-0">
              <div class="col-md-6 col-xl-4">
                <select id="category-choice" class="form-select">
                  <option value="all">All Categories</option>
                  <option value="fashion">Fashion Wear</option>
                  <option value="footwear">Footwear</option>
                  <option value="undergarments">Undergarments</option>
                  <option value="men">Clothing</option>
                  <option value="accessories">Accessories</option>
                </select>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="d-flex flex-wrap flex-md-nowrap align-items-center gap-3">
                  <label for="min_price">Price:</label>
                  <input type="number" id="min_price" class="form-control" placeholder="Min Price">
                  <input type="number" id="max_price" class="form-control" placeholder="Max Price">
                </div>
              </div>
              <div class="col col-xl-4">
                <select id="stock-choice" class="form-select">
                  <option value="Stock Status">All Stock Status</option>
                  <option value="in_stock">In Stock</option>
                  <option value="out_of_stock">Out of Stock</option>
                </select>
              </div>
            </div>
            <div class="card-header flex-wrap gap-4">
              <div class="form-icon right">
                <input type="text" id="search-input" class="form-control" placeholder="Search...">
                <i class="ri-search-2-line search-icon"></i>
              </div>
              <div class="d-flex flex-wrap gap-2">
                <div class="dropdown">
                  <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-upload-2-line me-1"></i>Export</button>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><i class="ri-file-text-line"></i> Export as CSV</li>
                    <li class="dropdown-item"><i class="ri-file-excel-2-line"></i> Export as Excel</li>
                    <li class="dropdown-item"><i class="ri-file-pdf-line"></i> Export as PDF</li>
                    <li class="dropdown-item"><i class="ri-printer-line"></i> Print</li>
                    <li class="dropdown-item"><i class="ri-download-cloud-2-line"></i> Download All</li>
                  </ul>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal"><i class="ri-add-fill me-1"></i>Add New</button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-box table-responsive">
                <table id="default_datatable" class="table table-nowrap">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Stock</th>
                      <th>Rating</th>
                      <th>Published</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-01.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Crop Top</h6>
                            <small class="text-muted">Cotton fabric</small>
                          </div>
                        </div>
                      </td>
                      <td>Women's Clothing</td>
                      <td>$299</td>
                      <td><span class="badge bg-success">in stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.8<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-04-25</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-02.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Watch</h6>
                            <small class="text-muted">Stop Watch</small>
                          </div>
                        </div>
                      </td>
                      <td>Accessories</td>
                      <td>$699</td>
                      <td><span class="badge bg-danger">Out of stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.6<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-04-25</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-03.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Jeans Shoes</h6>
                            <small class="text-muted">Designer Men's Shoes</small>
                          </div>
                        </div>
                      </td>
                      <td>Footwear</td>
                      <td>$599</td>
                      <td><span class="badge bg-danger">Out of stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.5<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-08-19</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-04.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Pink Crop Top</h6>
                            <small class="text-muted">Lycra fabric</small>
                          </div>
                        </div>
                      </td>
                      <td>Women's Clothing</td>
                      <td>$499</td>
                      <td><span class="badge bg-success">In stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.7<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-08-05</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-05.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Men's T-shirt</h6>
                            <small class="text-muted">Cotton fabric</small>
                          </div>
                        </div>
                      </td>
                      <td>Men's Clothing</td>
                      <td>$199</td>
                      <td><span class="badge bg-danger">Out of stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.4<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-10-30</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-06.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Black Bra</h6>
                            <small class="text-muted">Cotton fabric</small>
                          </div>
                        </div>
                      </td>
                      <td>Undergarments</td>
                      <td>$149</td>
                      <td><span class="badge bg-danger">Out of stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.2<i class="ri-star-half-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-11-01</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-07.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Yellow Heels</h6>
                            <small class="text-muted">Leather material</small>
                          </div>
                        </div>
                      </td>
                      <td>Footwear</td>
                      <td>$199</td>
                      <td><span class="badge bg-success">In stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.8<i class="ri-star-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-04-10</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-08.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Red Purse</h6>
                            <small class="text-muted">Genuine leather</small>
                          </div>
                        </div>
                      </td>
                      <td>Accessories</td>
                      <td>$129</td>
                      <td><span class="badge bg-success">In stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.7<i class="ri-star-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-04-15</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-09.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Men's Jacket</h6>
                            <small class="text-muted">Warm winter jacket</small>
                          </div>
                        </div>
                      </td>
                      <td>Fashion</td>
                      <td>$199</td>
                      <td><span class="badge bg-success">In stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.5<i class="ri-star-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-04-20</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-10.png" class="avatar-lg border rounded-1 p-1" alt="Product Image">
                          <div>
                            <h6 class="mb-0">Cap</h6>
                            <small class="text-muted">Cotton baseball cap</small>
                          </div>
                        </div>
                      </td>
                      <td>Accessories</td>
                      <td>$49</td>
                      <td><span class="badge bg-danger">Out of stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.3<i class="ri-star-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-04-18</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/product/img-11.png" class="avatar-lg border rounded-1 p-1" alt="Shoes Image">
                          <div>
                            <h6 class="mb-0">Running Shoes</h6>
                            <small class="text-muted">Breathable sport sneakers</small>
                          </div>
                        </div>
                      </td>
                      <td>Footwear</td>
                      <td>$120</td>
                      <td><span class="badge bg-success">In Stock</span></td>
                      <td><span class="fs-12 fw-semibold">4.7<i class="ri-star-fill text-warning ms-1 fs-14"></i></span></td>
                      <td>2024-04-25</td>
                      <td>
                        <div class="hstack gap-2 justify-content-end fs-15">
                          <a class="btn btn-light-primary icon-btn-sm" href="#!"><i class="ri-edit-line"></i></a>
                          <a class="btn btn-light-danger icon-btn-sm" href="#!"><i class="ri-delete-bin-line"></i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- end:: Basic Datatable -->
            </div>
          </div>
        </div>
      </div>

    </div><!--End container-fluid-->
  </main><!--End app-wrapper-->

  <!-- Add Product Modal -->
  <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <form id="addProductForm">
          <div class="modal-header">
            <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" placeholder="Enter product name">
              </div>
              <div class="col-md-6">
                <label for="product-category-choice" class="form-label">Category</label>
                <select id="product-category-choice" class="form-select">
                  <option value="select">Choose category</option>
                  <option value="mens_clothing">Men's Clothing</option>
                  <option value="womens_clothing">Women's Clothing</option>
                  <option value="accessories">Accessories</option>
                  <option value="undergarments">Undergarments</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="productPrice" class="form-label">Price ($)</label>
                <input type="number" class="form-control" id="productPrice" placeholder="Enter price">
              </div>
              <div class="col-md-6">
                <label for="product-stock-choice" class="form-label">Stock Status</label>
                <select id="product-stock-choice" class="form-select">
                  <option value="in_stock">In Stock</option>
                  <option value="out_of_stock">Out of Stock</option>
                </select>
              </div>
              <div class="col-12">
                <label for="productDescription" class="form-label">Description</label>
                <textarea class="form-control" id="productDescription" rows="3" placeholder="Product description..."></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Add Product</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('js')

<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="assets/js/table/datatable.init.js"></script>
<script src="assets/js/app/ecommerce-product-list.init.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>

@endsection