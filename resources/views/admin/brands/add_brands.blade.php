@extends('admin.layouts.master')
@section('content')
<!-- Row start -->
<div class="col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Add Brands</div>
        </div>
        <div class="card-body">
            <form method="POST" id="brandsForm" name="brandForm">

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
                                                placeholder="Enter Brand Name">

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Slug<span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                placeholder="Enter Brand Slug" readonly>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Status<span class="text-red">*</span></label>
                                            <select class="form-control" name="status" id="brandStatus">
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
                        <div class="custom-btn-group flex-end">
                            <a href="{{ route('brands') }}" class="btn btn-light">Cancel</a>
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
$('#name').change(function() {
    element = $(this);

    $.ajax({
        url: "{{ route('get-slug') }}",
        type: "GET",
        data: {
            title: element.val(),
        },
        dataType: "json",
        success: function(response) {
            if (response['status'] == true) {
                $('#slug').val(response['slug']);
            }
        },
        error: function(xhr, status, error) {
            if (response['status'] == false) {
                console.errors(error);
            }
        }
    });
});
</script>
<script>
$('#brandsForm').submit(function(event) {
    event.preventDefault();

    var element = $(this);
    var formData = new FormData(this);

    $.ajax({
        url: "{{ route('brandSubmit') }}",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            if (response.status == true) {
                window.location.href = response.redirect_url;
            }
        },
        error: function(xhr, status, error) {
            if (xhr.status == 422) {
                var errors = xhr.responseJSON.errors;
                $('.text-danger').remove();

                $.each(errors, function(field, errorMessages) {
                    $('#' + field).after('<span class="text-danger">' + errorMessages[
                        0] + '</span>');
                    if (field === 'status') {
                        $('#brandStatus').after('<span class="text-danger">' +
                            errorMessages[0] + '</span>');
                    }
                });
            } else {
                console.log('something went wrong');
            }
        }
    });
});
</script>
@endsection