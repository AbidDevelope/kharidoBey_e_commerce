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
                                                <input type="text" class="form-control" name="old_password" id="old_password" value="{{ old('old_password') }}">
                                                @error('old_password')
                                                    <span class="text-danger" id="old_password-error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-sm-4 col-form-label">New Password</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="new_password" id="new_password" value="{{ old('new_password') }}">
                                                @error('new_password')
                                                    <span class="text-danger" id="new_password-error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-sm-4 col-form-label">Confirm Password</label>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation">
                                                @error('new_password_confirmation')
                                                    <span class="text-danger" id="new_password_confirmation-error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    
                                        <!-- Form actions footer start -->
                                        <div class="form-actions-footer">
                                            <a href="{{ route('admin.profile') }}" class="btn btn-light">Cancel</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    
                                        @if(session('success'))
                                            <div class="alert alert-success mt-4">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </form>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var inputs = document.querySelectorAll('.form-control');
            inputs.forEach(function(input) {
                var errorSpan = document.getElementById(input.name + '-error');
    
                if (errorSpan && errorSpan.textContent.trim() !== '') {
                    errorSpan.style.display = 'inline';
                }
    
                input.addEventListener('input', function() {
                    if (input.value.trim() === '') {
                        errorSpan.style.display = 'inline';
                    } else {
                        errorSpan.style.display = 'none';
                    }
                });
            });
        });
    </script>
    

    <!-- ************ Required JavaScript Files *************
  ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/admin/js/moment.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Main Js Required -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
@endsection
