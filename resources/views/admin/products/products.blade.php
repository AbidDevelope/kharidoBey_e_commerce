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
                        <table class="table v-middle m-0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Orders</th>
                                    <th>Last Order</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media-box">
                                            <img src="{{ asset('assets/admin/images/user2.png') }}" class="media-avatar"
                                                alt="Bootstrap Themes" />
                                            <div class="media-box-body">
                                                <div class="text-truncate">Dolly Winters</div>
                                                <p>ID: #VIVO00763</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>067-676-98320</td>
                                    <td>
                                        <span class="badge shade-green min-70">Active</span>
                                    </td>
                                    <td>87</td>
                                    <td>2022/01/25</td>
                                    <td>$32800</td>
                                    <td>
                                        <div class="actions">
                                            <a href="#" class="viewRow" data-bs-toggle="modal"
                                                data-bs-target="#viewRow">
                                                <i class="bi bi-list text-green"></i>
                                            </a>
                                            <a href="#" class="deleteRow">
                                                <i class="bi bi-trash text-red"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-box">
                                            <img src="{{ asset('assets/admin/images/user5.png') }}" class="media-avatar"
                                                alt="Bootstrap Themes" />
                                            <div class="media-box-body">
                                                <div class="text-truncate">Cedric Kelly</div>
                                                <p>ID: #VIVO00582</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>009-543-77650</td>
                                    <td>
                                        <span class="badge shade-green min-70">Active</span>
                                    </td>
                                    <td>34</td>
                                    <td>2022/01/22</td>
                                    <td>$65890</td>
                                    <td>
                                        <div class="actions">
                                            <a href="#" class="viewRow" data-bs-toggle="modal"
                                                data-bs-target="#viewRow">
                                                <i class="bi bi-list text-green"></i>
                                            </a>
                                            <a href="#" class="deleteRow">
                                                <i class="bi bi-trash text-red"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection