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
                                                <label class="form-label">Name <span class="text-red">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">
                                                {{-- @error('name')
                                                    <span class="text-danger" id="error-message-name">{{ $message }}</span>
                                                @enderror --}}
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Slug <span class="text-red">*</span></label>
                                                <input type="text" class="form-control" name="slug" id="slug"
                                                    placeholder="Enter Category Slug">
                                                    {{-- @error('slug')
                                                        <span>{{ $message }}</span>
                                                    @enderror --}}
                                                    <p></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Status <span class="text-red">*</span></label>
                                                <select class="form-control" name="status" id="status">
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
                                <button type="button" class="btn btn-light">Cancel</button>
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
        $('#categoryForm').submit(function(event){
            event.preventDefault();
            // alert('ds');
             var element = $(this);
            $.ajax({
                url: "{{ route('category.submit') }}",
                type: 'post',
                data: element.serializeArray(),
                dataType: 'json',
                success: function(response) {
                  var errors = response['errors'];

                  if(errors['name']) {
                    $('#name').addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors['name']);
                  }else {
                    $('#name').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                  }
                  if(errors['slug']) {
                    $('#slug').addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors['slug']);
                  }else{
                    $('#slug').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                  }

                },
                error: function(jqXHR, exception) {
                    console.log('something went wrong');
                }
            });
        });
    </script>
@endsection
