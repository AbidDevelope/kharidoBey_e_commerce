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
                <a href="#" class="login-logo">
                    <img src="{{ asset('assets/admin/images/icon/kharidoBey.png') }}" alt="Vico Admin" />
                </a>
                <div class="login-welcome">
                    Welcome back, <br />Please login to your admin account.
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ session('email', old('email')) }}">
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label class="form-label">Password</label>
                        <a href="{{ route('forgot.password') }}" class="btn-link ml-auto">Forgot password?</a>
                    </div>
                    <input type="password" name="password" id="password" class="form-control">
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
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/admin/js/moment.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Main Js Required -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

</body>
