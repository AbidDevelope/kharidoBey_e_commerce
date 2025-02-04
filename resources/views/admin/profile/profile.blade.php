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
                                    <div class="col-sm-4 col-12">
                                        <div class="profile-tile">
                                            <span class="icon">
                                                <i class="bi bi-pin-angle"></i>
                                            </span>
                                            <h6>Email - <span>{{ Auth::guard('admin')->user()->email }}</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <div class="profile-tile">
                                            <span class="icon">
                                                <i class="bi bi-telephone"></i>
                                            </span>
                                            <h6>Phone - <span>{{ Auth::guard('admin')->user()->mobile }}</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="profile-avatar-tile">
                                <img src="{{ asset('assets/admin/images/user3.png') }}" class="img-fluid"
                                    alt="Bootstrap Gallery" />
                            </div> --}}
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
                                        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                class="bi bi-pencil-square"></i></a>
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
                                                <h6 class="by">Name : <a>{{ Auth::guard('admin')->user()->name }}</a>
                                                </h6>
                                                <h6 class="by">Email : <a>{{ Auth::guard('admin')->user()->email }}</a>
                                                </h6>
                                                <h6 class="by">Contact :
                                                    <a>{{ Auth::guard('admin')->user()->mobile }}</a>
                                                </h6>
                                                <h6 class="by">Type : <a>Admin</a></h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Modal 2 -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Row start -->
                                            <form action="{{ route('admin.profile.update') }}" id="editProfileForm" method="POST">
                                                @csrf 
                                                <div class="row">
                                                    <div class="col-xl-6 col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label for="inputName" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" value="{{ $admin->name }}"
                                                                placeholder="Enter Name" oninput="validateInput('name')">
                                                               <span class="text-danger" id="error-message-name">
                                                                @error('name')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <label for="inputEmail" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" value="{{ $admin->email }}"
                                                                placeholder="Enter Email" oninput="validateInput('email')">
                                                            <span class="text-danger" id="error-message-email">
                                                                @error('email')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-sm-6 col-12">
                                                        <div class="mb-3">
                                                            <div class="input-group">
                                                                <span class="input-group-text">IND (+91)</span>
                                                                <input type="text" class="form-control" name="mobile"
                                                                    placeholder="Enter phone number" id="mobile"
                                                                    value="{{ $admin->mobile }}"
                                                                    oninput="validateInput('mobile')"
                                                                    onkeypress="return isNumber(event)">
                                                            </div>
                                                            <span class="text-danger" id="error-message-mobile">
                                                                @error('mobile')
                                                                    {{ $message }}
                                                                @enderror
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Row end -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark" onclick="reloadForm(event)"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success" id="submitButton"
                                                        disabled>Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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

    <script>

        function reloadForm(event)
        {
           event.preventDefault();

           const form = document.querySelector('form');

           form.reset();
        }

        function validateInput(field) {
            const value = document.getElementById(field).value.trim();
            let isValid = true;

            if (field === 'mobile') {
                if (!/^\d{10}$/.test(value)) {
                    document.getElementById(`error-message-${field}`).textContent = 'Mobile number must be 10 digits.';
                    isValid = false;
                } else {
                    document.getElementById(`error-message-${field}`).textContent = '';
                }
            } else {
                if (!value) {
                    document.getElementById(`error-message-${field}`).textContent =
                        `${field.charAt(0).toUpperCase() + field.slice(1)} is required.`;
                    isValid = false;
                } else {
                    document.getElementById(`error-message-${field}`).textContent = '';
                }
            }

            checkFormValidity();
        }

        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            const charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

        function checkFormValidity() {
            const fields = ['name', 'email', 'mobile'];
            let allValid = true;

            fields.forEach(field => {
                const value = document.getElementById(field).value.trim();
                if (field === 'mobile') {
                    if (!/^\d{10}$/.test(value)) {
                        allValid = false;
                    }
                } else {
                    if (!value) {
                        allValid = false;
                    }
                }
            });

            document.getElementById('submitButton').disabled = !allValid;
        }

        // Initial check to disable the button on load
        document.addEventListener('DOMContentLoaded', function() {
            checkFormValidity();
        });
    </script>

     <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>

 @endsection
