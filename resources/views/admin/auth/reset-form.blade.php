<!DOCTYPE html>

<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Admin | KharidoBey</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{ asset('assets/admin/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/admin/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('assets/admin/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}" />

  


  <!-- FAVICON -->
  <link href="{{ asset('assets/admin/images/favicon.png') }}" rel="shortcut icon" />

  <script src="{{ asset('assets/admin/plugins/nprogress/nprogress.js') }}"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-md-10">
                <div class="card card-default mb-0">
                  <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                      <a class="w-auto pl-0" href="#">
                        <img src="{{ asset('assets/admin/images/logo/kharidoBey.png') }}" alt="Mono">
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-5 pb-5 pt-0">

                    <h4 class="text-dark mb-6 text-center">Now, You can enter the password and confirm password.</h4>

                    <form action="{{ route('reset.password') }}" method="POST">
                        @csrf
                      <div class="row">
                        <div class="form-group col-md-12 mb-4">
                          <input type="hidden" name="token" value="{{ $token }}" class="form-control">
                        <input type="email" readonly name="email" value="{{ $email ?? old('email') }}" class="form-control input-lg">
                        </div>
                        <div class="form-group col-md-12 ">
                          <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12 ">
                          <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your Confirm password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary btn-pill mb-4">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>

