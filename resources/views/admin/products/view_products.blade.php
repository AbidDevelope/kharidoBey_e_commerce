@extends('admin.layouts.master')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-sm-12 col-12">
            <div class="card">

                <div class="card-body">

                    <div class="invoice-container">

                        <div class="invoice-header">
                            <!-- Row start -->
                            <div class="row justify-content-between">
                                <div class="col-xxl-3 col-md-4 col-sm-6 col-12">
                                    <div class="product-card">
                                        @php
                                        $primaryImage = $products->productImage->where('is_primary', '1')->first();
                                        @endphp

                                        @if ($primaryImage)
                                        <img class="product-card-img-top"
                                            src="{{ asset('assets/admin/images/products/uploads/' . $primaryImage->image ) }}"
                                            height="250px" alt="Product Main Image">
                                        @else
                                        <p>No primary image available.</p>
                                        @endif

                                        <div class="product-card-body">
                                            <h5 class="product-title">{{ $products->title }}</h5>
                                            <div class="product-price">
                                                <span class="disount-price">&#8377;
                                                    {{ $products->selling_price }}</span>
                                                <span class="actucal-price">&#8377; {{ $products->old_price }}</span>
                                                <span class="off-price">{{ $products->discount }} Off</span>
                                            </div>
                                            <div class="product-rating">
                                                <div class="rate2 rating-stars"></div>
                                                <!-- <div class="total-ratings">1050</div> -->
                                            </div>
                                            <div class="product-description">
                                                {{ $products->short_description }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                    <div class="row">
                                        @foreach($products->productImage->where('is_primary', '0')->where('status', '1') as $multiImage)
                                        <div class="col-md-3 col-sm-4 col-6 mb-2">
                                            <div class="product-card">
                                                <img class="product-card-img-top img-fluid rounded shadow"
                                                    src="{{ asset('assets/admin/images/products/uploads/'. $multiImage->image) }}"
                                                    height="135px" alt="Product Image">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <!-- Row end -->
                        </div>

                        <!-- Row start -->
                        <div class="row">
                            <div class="col-12">

                                <div class="table-responsive">
                                    <table class="table table-bordered invoice-table">
                                        <thead>
                                            <tr>
                                                <th>Items</th>
                                                <th>Product ID</th>
                                                <th>Slug</th>
                                                <th>Amount (Net)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6>{{ $products->title }}</h6>
                                                    <p>{{ $products->long_description }}</p>
                                                </td>
                                                <td>
                                                    <h6>{{ $products->id }}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{ $products->slug }}</h6>
                                                </td>
                                                <td>
                                                    <h6>&#8377; {{ $products->selling_price }}</h6>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- Row end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection