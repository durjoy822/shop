@extends('frontend.layout.master')
@section('title')
  change password
@endsection
@section('content')

<!--breadcrumbs-->
    <div class=breadcrumbs>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class=breadcrumbs-content>
                        <h1 class=page-title>Customer Dashboard</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class=breadcrumb-nav>
                        <li><a href={{route('home')}}><i class="lni lni-home"></i> Home</a></li>
                        <li>Customer Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!--Account info setting section-->
    <section class="about-us section pt-4 ">
        <div class=container>
           <div class="row">
            <div class="col-md-4">
                @include('frontend.layout.dashboard_sidebar');
            </div>
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-body ">
                        <div class="order">
                        <div class="text-center"><h5>Change password</h5></div>
                        <hr>
                           <form action="{{route('cus_password.update',$customer->id)}}" method="post">
                            @csrf

                            <label class="mt-3" for="old_password">Old password</label>
                            <input class="form-control mt-2" type="text"  value="{{$customer->password}}" name="old_password">

                            <label class="mt-3" for="new_password">New password</label>
                            <input class="form-control mt-2" type="text" name="new_password">
                            <div class="text-danger"> @error('new_password') {{$message}} @enderror</div>

                            <label class="mt-3" for="confirm_password">Confirm password</label>
                            <input class="form-control mt-2" type="text" name="confirm_password">
                            <div class="text-danger"> @error('confirm_password') {{$message}} @enderror</div>

                            <div class="mt-3">
                                <input type="submit" class="btn btn-info">
                            </div>

                           </form>
                    </div>
                </div>
                </div>
            </div>
           </div>
        </div>
    </section>

@endsection



