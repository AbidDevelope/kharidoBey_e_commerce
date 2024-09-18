@extends('admin.layouts.master')
@section('content')
    <!-- Row start -->
    <div class="col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Category Information</div>
            </div>
            <div class="card-body">
                <form method="POST" id="categoryForm" name="categoryForm">

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
                                    <div id="dropzone" class="dropzone-dark">
                                        <div class="dropzone needsclick dz-clickable" id="demo-upload">

                                            <div class="dz-message needsclick">
                                                <button type="button" class="dz-button">Drop files here or click to
                                                    upload.</button><br>
                                                <span class="note needsclick">(This is just a demo dropzone. Selected files
                                                    are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </div>
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
        $('#categoryForm').submit(function(event) {
            event.preventDefault();
            var element = $(this);

            $('.text-danger').remove();

            $.ajax({
                url: "{{ route('category.submit') }}",
                type: 'POST',
                data: element.serialize(),
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
@endsection
