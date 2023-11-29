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
                                    <form action="{{route('confirm.order')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="customer_id" value="{{\Auth::guard('customer')->user()->id}}">
                                    <div class=row>
                                        <div class=col-md-12>
                                            <div class="single-form form-default">
                                                <label>Full Name</label>
                                                <div class=row>
                                                    <div class="col-md-12 form-input form">
                                                        <input type=text name="name" value="{{$customerDetails->name}}" placeholder="Enter your full name">
                                                      <div class="text-danger"> @error('name'){{$message}}@enderror</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class="single-form form-default">
                                                <label>Email Address</label>
                                                <div class="form-input form">
                                                    <input type="email" value="{{$customerDetails->email}}"  name="email" placeholder="Email Address">
                                                    <div class="text-danger"> @error('email'){{$message}}@enderror</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class="single-form form-default">
                                                <label>Phone Number</label>
                                                <div class="form-input form">
                                                    <input type="number" name="phone" placeholder="Phone Number">
                                                    <div class="text-danger"> @error('phone'){{$message}}@enderror</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class="single-form form-default">
                                                <label>NID </label>
                                                <div class="form-input form">
                                                    <input type=text name="nid" placeholder="NID">
                                                    <div class="text-danger"> @error('nid'){{$message}}@enderror</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class="single-form form-default">
                                                <label> State </label>
                                                <div class="form-input form">
                                                    <input type=text name="state" value="Bangladesh " placeholder="State">
                                                    <div class="text-danger"> @error('state'){{$message}}@enderror</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=col-md-12>
                                            <div class="single-form form-default" >
                                                <label>Delevary Address</label>
                                                <div class="form-input form">
                                                   <textarea  class="form-control py-2" name="delivery_address" placeholder="Delevary Address" cols="3" rows="3"></textarea>
                                                   <div class="text-danger"> @error('delivery_address'){{$message}}@enderror</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--payment method-->
                                        <div class="col-md-12 mt-3">
                                            <h6 class="text-info">Payment Method</h6>

                                        <div class=col-md-12>
                                            <div class="checkout-payment-option mt-1">
                                              <div class=payment-option-wrapper>
                                                <div class=single-payment-option>
                                                  <input type=radio name="payment_method" checked value="cod" id=shipping-1>
                                                  <label for=shipping-1>
                                                    <img src="https://png.pngtree.com/png-clipart/20210523/original/pngtree-cash-on-delivery-payment-vector-with-simple-style-png-image_6328180.png" alt="payemt method" style="height: 100px">
                                                    {{-- <p>Standerd Shipping</p> --}}
                                                  </label>
                                                </div>
                                                <div class=single-payment-option>
                                                  <input type=radio name="payment_method" value="online" id=shipping-2>
                                                  <label for=shipping-2>
                                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/011/060/258/small/pay-online-button-speech-bubbles-pay-online-text-colorful-web-template-illustration-vector.jpg" alt="payemt method" style="height: 100px">
                                                    {{-- <p>Standerd Shipping</p> --}}
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class=col-md-12>
                                            <div class="single-form button">
                                                <button type="submit"  class="btn btn info">Confirm order </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                    @php(Session::put('totalPayable', $totalPayable))
                                    @php(Session::put('shipping', $shipping))
                                    @php(Session::put('tax', $tax))
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
