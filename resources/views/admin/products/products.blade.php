@extends('admin.layouts.master')
@section('content')
    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row">
            <div class="col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Products</div>
                         <div class="ml-auto">
                            <a href="{{ route('products/add') }}" class="btn btn-success">
                                <i class="bi bi-plus"></i>Products
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table v-middle m-0" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>SKU</th>
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
    <!-- Modal View Row -->
    <div class="modal modal-dark fade" id="viewProduct" tabindex="-1" aria-labelledby="viewProductLabel" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewProductLabel">View Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="productDetails">

                    <!-- Row start -->
                    
                    <!-- Row end -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('products') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'selling_price',
                        name: 'selling_price'
                    },
                    {
                        data: 'qty',
                        name: 'qty'
                    },
                    {
                        data: 'sku',
                        name: 'sku'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                language: {
                    emptyTable: "Data not available"
                }
            });


            $('#datatable').on('click', '.viewProduct', function () {
                const id = $(this).data('id');
                const url = "{{ url('admin/product') }}/" + id;

                  $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function (res) {
                        if (res.status === true) {
                            const productDetails = res.data;
                let detailsHtml = `
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Product Name</h6>
                                <h5>${productDetails.name}</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Price</h6>
                                <h5>${productDetails.price}</h5>
                            </div>
                        </div>
                    </div>
                `;
                $('#productDetails').html(detailsHtml);
                        //  Show the modal
                            $('#viewProduct').modal('show');
                        } else {
                            toastr.error('Product not found.', 'Error');
                        }
                    },
                    error: function (err) {
                        console.error('Error:', err.responseJSON || err);
                        alert('Failed to fetch product.');
                    }
                });
            });

        });
    </script>
    
@endsection
