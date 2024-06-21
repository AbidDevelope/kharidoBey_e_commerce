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
                        <input type="text" class="form-control" name="name">
						@error('name') <span style="color: red">{{ $message }}</span>  @enderror
                    </div>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="email" class="form-control" name="email">
						@error('email')
							<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
                    <div class="mb-3">
						<label class="form-label">Mobile</label>
						<input type="text" class="form-control" name="mobile">
						@error('mobile')
							<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
                    <div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" name="password">
						@error('password')
							<span style="color: red">{{ $message }}</span>
						@enderror
					</div>
					<div class="mb-3">
						<div class="d-flex justify-content-between">
							<label class="form-label">Confirm Password</label>
						</div>
						<input type="password" class="form-control" name="password_confirmation">
                        @error('password_confirmation')
							<span style="color: red">{{ $message }}</span>
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

