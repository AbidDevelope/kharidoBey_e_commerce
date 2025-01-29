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
                        <div class="card-title">Edit Product Information</div>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="updateProduct" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-sm-8 col-12">
                                    <div class="card-border">
                                        <div class="card-border-title">General Information</div>
                                        <div class="card-border-body">

                                            <div class="row">
                                                <input type="hidden" class="form-control" name="id" id="productId"
                                                    value="{{ $products->id }}">

                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Name <span
                                                                class="text-red">*</span></label>
                                                        <input type="text" class="form-control" name="title" id="title"
                                                            placeholder="Enter Product Name"
                                                            value="{{ $products->title }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Slug <span
                                                                class="text-red">*</span></label>
                                                        <input readonly type="text" class="form-control" name="slug"
                                                            id="slug" value="{{ $products->slug }}"
                                                            placeholder="Enter Product Slug">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Short Description <span
                                                                class="text-red">*</span></label>
                                                        <textarea type="text" class="form-control"
                                                            placeholder="Enter Short Description"
                                                            name="short_description" id="short_description"
                                                            rows="2">{{ $products->short_description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Long Description <span
                                                                class="text-red">*</span></label>
                                                        <textarea type="text" class="form-control"
                                                            placeholder="Enter Long Description" name="long_description"
                                                            id="long_description"
                                                            rows="3">{{ $products->long_description }}</textarea>
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
                                                            id="selling_price" value="{{ $products->selling_price }}"
                                                            placeholder="Enter Product Price">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Old Price <span
                                                                class="text-red">*</span></label>
                                                        <input type="text" class="form-control" name="old_price"
                                                            id="old_price" value="{{ $products->old_price }}"
                                                            placeholder="Enter Product Price">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Compare Price <span
                                                                class="text-red">*</span></label>
                                                        <input type="text" class="form-control" name="compare_price"
                                                            value="{{ $products->compare_price }}" id="compare_price"
                                                            placeholder="Enter Product Price">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Discount(%) <span
                                                                class="text-red">*</span></label>
                                                        <input type="text" class="form-control" name="discount"
                                                            value="{{ $products->discount }}" id="discount"
                                                            placeholder="Enter Product Discount">
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
                                                            value="{{ $products->sku }}" id="sku"
                                                            placeholder="Enter Product SKU">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Barcode <span
                                                                class="text-red">*</span></label>
                                                        <input type="text" name="barcode" class="form-control"
                                                            value="{{ $products->barcode }}" id="barcode"
                                                            placeholder="Enter Product Barcode">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Track Qty.<span
                                                                class="text-red">*</span></label>
                                                        <select class="form-control" name="track_qty" id="track_qty">
                                                            <option value="">Select</option>

                                                            <option value="Yes"
                                                                {{ $products->track_qty == 'Yes' ? 'selected' : '' }}>
                                                                Yes</option>
                                                            <option value="No"
                                                                {{ $products->track_qty == 'No' ? 'selected' : '' }}>No
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Qty. <span
                                                                class="text-red">*</span></label>
                                                        <input type="text" name="qty" class="form-control"
                                                            value="{{ $products->qty }}" id="qty"
                                                            placeholder="Enter Product Qty">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Stock <span
                                                                class="text-red">*</span></label>
                                                        <input type="text" name="stock" class="form-control" id="stock"
                                                            placeholder="Enter Product Stock"
                                                            value="{{ $products->stock }}">
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
                                                        <select class="form-control" name="status" id="productStatus">
                                                            <option value="">Select</option>
                                                            <option value="0"
                                                                {{ $products->status == 0 ? 'selected' : ''  }}>Inactive
                                                            </option>
                                                            <option value="1"
                                                                {{ $products->status == 1 ? 'selected' : '' }}>Active
                                                            </option>
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
                                                            <option value="">Select Category</option>
                                                            @foreach($category as $categories)
                                                            <option value="{{ $categories->id }}"
                                                                {{ $products->category_id == $categories->id ? 'selected' : '' }}>
                                                                {{ $categories->name }}</option>
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
                                                            <option value="">Select Sub Category
                                                            </option>
                                                            @foreach($subcategories as $subcat)
                                                            <option value="{{ $subcat->id }}"
                                                                {{ $products->sub_category_id == $subcat->id ? 'selected' : '' }}>
                                                                {{ $subcat->name }}</option>
                                                            @endforeach
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
                                                            <option value="">Select Brand
                                                            </option>
                                                            @foreach($brands as $brand)
                                                            <option value="{{ $brand->id }}"
                                                                {{ $products->brand_id == $brand->id ? 'selected' : '' }}>
                                                                {{ $brand->name }}
                                                            </option>
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
                                                            <option value="">Select
                                                            </option>
                                                            <option value="Yes"
                                                                {{ $products->is_featured == 'Yes' ? 'selected' : '' }}>
                                                                {{ $products->is_featured }}</option>
                                                            <option value="No"
                                                                {{ $products->is_featured == 'No' ? 'selected' : '' }}>
                                                                {{ $products->is_featured }}</option>
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
                                        <div class="card-border-body" id="image">
                                            <div id="dropzone" class="dropzone"></div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($exitingImages as $images)
                                <div class="card p-4" style="width: 16rem;">
                                    <img class="card-img-top" src="{{ asset('assets/admin/images/products/uploads/'. $images->image) }}" alt="Card image cap">
                                    <div class="card-body text-center">
                                        
                                        <a href="#" class="btn btn-primary">remove</a>
                                    </div>
                                </div>
                                @endforeach


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

<link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

<script src="{{ asset('assets/admin/vendor/dropzone/dropzone.min.js') }}"></script>
<!-- Dropzone Script -->
<script>
Dropzone.autoDiscover = false;

var uploadedImages = [];

var myDropzone = new Dropzone("#dropzone", {
    url: "{{ route('upload-temp-images') }}",
    maxFiles: 6,
    paramName: 'image',
    acceptedFiles: ".jpeg,.jpg,.png",
    addRemoveLinks: true,
    autoProcessQueue: true,
    headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    success: function(image, response) {
        if (response.status) {
            uploadedImages.push(response.image);
        }
    },
    error: function(image, response) {
        console.log("Error uploading image:", response);
    },
    init: function() {
        var myDropzone = this;

        
        this.on("maxfilesexceeded", function(image) {
            alert("You can only upload a maximum of 6 images.");
            myDropzone.removeFile(image);
        });
    }
});
</script>

<script>
$('#title').change(function() {
    var value = $(this).val();

    $.ajax({
        url: "{{route('get-slug')}}",
        type: 'GET',
        dataType: "Json",
        data: {
            title: value
        },
        success: function(res) {
            if (res['status'] == true) {
                $('#slug').val(res['slug']);
            }
        },
        error: function(xhr, status, error) {
            if (xhr.status === 404) {
                alert('Slug not Found');
            } else if (xhr.status === 500) {
                alert('Internal server Error');
            } else {
                alert('An error occurred: ' + status + ' - ' + error);
            }
        }
    });
});
</script>

<script>
$('#category_id').change(function() {
    var categoryId = $(this).val();

    if (categoryId === '') {
        $('#sub_category_id').empty().append(
            '<option value="">Select Sub Category</option>');
        return;
    }

    if (categoryId) {
        $.ajax({
            url: "{{ route('subcategory.get', '') }}/" + categoryId,
            type: "GET",
            dataType: "json",
            success: function(res) {
                if (res.status) {
                    var subcategoryDropdown = $('#sub_category_id');
                    subcategoryDropdown.empty();
                    $.each(res.subcategories, function(key, subcategory) {
                        subcategoryDropdown.append('<option value="' + subcategory.id +
                            '">' + subcategory.name + '</option>');
                    });
                }
            },
            error: function(xhr, status, error) {
                alert('Error Fecthing Subcategories');
            }
        });
    }
});
</script>
<script>
$('#updateProduct input, #updateProduct select, #updateProduct textarea').on('keyup change', function() {
    var field = $(this).attr('id');
    $('#' + field).next('.text-danger').remove();
});

$('#updateProduct input, #updateProduct select, #updateProduct textarea').on('blur', function() {
    var field = $(this).attr('id');
    var value = $(this).val().trim();
    if (value === '') {
        $('#' + field).next('.text-danger').remove();
        $('#' + field).after('<span class="text-danger">This field is required</span>');
    }
});


$('#updateProduct').submit(function(event) {
    event.preventDefault();
    var id = $('#productId').val();
    var formData = new FormData(this);

    myDropzone.getAcceptedFiles().forEach(function(file, index) {
        formData.append('image[' + index + ']', file);
    });

    $('.text-danger').remove();


    $.ajax({
        url: "{{ route('update.products', '') }}/" + id,
        type: "POST",
        headers: {
            'X-HTTP-Method-Override': 'PUT'
        },
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function(res) {
            if (res.status === true) {
                window.location.href = res.redirect_url;
            } else {
                alert('Error:' + res.message);
            }
        },
        error: function(xhr, status, error) {
            alert('something went wrong : ' + error);
        }
    });
});
</script>
@endsection