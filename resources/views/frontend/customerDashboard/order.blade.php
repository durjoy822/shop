@extends('frontend.layout.master')
@section('title')
  Order
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
                        <div class="text-center"><h5>Order</h5></div>
                        <hr>
                            <table class="table table-bordered table-responsive table-striped">
                                <tr>
                                    <th>SL </th>
                                    <th> Product Name</th>
                                    <th>unit price</th>
                                    <th>Qty</th>
                                    <th>Product total</th>
                                </tr>
                                <tr>
                                    <td>1 </td>
                                    <td> Digital watch</td>
                                    <td>300 tk </td>
                                    <td> 4</td>
                                    <td> 1200 tk</td>
                                </tr>
                                <tr>
                                    <td>2 </td>
                                    <td> Samsung s22 ultra</td>
                                    <td>120000 tk </td>
                                    <td> 1</td>
                                    <td> 120000 tk</td>
                                </tr>
                            </table>
                    </div>
                </div>
                </div>
            </div>
           </div>
        </div>
    </section>

@endsection



