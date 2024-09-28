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
                                    <th>Category</th>
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

<!-- Main Js Required -->
<script src="{{ asset('assets/admin/js/main.js') }}"></script>
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

   <script>
    $(document).ready(function(){
        $('#laravel_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('sub_categories') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'category_name', name: 'category_name'},
                {data: 'name', name: 'name'},
                {data: 'slug', name: 'slug'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            language: {
            emptyTable: "Data not available"
            }
        });
    });
   </script> 
@endsection