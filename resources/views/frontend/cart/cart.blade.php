@extends('frontend.layout.master')
@section('title')
    customer dashboard
@endsection
@section('content')
<style>
    .rounded_remove{
        font-size: 20px;
    }
    .rounded_remove:hover{
        font-size: 25px;
        transition: 1s ;
    }
</style>
<!--breadcrumbs-->
<div class=breadcrumbs>
    <div class=container>
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class=breadcrumbs-content>
            <h1 class=page-title>Cart</h1>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <ul class=breadcrumb-nav>
            <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
            <li>Cart</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!--cart  section-->
  <div class="shopping-cart section">
    <div class=container>
        <div class="text-end  my-3 mx-2">
            {{-- <form action="{{route('cart.remove')}}" method="post"> --}}
               <a href="{{route('cart.remove')}}">
                <button class="btn btn-outline-info" style="transition: 1s; " type="submit" >
                    <i class="fa-solid fa-trash" style="color: #ee1737;"></i> <span class="text-dark">Remove All</span>
                </button>
            </a>
            {{-- </form> --}}
            </div>
      <div class=cart-list-head>
        <div class=cart-list-title>
          <div class=row>
            <div class="col-lg-1 col-md-1 col-12">
            </div>
            <div class="col-lg-4 col-md-3 col-12">
              <p>Product info</p>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
              <p>Quantity</p>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
              <p>Unit price </p>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
              <p>Total price </p>
            </div>
            <div class="col-lg-1 col-md-2 col-12">
              <p>Remove</p>
            </div>
          </div>
        </div>
        @foreach ($products as $product )
        <div class=cart-single-list>
          <div class="row align-items-center">
            <div class="col-lg-1 col-md-1 col-12">
              <a href=product-details.html>
                <img src="{{asset($product->attributes->image)}}"
                  alt="#"></a>
            </div>
            <div class="col-lg-4 col-md-3 col-12">
              <h5 class=product-name><a href=product-details.html>
                {{$product->name}}</a></h5>
              <p class=product-des>
                <span><em>Category:</em> {{$product->attributes->category}}</span>
                <span><em>Brand:</em> {{$product->attributes->brand}}</span>
              </p>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <form action="{{route('cart.update',['id'=>$product->id])}}" method="post">
                    @csrf
                        <div class="input-group">
                        <input type="number"  class="form-control " min="1" value="{{$product->quantity}}" name="qty">
                        <input type="submit" class="btn  btn-info" value="Update">
                    </div>
                    </form>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
              <p>{{number_format($product->price)}} TK</p>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
              <p>{{number_format($product->price * $product->quantity)}} TK</p>
            </div>
            <div class="col-lg-1 col-md-2 col-12">
              <a   href="{{route('cart.delete',['id'=>$product->id])}}">
                <i class="fa-regular fa-circle-xmark  rounded_remove" style="color: #f00a0a; "></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class=row>
        <div class=col-12>

          <div class=total-amount>
            <div class=row>
                <!--cupon section-->
              <div class="col-lg-8 col-md-6 col-12">
                <div class=left>
                  <div class=coupon>
                    <form action="#" target=_blank>
                      <input name=Coupon placeholder="Enter Your Coupon">
                      <div class=button>
                        <button class=btn>Apply Coupon</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--Cart Subtotal-->
              <div class="col-lg-4 col-md-6 col-12">
                <div class=right>
                  <ul>
                    <li>Cart Subtotal<span>{{number_format($sum)}} Tk</span></li>
                    <li>Shipping total<span>{{number_format($shipping)}} Tk</span></li>
                    <li>Tax <span>{{number_format($tax)}} Tk</span></li>
                    <hr>
                    <li class=last>Total payable<span>{{number_format($totalPayable)}} Tk</span></li>
                  </ul>
                  <div class=button>
                    <a href="{{route('checkout')}}" class=btn>Checkout</a>
                    <a href="{{route('home')}}" class="btn btn-alt">Continue shopping</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection
