@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper-scroll">

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->
            <div class="row">
                <div class="col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Product Information</div>
                        </div>
                        <div class="card-body">
                            <form method="POST" id="productForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8 col-12">
                                        <div class="card-border">
                                            <div class="card-border-title">General Information</div>
                                            <div class="card-border-body">

                                                <div class="row">
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Name <span
                                                                    class="text-red">*</span></label>
                                                            <input type="text" class="form-control" name="title"
                                                                id="title" placeholder="Enter Product Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Slug <span
                                                                    class="text-red">*</span></label>
                                                            <input readonly type="text" class="form-control"
                                                                name="slug" id="slug"
                                                                placeholder="Enter Product Slug">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Short Description <span
                                                                    class="text-red">*</span></label>
                                                            <textarea type="text" class="form-control" placeholder="Enter Short Description" name="short_description"
                                                                id="short_description" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Long Description <span
                                                                    class="text-red">*</span></label>
                                                            <textarea type="text" class="form-control" placeholder="Enter Long Description" name="long_description"
                                                                id="long_description" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-border">
                                            <div class="card-border-title">Pricing</div>
                                            <div class="card-border-body">

                                                <div class="row">
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Price <span
                                                                    class="text-red">*</span></label>
                                                            <input type="text" class="form-control" name="selling_price"
                                                                id="selling_price" placeholder="Enter Product Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Old Price <span
                                                                    class="text-red">*</span></label>
                                                            <input type="text" class="form-control" name="old_price"
                                                                id="old_price" placeholder="Enter Product Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Compare Price <span
                                                                    class="text-red">*</span></label>
                                                            <input type="text" class="form-control" name="compare_price"
                                                                id="compare_price" placeholder="Enter Product Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Discount <span
                                                                    class="text-red">*</span></label>
                                                            <input type="text" class="form-control" name="discount"
                                                                id="discount" placeholder="Enter Product Discount">
                                                            {{-- <span class="input-group-text">%</span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-border">
                                            <div class="card-border-title">Inventory</div>
                                            <div class="card-border-body">

                                                <div class="row">

                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product SKU (Stock Keeping Unit)
                                                                <span class="text-red">*</span></label>
                                                            <input type="text" name="sku" class="form-control"
                                                                id="sku" placeholder="Enter Product SKU">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Barcode <span
                                                                    class="text-red">*</span></label>
                                                            <input type="text" name="barcode" class="form-control"
                                                                id="barcode" placeholder="Enter Product Barcode">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Track Qty.<span
                                                                    class="text-red">*</span></label>
                                                            <select class="form-control" name="track_qty" id="track_qty">
                                                                <option value="Select Product Category">Select
                                                                </option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Qty. <span
                                                                    class="text-red">*</span></label>
                                                            <input type="text" name="qty" class="form-control"
                                                                id="qty" placeholder="Enter Product Qty">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Stock <span
                                                                    class="text-red">*</span></label>
                                                            <input type="text" name="stock" class="form-control"
                                                                id="stock" placeholder="Enter Product Stock">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <div class="card-border">
                                            <div class="card-border-title">Product Status</div>
                                            <div class="card-border-body">
                                                <div class="row">
                                                    <div class="col-sm-12 col-12">
                                                        <div class="mb-2">
                                                            <label class="form-label">Product Status<span
                                                                    class="text-red">*</span></label>
                                                            <select class="form-control" name="status"
                                                                id="productStatus">
                                                                <option value="Select Product Category">Select
                                                                </option>
                                                                <option value="0">Inactive</option>
                                                                <option value="1">Active</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-border">
                                            <div class="card-border-title">Product Category</div>
                                            <div class="card-border-body">
                                                <div class="row">
                                                    <div class="col-sm-12 col-12">
                                                        <div class="mb-2">
                                                            <label class="form-label">Product Category <span
                                                                    class="text-red">*</span></label>
                                                            <select class="form-control" name="category_id"
                                                                id="category_id">
                                                                <option value="Select Product Category">Select Category
                                                                </option>
                                                                @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-12">
                                                        <div class="mb-2">
                                                            <label class="form-label">Product Sub Category <span
                                                                    class="text-red">*</span></label>
                                                            <select class="form-control" name="sub_category_id"
                                                                id="sub_category_id">
                                                                <option value="Select Product Category">Select Sub Category
                                                                </option>
                                                                <option value="Mobiles">Mobiles</option>
                                                                <option value="Books">Books</option>
                                                                <option value="Games">Games</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-border">
                                            <div class="card-border-title">Brand</div>
                                            <div class="card-border-body">
                                                <div class="row">
                                                    <div class="col-sm-12 col-12">
                                                        <div class="mb-2">
                                                            <label class="form-label">Product Brand <span
                                                                    class="text-red">*</span></label>
                                                            <select class="form-control" name="brand_id" id="brand_id">
                                                                <option value="Select Product Category">Select Brand
                                                                </option>
                                                                @foreach ($brands as $brand)
                                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-border">
                                            <div class="card-border-title">Featured Product</div>
                                            <div class="card-border-body">
                                                <div class="row">
                                                    <div class="col-sm-12 col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Is Featured <span
                                                                    class="text-red">*</span></label>
                                                            <select class="form-control" name="is_featured"
                                                                id="is_featured">
                                                                <option value="Select Product Category">Select
                                                                </option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="card-border">
                                            <div class="card-border-title">Product Images</div>
                                            <div class="card-border-body">

                                                <div id="dropzone" class="dropzone-dark">
                                                    <div action="/upload" class="dropzone needsclick dz-clickable"
                                                        id="demo-upload">

                                                        <div class="dz-message needsclick">
                                                            <button type="button" class="dz-button">Drop files here or
                                                                click to
                                                                upload.</button><br>
                                                            <span class="note needsclick">(This is just a demo dropzone.
                                                                Selected files are
                                                                <strong>not</strong> actually uploaded.)</span>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-12">
                                        <div class="custom-btn-group flex-end">
                                            <a href="{{ route('products') }}" class="btn btn-light">Cancel</a>
                                            <button type="submit" class="btn btn-success">Add Product</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- Content wrapper end -->
    </div>
    <!-- Content wrapper scroll end -->

    <!-- Dropzone JS -->
    <script src="{{ asset('assets/admin/vendor/dropzone/dropzone.min.js') }}"></script>

    <script>
        $('#productForm').submit(function(event) {
            event.preventDefault();
            var element = $(this);
            var formData = new FormData(this);
            $('.text-danger').remove();
            $.ajax({
                url: "{{ route('products/submit') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(response) {
                    if (response.status === true) {
                        console.log('Sucess');
                    }
                },
                error: function(jqXHR) {
                    if (jqXHR.status === 422) {
                        var errors = jqXHR.responseJSON.errors;

                        $.each(errors, function(field, errorMessages) {
                            $('#' + field).after('<span class="text-danger">' + errorMessages[
                                0] + '</span>');
                            if (field === 'status') {
                                $('#productStatus').after('<span class="text-danger">' +
                                    errorMessages[0] + '</span>');
                            }
                        });
                    } else {
                        console.log('Something went wrong');
                    }
                }
            });
        });
    </script>
    <script>
        $('#title').change(function() {
            var element = $(this);

            $.ajax({
                url: "{{ route('get-slug') }}",
                type: "GET",
                data: {
                    title: element.val()
                },
                dataType: "json",
                success: function(response) {
                    if (response['status'] == true) {
                        $('#slug').val(response['slug']);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status === 404) {
                    // 404 error (Not Found)
                    alert('Slug route not found.');
                } else if (jqXHR.status === 500) {
                    // 500 error (Internal Server Error)
                    alert('Internal server error occurred.');
                } else {
                    // General error message
                    alert('An error occurred: ' + textStatus + ' - ' + errorThrown);
                }
                console.log(jqXHR.responseText);
            }
            });
        });
    </script>
@endsection
