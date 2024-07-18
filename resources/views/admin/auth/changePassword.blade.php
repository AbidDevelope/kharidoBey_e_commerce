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
                                <img src="{{ asset('assets/admin/images/user.png') }}" class="img-fluid"
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
                            <!-- Card start -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Change Password</div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<form action="{{ route('admin.change.password') }}" method="POST">
                                            @csrf
											<div class="row mb-4">
												<label class="col-sm-4 col-form-label">Old Password</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="old_password">
												</div>
											</div>
											<div class="row mb-4">
												<label class="col-sm-4 col-form-label">New Password</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="new_password">
												</div>
											</div>
                                            <div class="row mb-4">
												<label class="col-sm-4 col-form-label">Confirm Password</label>
												<div class="col-sm-6">
													<input type="password" class="form-control" name="confirm_password">
												</div>
											</div>	
										</form>
										<!-- Row end -->

										<!-- Form actions footer start -->
										<div class="form-actions-footer">
											<a href="{{ route('admin.profile') }}" class="btn btn-light">Cancel</a>
											<button class="btn btn-success">Submit</button>
										</div>
										<!-- Form actions footer end -->

									</div>
								</div>
								<!-- Card end -->
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