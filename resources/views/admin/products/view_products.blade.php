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
                                    <img class="product-card-img-top" src="{{ asset('assets/admin/images/products/uploads/' . $primaryImage->image ) }}" alt="Product Main Image">
                                @else
                                    <p>No primary image available.</p>
                                @endif

                                    <div class="product-card-body">
                                        <h5 class="product-title">{{ $products->title }}</h5>
                                        <div class="product-price">
                                            <span class="disount-price">{{ $products->selling_price }}</span>
                                            <span class="actucal-price">{{ $products->old_price }}</span>
                                            <span class="off-price">{{ $products->discount }} Off</span>
                                        </div>
                                        <div class="product-rating">
                                            <div class="rate2 rating-stars"></div>
                                            <div class="total-ratings">1050</div>
                                        </div>
                                        <div class="product-description">
                                            Xuartz movement, manufactured by Zitizen watch co., ltd.
                                        </div>
                                        <div class="product-actions">
                                        <img class="product-card-img-top" src="assets/images/food/img6.jpg" alt="Product Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                <address class="text-right">
                                    Vivo Inc, 5678 St. <br>
                                    2900 Julia Street, Suite 987<br>
                                    Huntsville, Alabama, 35500
                                </address>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>

                    <!-- Row start -->
                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <div class="invoice-details">
                                <address class="m-0">
                                    Jay Wilson,<br>
                                    2000 Oakdale Ave,<br>
                                    San Francisco, California(CA), 94124
                                </address>

                                <div class="invoice-num">
                                    <div>Invoice - #010</div>
                                    <div>January 20th 2022</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row">
                        <div class="col-12">

                            <div class="table-responsive">
                                <table class="table table-bordered invoice-table">
                                    <thead>
                                        <tr>
                                            <th>Items</th>
                                            <th>Product ID</th>
                                            <th>Hours</th>
                                            <th>Amount (Net)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6>Creative Wordpress Template</h6>
                                                <p>Create quality mockups and prototypes and Design mobile-based features.</p>
                                            </td>
                                            <td>
                                                <h6>#651</h6>
                                            </td>
                                            <td>
                                                <h6>40</h6>
                                            </td>
                                            <td>
                                                <h6>$450.00</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Front-End Development</h6>
                                                <p>Using markup languages like HTML to create user-friendly web pages.</p>
                                            </td>
                                            <td>
                                                <h6>#429</h6>
                                            </td>
                                            <td>
                                                <h6>60</h6>
                                            </td>
                                            <td>
                                                <h6>$550.00</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                            <td>
                                                <p>Subtotal</p>
                                                <p>Discount</p>
                                                <p>VAT</p>
                                                <h5 class="mt-4 text-blue">Total USD</h5>
                                            </td>
                                            <td>
                                                <p>$1000.00</p>
                                                <p>$10.00</p>
                                                <p>$5.00</p>
                                                <h5 class="mt-4 text-blue">$1015.00</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row">

                        <div class="col-sm-12 col-12">
                            <div class="invoice-footer">
                                <div class="text-end">
                                    <button class="btn btn-dark">Print</button>
                                    <button class="btn btn-success ms-1">Download</button>
                                </div>
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