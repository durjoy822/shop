<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.layout.head');
    <style>
          body{
            height: 500px;
            width: 100%;
        }
        .reset .img{
            height: 100px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mb-4">
        <div class="card">
            <div class="card-body ">
                <h3 class="text-center">Password reset</h3>
                <div class="row mb-3  offset-md-2 ">
                    <div class="col-md-2">
                        <!-- Company logo -->
                        <img class="img-fluid" src="https://i.pinimg.com/736x/7b/71/b8/7b71b8cc7374cd25a71066e059e77a31.jpg" alt="Company Logo">
                    </div>
                    <div class="col-md-6  ">
                        To reset your SHOP login password, please click this link:
                        <div class="mt-2">
                            <button class="btn btn-info form-control">
                                <a href="{{ route('reset.form', $token) }}">Reset Password</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
