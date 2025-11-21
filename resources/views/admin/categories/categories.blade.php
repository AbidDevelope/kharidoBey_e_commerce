@extends('admin.layouts.master')
@section('content')
  <div class="content-wrapper">
        <div class="content"><!-- For Components documentaion -->
          <!-- Products Inventory -->
          <div class="card card-default">
            <div class="card-header">
              <h2>Categories</h2>

             <a href="{{ route('categories.add') }}" class="btn btn-success">
                                    <i class="bi bi-plus"></i>Category
                                </a>

            </div>
            <div class="card-body">
              <div class="collapse" id="collapse-data-tables">
               </div>
              <table id="categories_datatable" class="table table-hover table-product" style="width:100%">
                <thead>
                  <tr>
                    <th>Sr. No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>

            </div>
          </div>
        </div>

      </div>

    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    
    <!-- Content wrapper scroll end -->
    <script type="text/javascript">
  $(document).ready(function () {
    $('#categories_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('categories') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'image', name: 'image'},
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
