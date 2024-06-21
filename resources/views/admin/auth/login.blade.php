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
		<form action="index.html">
			<div class="login-box">
				<div class="login-form">
					<a href="index.html" class="login-logo">
						<img src="{{ asset('assets/admin/images/icon/kharidoBey.png') }}" alt="Vico Admin" />
					</a>
					<div class="login-welcome">
						Welcome back, <br />Please login to your admin account.
					</div>
					<div class="mb-3">
						<label class="form-label">Username</label>
						<input type="text" class="form-control">
					</div>
					<div class="mb-3">
						<div class="d-flex justify-content-between">
							<label class="form-label">Password</label>
							<a href="forgot-password.html" class="btn-link ml-auto">Forgot password?</a>
						</div>
						<input type="password" class="form-control">
					</div>
					<div class="login-form-actions">
						<button type="submit" class="btn"> <span class="icon"> <i class="bi bi-arrow-right-circle"></i> </span>
							Login</button>
					</div>
					<div class="login-form-actions">
						<button type="submit" class="btn"> <img src="{{ asset('assets/admin/images/google.svg') }}" class="login-icon"
								alt="Login with Google">
							Login with Google</button>
						<button type="submit" class="btn"> <img src="{{ asset('assets/admin/images/facebook.svg') }}" class="login-icon"
								alt="Login with Facebook">
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
