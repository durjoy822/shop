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
                    <div class="mb-3">
                      <h1 class="h4 text-gray-900 m-0">Forgot password</h1>
                      <small>Please inter your email address that you previeously login this site.</small>
                    </div>
                    <form action="{{route('login.check')}}" method="post" class="user">
                        @csrf
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" id="exampleInputEmail" aria-describedby="emailHelp"
                          placeholder="Enter Regiestered Email Address">
                      </div>
                      <div >
                          <input type="submit" class="btn btn-outline-primary"  value="Submit">
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
