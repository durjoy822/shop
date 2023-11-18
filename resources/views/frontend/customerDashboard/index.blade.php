@extends('frontend.layout.master')
@section('title')
   Shop dashboard
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
    <!--session message-->
        @if(Session::has('message'))
        <div class="alert alert-block alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <i class=" fa fa-check cool-green "></i>
            {{ nl2br(Session::get('message')) }}
        </div>
        @endif
<!--Account info setting section-->
    <section class="about-us section ">
        <div class=container>
           <div class="row">
            <div class="col-md-4 pt-4">
                <div class="card">
                    <div class="card-body ">
                        <div class="px-3">
                            <i class="fas fa-user-circle " ></i> &nbsp; &nbsp; <a href="" class="text-dark"> Profile</a>
                        </div>
                        <hr class="m-2">
                        <div class="px-3">
                            <i class="fa-solid fa-folder-open"></i> &nbsp; &nbsp; <a href="" class="text-dark"> Orders</a>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </div>
                        <hr class="m-2">
                        <div class="px-3">
                            <i class="fa-solid fa-address-card"></i> &nbsp; &nbsp; <a href="" class="text-dark"> Accounts</a>
                        </div>
                        <hr class="m-2">
                        <div class="px-3">
                            <i class="fa-solid fa-gear"></i>  &nbsp; &nbsp; <a href="" class="text-dark"> Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 pt-4">
                <div class="card">
                    <div class="card-body ">
                        <div class="order">
                        <div class="text-center"><h5>My Recent Orders</h5></div>
                        <hr>
                        <table class="table table-bordered table-striped table-responsive">
                            <tr>
                            <th>Sno</th>
                            <th>Order No</th>
                            <th>Order Date</th>
                            <th>Order Qty</th>
                            <th>Total</th>
                            </tr>
                        </table>
                    </div>
                </div>
                </div>
            </div>
           </div>
        </div>
    </section>
    
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
@endsection

