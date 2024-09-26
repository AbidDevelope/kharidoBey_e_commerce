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
                    <div class="card-title">Sub Categories</div>
                    <div class="ml-auto">
                        <a href="{{ route('add.sub_categories') }}" class="btn btn-success">
                            <i class="bi bi-plus"></i>Sub Category
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table v-middle m-0" id="laravel_datatable">
                            <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <!-- <th>Image</th> -->
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                          
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->

</div>
@endsection