@extends('admin.layouts.master')
@section('content')
<div class="col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Sub Category</div>
            </div>
            <div class="card-body">
                <form method="POST" id="subCategoryForm" name="subCategoryForm" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <div class="card-border">
                                <div class="card-border-title">Basic Information</div>
                                <div class="card-border-body">

                                    <div class="row">
                                    <div class="col-sm-6 col-12">
                                            <div class="mb-4">
                                                <label class="form-label">Category<span class="text-red">*</span></label>
                                                <select name="category_id" class="form-control" id="category_id">
                                                    <option value="" disabled selected>select category</option>
                                                    @foreach($category as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-4">
                                                <label class="form-label">Sub Category<span class="text-red">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Enter Sub Category">

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Slug<span class="text-red">*</span></label>
                                                <input type="text" class="form-control" name="slug" id="slug"
                                                    placeholder="Sub Category Slug" readonly>

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Status<span class="text-red">*</span></label>
                                                <select class="form-control" name="status" id="subCategoryStatus">
                                                    <option value="Select Category Status">Select Status</option>
                                                    <option value="0">InActive</option>
                                                    <option value="1">Active</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="card-border">
                                <div class="card-border-title">Sub Category Image</div>
                                <div class="card-border-body">
                                    <input type="file" class="form-control" onchange="readURL(this)" name="image">
                                    <div class="mt-3">
                                    <img  src="" id="preview_img" width="150px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-12">
                            <div class="custom-btn-group flex-end">
                                <a href="{{ route('sub_categories') }}" class="btn btn-light">Cancel</a>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script>
    $('#subCategoryForm').submit(function(event){
       event.preventDefault();
       var element = $(this);

       var formData = new FormData(this);
       $('.text-danger').remove();
       $.ajax({
        url: "{{ route('subCategory.submit') }}",
        type: "POST",
        data: formData,
        processData: false,  
        contentType: false, 
        dataType: "json",
        success: function(response) {
            if(response.status === true) {
                window.location.href = response.redirect_url
            }
        },
        error: function(jqXHR) {
            if (jqXHR.status === 422) {
                var errors = jqXHR.responseJSON.errors;

                $.each(errors, function(field, errorMessages) {
                    $('#' + field).after('<span class="text-danger">' + errorMessages[
                        0] + '</span>');
                    if (field === 'status') {
                        $('#subCategoryStatus').after('<span class="text-danger">' +
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
    $('#name').change(function(){
        element = $(this);
        $.ajax({
            url: "{{ route('get-slug') }}",
            type: "GET",
            data: {
                title: element.val()
            },
            dataType: "json",
            success: function(response) {
                if(response['status'] == true) {
                    $('#slug').val(response['slug']);
                }
            }
        });
    });
</script>

   <!-- Main Js Required -->
   <script src="{{ asset('assets/admin/js/main.js') }}"></script>
@endsection