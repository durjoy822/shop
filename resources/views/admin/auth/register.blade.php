<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register </title>
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
                      <h1 class="h4 text-gray-900 mb-4">Register</h1>
                    </div>
                    <form action="{{route('register.info')}}" method="post" class="user">
                        @csrf
                      <div class="form-group">
                        <input type="text" class="form-control" value="{{old('name')}}" name="name"
                          placeholder="Enter Full Name">
                          <div class="text-danger"> @error('name'){{$message}} @enderror</div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}"
                          placeholder="Enter Email Address">
                          <div class="text-danger"> @error('email'){{$message}} @enderror</div>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="text-danger"> @error('password'){{$message}} @enderror</div>

                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                      </div>
                      <hr>
                    </form>

                    <div class="text-center">
                      <a class="font-weight-bold small" href="{{route('home')}}">Back to Home page!</a> &nbsp;
                      <a class="font-weight-bold small" href="{{route('login')}}">Back to login !</a>
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
  </body>
</html>
