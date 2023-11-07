<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.layout.head');
    <style>
        .reset .img{
            height: 70px;
            width: 70px;
        }
    </style>
</head>
<body>
    <div class="container mb-4">
        <div class="card">
            <div class="card-body ">
                {{-- <h4 class="text-center">
                      <img class="img-fluid" src="https://i.pinimg.com/736x/7b/71/b8/7b71b8cc7374cd25a71066e059e77a31.jpg" alt="Company Logo">
                        <span class="text-warning">Online shop</span>
                </h4> --}}
                <div class="row mb-3">
                    <div>{!!$mail['email_content']!!}</div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>

