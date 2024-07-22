@extends('admin.layouts.master')
@section('content')
     <!-- Content wrapper scroll start -->
     <div class="content-wrapper-scroll">

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-sm-12 col-12">

                    <div class="profile-header">
                        <h1>Welcome, {{ Auth::guard('admin')->user()->name }}</h1>
                        <div class="profile-header-content">
                            <div class="profile-header-tiles">
                                <div class="row gutters">
                                    <div class="col-sm-4 col-12">
                                        <div class="profile-tile">
                                            <span class="icon">
                                                <i class="bi bi-pentagon"></i>
                                            </span>
                                            <h6>Name - <span>{{ Auth::guard('admin')->user()->name }}</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <div class="profile-tile">
                                            <span class="icon">
                                                <i class="bi bi-pin-angle"></i>
                                            </span>
                                            <h6>Email - <span>{{ Auth::guard('admin')->user()->email }}</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="profile-tile">
                                            <span class="icon">
                                                <i class="bi bi-telephone"></i>
                                            </span>
                                            <h6>Phone - <span>{{ Auth::guard('admin')->user()->mobile }}</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-avatar-tile">
                                <img src="{{ asset('assets/admin/images/user3.png') }}" class="img-fluid"
                                    alt="Bootstrap Gallery" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-lg-8 col-sm-12 col-12">
                    <!-- Row start -->
                    <div class="row gutters">
        
                        <div class="col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Profile Details</div>
                                    <span class="icon">
                                        <a href="#"><i class="bi bi-pencil-square"></i></a>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <ul class="customer-rating">
                                        <li class="clearfix">
                                            <div class="customer">
                                                <img src="{{ asset('assets/admin/images/user3.png') }}" alt="Vivo Admin">
                                            </div>
                                            <div class="customer-review">
                                                <div class="stars" id="rate2"></div>
                                                <h6 class="by">Name : <a >{{ Auth::guard('admin')->user()->name }}</a></h6>
                                                <h6 class="by">Email : <a >{{ Auth::guard('admin')->user()->email }}</a></h6>
                                                <h6 class="by">Contact : <a >{{ Auth::guard('admin')->user()->mobile }}</a></h6>
                                                <h6 class="by">Type : <a >Admin</a></h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->


    </div>
    <!-- Content wrapper scroll end -->
@endsection