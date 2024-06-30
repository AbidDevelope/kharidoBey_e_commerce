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
		<form action="{{ route('admin.register.post') }}" method="POST">
            @csrf
			<div class="login-box">
				<div class="login-form">
					<a href="index.html" class="login-logo">
						<img src="{{ asset('assets/admin/images/icon/kharidoBey.png') }}" alt="Vico Admin" />
					</a>
					<div class="login-welcome">
						Welcome back, <br />Please create your admin account.
					</div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"> 
						@error('name') <span style="color: red" id="name-error">{{ $message }}</span>  @enderror
                    </div>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
						@error('email')
							<span style="color: red" id="email-error">{{ $message }}</span>
						@enderror
					</div>
                    <div class="mb-3">
						<label class="form-label">Mobile</label>
						<input type="text" class="form-control" name="mobile" id="mobile" maxlength="10" onkeypress="return /[0-9.]/i.test(event.key)"  value="{{ old('mobile') }}">
						@error('mobile')
							<span style="color: red" id="mobile-error">{{ $message }}</span>
						@enderror
					</div>
                    <div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" name="password" id="password">
						@error('password')
							<span style="color: red" id="password-error">{{ $message }}</span>
						@enderror
					</div>
					<div class="mb-3">
						<div class="d-flex justify-content-between">
							<label class="form-label">Confirm Password</label>
						</div>
						<input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
							<span class="error-message" id="password_confirmation-error">{{ $message }}</span>
						@enderror
					</div>
					<div class="login-form-actions">
						<button type="submit" class="btn"> <span class="icon"> <i class="bi bi-arrow-right-circle"></i> </span>
							Signup</button>
					</div>
					<div class="login-form-actions">
						<button type="button" class="btn"> <img src="{{ asset('assets/admin/images/google.svg') }}" class="login-icon"
								alt="Signup using Gmail">
							Signup using Gmail</button>
					</div>
					<div class="login-form-footer">
						<div class="additional-link">
							Already have an account? <a href="{{ route('admin.login.get') }}"> Login</a>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- Login box end -->


		{{-- Input Error Validation script --}}
         <script>
			document.addEventListener('DOMContentLoaded', function () {
            var inputs = document.querySelectorAll('.form-control');
            inputs.forEach(function (input) {
                var errorSpan = document.getElementById(input.name + '-error');

                if (errorSpan && errorSpan.textContent.trim() !== '') {
                    errorSpan.style.display = 'inline';
                }

                input.addEventListener('input', function () {
                    if (input.value.trim() === '') {
                        errorSpan.style.display = 'inline';
                    } else {
                        errorSpan.style.display = 'none'; 
                    }

					 // Additional handling for password confirmation
					 if (input.name === 'password' || input.name === 'password_confirmation') {
                        var password = document.getElementById('password').value;
                        var passwordConfirmation = document.getElementById('password_confirmation').value;
                        var passwordConfirmationErrorSpan = document.getElementById('password_confirmation-error');
                        
                        if (password !== passwordConfirmation) {
                            passwordConfirmationErrorSpan.textContent = 'password do not match';
                            passwordConfirmationErrorSpan.style.display = 'inline';
                        } else {
                            passwordConfirmationErrorSpan.style.display = 'none';
                        }
                    }

					// Additional handling for mobile number validation
                    if (input.name === 'mobile') {
                        var mobileErrorSpan = document.getElementById('mobile-error');
                        if (!/^[0-9]+$/.test(input.value)) {
                            mobileErrorSpan.textContent = 'Only numbers are allowed';
                            mobileErrorSpan.style.display = 'inline';
                        } else {
                            mobileErrorSpan.style.display = 'none';
                        }
                    }
                });
            });
        });
		 </script>
		{{-- Input Error Validation script --}}

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

