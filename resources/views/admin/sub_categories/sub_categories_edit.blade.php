@extends('admin.layouts.master')
@section('content')
<div class="col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Sub Categories</div>
        </div>
        <div class="card-body">
            <form action="{{ route('sub_categories/update', $subCategories->id ) }}" method="POST">
                @csrf
                @method('PUT')
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
                                                <option value="" disabled selected>Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $subCategories->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label">Sub Category<span
                                                    class="text-red">*</span></label>
                                            <input type="text" name="name" id="name" value="{{ $subCategories->name }}"
                                                class="form-control" placeholder="Enter Sub Category">

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Slug<span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                value=" {{ $subCategories->slug }}" placeholder="Sub Category Slug"
                                                readonly>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Status<span class="text-red">*</span></label>
                                            <select class="form-control" name="status" id="subCategoryStatus">
                                                <option value="Select Category Status">Select Status</option>
                                                <option value="0" {{ $subCategories->status == 0 ? 'selected' :  ''}}>
                                                    InActive
                                                </option>
                                                <option value="1" {{ $subCategories->status == 1 ? 'selected' : '' }}>
                                                    Active</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-12">
                        <div class="custom-btn-group flex-end">
                            <a href="{{ route('sub_categories') }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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
            console.error(error);
        }
    });
});
</script>
@endsection