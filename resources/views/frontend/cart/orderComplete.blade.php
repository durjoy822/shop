@extends('frontend.layout.master')
@section('title')
    shop Cart
@endsection
@section('content')
    <!--breadcrumbs-->
    <div class=breadcrumbs>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class=breadcrumbs-content>
                        <h1 class=page-title>checkout</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class=breadcrumb-nav>
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href=index.html>Shop</a></li>
                        <li>checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

  <!--checkout-->
    <section class="checkout-wrapper section">
        <div class=container>
            <div class="row justify-content-center">
                <!---customer address information section -->
                <div class=col-lg-12>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center text-warning">
                              <h4> {{Session::get('complete')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
