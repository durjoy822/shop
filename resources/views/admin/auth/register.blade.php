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
                    <form class="user">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name"
                          placeholder="Enter Full Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email"
                          placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                      </div>
                      {{-- <div class="form-group">
                        <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                          <input type="checkbox" class="custom-control-input" id="customCheck">
                          <label class="custom-control-label" for="customCheck">Remember
                            Me</label>
                        </div>
                      </div> --}}
                      <div class="form-group">
                        <a href="index.html" class="btn btn-primary btn-block">Register</a>
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
