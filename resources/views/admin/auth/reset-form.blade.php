@include('admin.includes.link')

<body class="login-container">
    <!-- Login box start -->
    <form action="{{ route('reset.password') }}" method="POST">
    @csrf
    <div class="login-box">
        <div class="login-form">
            <a href="#" class="login-logo">
                <img src="{{ asset('assets/admin/images/icon/kharidoBey.png') }}" alt="Admin Logo" />
            </a>
            <div class="login-welcome">
                Now, You can enter the password and confirm password.
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-2">
                <label class="form-label">Email</label>
                <input type="hidden" name="token" value="{{ $token }}" class="form-control">
                <input type="email" readonly name="email" value="{{ $email ?? old('email') }}" class="form-control">
            </div>

            <div class="mb-2">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-2">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password">
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="login-form-actions">
                <button type="submit" class="btn">
                    <span class="icon"><i class="bi bi-arrow-right-circle"></i></span> Submit
                </button>
            </div>
        </div>
    </div>
</form>

    <!-- Login box end -->
</body>