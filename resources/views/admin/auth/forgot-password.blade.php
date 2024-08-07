@include('admin.includes.link')
<body class="login-container">
    <!-- Login box start -->
    <form action="{{ route('forgot.password.submit') }}" method="POST">
        @csrf
        <div class="login-box">
            <div class="login-form">
                <a href="#" class="login-logo">
                    <img src="{{ asset('assets/admin/images/icon/kharidoBey.png') }}" alt="Admin Logo" />
                </a>
                <div class="login-welcome">
                    In order to access your account,<br />please enter the email id you provided during the registration
                    process.
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="login-form-actions">
                    <button type="submit" class="btn"> <span class="icon"> <i class="bi bi-arrow-right-circle"></i> </span>
                        Submit</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Login box end -->
</body>