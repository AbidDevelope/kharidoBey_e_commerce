@extends('admin.layouts.master')
@section('content')
    <!-- Row start -->
    <div class="col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Category Information</div>
            </div>
            <div class="card-body">
                <form method="POST" id="categoryForm" name="categoryForm" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <div class="card-border">
                                <div class="card-border-title">Basic Information</div>
                                <div class="card-border-body">

                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-4">
                                                <label class="form-label">Name<span class="text-red">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Enter Category Name">

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Slug<span class="text-red">*</span></label>
                                                <input type="text" class="form-control" name="slug" id="slug"
                                                    placeholder="Enter Category Slug" readonly>

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Status<span class="text-red">*</span></label>
                                                <select class="form-control" name="status" id="categoryStatus">
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
                                <div class="card-border-title">Category Images</div>
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
                                <a href="{{ route('categories') }}" class="btn btn-light">Cancel</a>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Row end -->
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                $('#preview_img').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
            }
    </script>
    <script>
        $('#categoryForm').submit(function(event) {
            event.preventDefault();
            var element = $(this);

            var formData = new FormData(this);

            $('.text-danger').remove();

            $.ajax({
                url: "{{ route('category.submit') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === true) {
                        window.location.href = response.redirect_url;
                    }
                },
                error: function(jqXHR) {
                    if (jqXHR.status === 422) {
                        var errors = jqXHR.responseJSON.errors;

                        // Display validation errors
                        $.each(errors, function(field, errorMessages) {
                            $('#' + field).after('<span class="text-danger">' + errorMessages[
                                0] + '</span>');
                            if (field === 'status') {
                                $('#categoryStatus').after('<span class="text-danger">' +
                                    errorMessages[0] + '</span>');
                            }
                        });
                    } else {
                        console.log('Something went wrong');
                    }
                }
            });
        });


        $('#name').change(function() {
            element = $(this);
            $.ajax({
                url: "{{ route('getSlug') }}",
                type: 'GET',
                data: {
                    title: element.val()
                },
                dataType: 'json',
                success: function(response) {
                    if (response['status'] == true) {
                        $('#slug').val(response['slug']);
                    }
                }
            });
        });
    </script>
     <!-- Main Js Required -->
   <script src="{{ asset('assets/admin/js/main.js') }}"></script>
@endsection
