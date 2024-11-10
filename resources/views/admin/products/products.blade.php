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
                                <tbody>

                                    <tbody>
                                        @foreach ($products as $index => $product)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    <div class="media-box">
                                                        @if ($product->productImage->isNotEmpty())
                                                            <img src="{{ asset('assets/admin/images/products/uploads/' . $product->productImage->first()->image) }}" class="media-avatar" alt="Product Image" />
                                                        @else
                                                            <img src="{{ asset('assets/admin/images/products/uploads/default.jpg') }}" class="media-avatar" alt="No Image Available" />
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->selling_price }}</td>
                                                <td>{{ $product->qty }}</td>
                                                <td>{{ $product->sku }}</td>
                                                <td><span class="badge shade-green min-70">Active</span></td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
                                                            <i class="bi bi-list text-green"></i>
                                                        </a>
                                                        <a href="#" class="deleteRow">
                                                            <i class="bi bi-trash text-red"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
