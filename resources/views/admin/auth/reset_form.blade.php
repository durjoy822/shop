<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forgot password</title>
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
                    <!--Session message-->
                    <div>
                        @if(Session::has('message'))
                        <div class="alert alert-block alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <i class=" fa fa-check cool-green "></i>
                            {{ nl2br(Session::get('message')) }}
                          </div>
                        @endif

                    </div>
                    <div class="mb-3">
                      <h1 class="h4 text-gray-900 m-0">Password reset form</h1>
                      <small>Fillup your new password creadential for reset your old password. </small>
                    </div>
                    <form action="{{route('new.password')}}" method="post" class="user">
                        @csrf
                        <input type="hidden" value="{{$token}}" name="token">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" id="exampleInputEmail" aria-describedby="emailHelp"
                          placeholder="Enter Regiestered Email Address">
                          <div class="text-danger">@error('email') {{$message}} @enderror</div>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="password"  id="exampleInputEmail" aria-describedby="emailHelp"
                          placeholder="Enter New Password">
                          <div class="text-danger">@error('password') {{$message}} @enderror</div>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password"  id="exampleInputEmail" aria-describedby="emailHelp"
                          placeholder="Confirm Password">
                          <div class="text-danger">@error('confirm_password') {{$message}} @enderror</div>
                      </div>
                      <div >
                          <input type="submit" class="btn btn-outline-primary"  value="Update">
                      </div>
                    </form>
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
