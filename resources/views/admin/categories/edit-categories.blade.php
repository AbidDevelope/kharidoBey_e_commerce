@extends('admin.layouts.master')
@section('content')
     <!-- Row start -->
     <div class="col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Category</div>
            </div>
            <div class="card-body">
                <form action="{{ route('categories/update', $categories->id) }}" method="POST" enctype="multipart/form-data">
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
                                                <label class="form-label">Name<span class="text-red">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    value="{{ $categories->name }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Slug<span class="text-red">*</span></label>
                                                <input type="text" class="form-control" name="slug" id="slug"
                                                    value="{{ $categories->slug }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Status<span class="text-red">*</span></label>
                                                <select class="form-control" name="status" id="categoryStatus">
                                                    <option value="Select Category Status">Select Status</option>
                                                    <option value="0" {{ $categories->status == 0 ? 'selected' : '' }}>InActive</option>
                                                    <option value="1" {{ $categories->status == 1 ? 'selected' : '' }}>Active</option>
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
                                <input type="file" class="form-control" onchange="readURL(this)" name="image" value="{{ $categories->image }}">
                                    <div class="mt-3">
                                    <img src="{{ asset('assets/admin/images/categories/' . $categories->image) }}" id="preview_img" width="150px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-12">
                            <div class="custom-btn-group flex-end">
                                <a href="{{ route('categories') }}" class="btn btn-light">Cancel</a>
                                <button type="submit" class="btn btn-success">Update</button>
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
                }
                
                reader.readAsDataURL(input.files[0]); 
            }
        } 
    </script>
    <script>
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