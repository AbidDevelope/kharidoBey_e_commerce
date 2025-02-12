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
                   Enter your email address and we will send you a link to reset your password.  
                </div>
                <div class="mb-2">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email" >
                    @if($errors->has('email'))
                       <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <input type="text" name="password" value="{{ old('password') }}" class="form-control" placeholder="Enter your password" >
                    @if($errors->has('password'))
                       <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="mb-2">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Enter your password" >
                    @if($errors->has('password'))
                       <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
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