@extends('admin.layouts.master')
@section('content')
<div class="col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Brands</div>
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
                                                value="{{ $brand->name }}" placeholder="Enter Brand Name">

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Slug<span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                value="{{ $brand->slug }}" placeholder="Enter Brand Slug" readonly>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Status<span class="text-red">*</span></label>
                                            <select class="form-control" name="status" id="brandStatus">
                                                <option value="Select Category Status">Select Status</option>
                                                <option value="0" {{ $brand->status == 0  ? 'selected' : ''  }}>InActive
                                                </option>
                                                <option value="1" {{ $brand->status == 1 ? 'selected': ''  }}>Active
                                                </option>
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
@endsection