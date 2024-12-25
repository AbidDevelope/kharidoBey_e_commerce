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
    <div class="modal modal-dark fade" id="viewProduct" tabindex="-1" aria-labelledby="viewRowLabel" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewRowLabel">View Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Row start -->
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Customer Name</h6>
                                <h5>Garrett Winters</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Customer ID</h6>
                                <h5>#VIVO00763</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Contact</h6>
                                <h5>067-676-98320</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Amount Spent</h6>
                                <h5>$2570.00</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Last Login</h6>
                                <h5>21/11/2021</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Coupons Used</h6>
                                <h5>7</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Total Orders</h6>
                                <h5>95</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Cancelled Orders</h6>
                                <h5>2</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="customer-card">
                                <h6>Reviews</h6>
                                <h5>21</h5>
                            </div>
                        </div>
                    </div>
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


            $('#datatable').on('click', '.viewRow', function(){
                alert('ok');
            });
        });
    </script>
@endsection
