@include('admin.includes.link')

<body class="login-container">

    <!-- Loading wrapper start -->
    <!-- <div id="loading-wrapper">
   <div class="spinner">
                <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
    <div class="line4"></div>
    <div class="line5"></div>
    <div class="line6"></div>
            </div>
  </div> -->
    <!-- Loading wrapper end -->

    <!-- Login box start -->
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="login-box">
            <div class="login-form">
                <a href="index.html" class="login-logo">
                    <img src="{{ asset('assets/admin/images/icon/kharidoBey.png') }}" alt="Vico Admin" />
                </a>
                <div class="login-welcome">
                    Welcome back, <br />Please login to your admin account.
                </div>
                <div class="mb-3">
					@if (Session::has('success'))
                        <div class="alert alert-success" id="success-message">
                            <span>{{ Session::get('success') }}</span>
                        </div>
                    @endif

                    @if (Session::has('error'))
                        <div class="alert alert-danger" id="error-message">
                           <span>{{ Session::get('error') }}</span>
                        </div>
                    @endif
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <span style="color: red" id="email-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label class="form-label">Password</label>
                        <a href="#" class="btn-link ml-auto">Forgot password?</a>
                    </div>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        <span style="color: red" id="password-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="login-form-actions">
                    <button type="submit" class="btn"> <span class="icon"> <i
                                class="bi bi-arrow-right-circle"></i> </span>
                        Login</button>
                </div>
                <div class="login-form-actions">
                    <button type="button" class="btn"> <img src="{{ asset('assets/admin/images/google.svg') }}"
                            class="login-icon" alt="Login with Google">
                        Login with Google</button>
                    <button type="button" class="btn"> <img src="{{ asset('assets/admin/images/facebook.svg') }}"
                            class="login-icon" alt="Login with Facebook">
                        Login with Facebook</button>
                </div>
                <div class="login-form-footer">
                    <div class="additional-link">
                        Don't have an account? <a href="{{ route('admin.register.get') }}"> Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Login box end -->

    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            var errorMessage = document.getElementById('error-message');
            
            if (successMessage) {
                successMessage.style.display = 'none';
            }
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }, 3000);
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var inputs = document.querySelectorAll('.form-control');
            inputs.forEach(function(input){
               var errorSpan = document.getElementById(input.name + "-error");

               if(errorSpan && errorSpan.textContent.trim() !== '') {
                  errorSpan.style.display = 'inline';
               }

               input.addEventListener('input', function() {
                if(input.value.trim() === '') {
                    errorSpan.style.display = 'inline'; 
                }else { 
                    errorSpan.style.display = 'none';
                }
               });
            });
        });
    </script>

    <!-- *************
   ************ Required JavaScript Files *************
  ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/moment.js"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>

</body>
