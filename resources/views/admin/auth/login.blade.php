<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @include('admin.layout.head')
</head>
<body class="bg-gradient-login">
    <!-- Login Content -->
    <div class="container-login">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">
          <div class="card shadow-sm my-5">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-lg-12">
                  <div class="login-form">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    </div>
                    <form action="{{route('login.check')}}" method="post" class="user">
                        @csrf
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" value="{{$login->email}}" value="{{old('email')}}" id="exampleInputEmail" aria-describedby="emailHelp"
                          placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" value="12345678" class="form-control" id="exampleInputPassword" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                          <input type="checkbox" name="remember_token" class="custom-control-input" id="customCheck">
                          <label class="custom-control-label" for="customCheck">Remember
                            Me</label>
                            <span class="float-right"><a href="{{route('forgot')}}">Forgot password</a></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                      </div>
                      <hr>
                      <a href="{{route('google')}}" class="btn btn-google btn-block">
                        <i class="fab fa-google fa-fw"></i> Login with Google
                      </a>
                      <a href="index.html" class="btn btn-facebook btn-block">
                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                      </a>
                    </form>
                    <hr>
                    <div class="text-center">
                      <a class="font-weight-bold small" href="{{route('register')}}">Create an Account!</a>
                    </div>
                    <div class="text-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@include('admin.layout.script')

<script>
    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('success') }}");
    @endif
</script>
  </body>
</html>
