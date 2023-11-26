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
                <div class=col-lg-8>
                    <div class=checkout-steps-form-style-1>
                        <ul id=accordionExample>
                            <li>
                                <h6 class="title text-info" data-bs-toggle=collapse data-bs-target="#collapseThree" aria-expanded=true
                                    aria-controls=collapseThree>Your Personal Details </h6>
                                <section class="checkout-steps-form-content collapse show" id=collapseThree
                                    aria-labelledby=headingThree data-bs-parent="#accordionExample">
                                    <div class=row>
                                        <div class=col-md-12>
                                            <div class="single-form form-default">
                                                <label>Full Name</label>
                                                <div class=row>
                                                    <div class="col-md-12 form-input form">
                                                        <input type=text name="name" placeholder="Inter your full name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class="single-form form-default">
                                                <label>Email Address</label>
                                                <div class="form-input form">
                                                    <input type="email" name="email" placeholder="Email Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class="single-form form-default">
                                                <label>Phone Number</label>
                                                <div class="form-input form">
                                                    <input type="number" name="phone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-md-12>
                                            <div class="single-form form-default">
                                                <label>Mailing Address</label>
                                                <div class="form-input form">
                                                    <input type=text placeholder="Mailing Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-md-12>
                                            <div class="single-form form-default">
                                                <label>Delevary Address</label>
                                                <div class="form-input form">
                                                   <textarea  class="form-control py-2" name="delivery_address" placeholder="Delevary Address" cols="5" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!--payment method-->
                                        <div class="col-md-12 mt-3">
                                            <h6 class="text-info">Payment Method</h6>
                                            <div class="mt-3">
                                                <label class="mb-2"><input type="radio" name="payment_method" checked value="1"> Cash on Delivery payment</label><br>
                                                <label><input type="radio" name="payment_method" checked value="2"> Online payment</label>
                                            </div>

                                        </div>
                                        <div class=col-md-12>
                                            <div class="single-form button">
                                                <button class=btn data-bs-toggle=collapse data-bs-target="#collapseFour"
                                                    aria-expanded=false aria-controls=collapseFour>next
                                                    step</button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=col-lg-4>
                    <div class=checkout-sidebar>
                        <!--cupon section-->
                        <div class=checkout-sidebar-coupon>
                            <p>Appy Coupon to get discount!</p>
                            <form action="#">
                                <div class="single-form form-default">
                                    <div class="form-input form">
                                        <input type=text placeholder="Coupon Code">
                                    </div>
                                    <div class=button>
                                        <button class=btn>apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--Shopping cart summary section-->
                        <div class="checkout-sidebar-price-table mt-30">
                            <h5 class=title>Shopping Cart Summery</h5>
                            <div class=sub-total-price>
                                @foreach (Cart::getContent() as $cartProduct )
                                <div class=total-price>
                                    <p class=value>{{$cartProduct->name}}- ({{ $cartProduct->price}} * {{$cartProduct->quantity}} )</p>
                                    <p class=price>{{$cartProduct->quantity * $cartProduct->price}} Tk</p>
                                </div>
                                @endforeach
                            </div>
                            <div class=total-payable>
                                <div class=payable-price>
                                    <p class=value>Subotal Price:</p>
                                    <p class=price>{{number_format($sum)}} Tk</p>
                                </div>
                                <div class=payable-price>
                                    <p class=value>Tax total :</p>
                                    <p class=price>{{number_format($tax)}} Tk</p>
                                </div>
                                <div class=payable-price>
                                    <p class=value>Shipping total:</p>
                                    <p class=price>{{number_format($shipping)}} Tk</p>
                                </div>
                                <hr>
                                <div class=payable-price>
                                    <p class=value>Total payable:</p>
                                    <p class=price>{{number_format($totalPayable)}} Tk</p>
                                </div>
                            </div>
                            <div class="price-table-btn button">
                                <a href="javascript:void(0)" class="btn btn-alt">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
