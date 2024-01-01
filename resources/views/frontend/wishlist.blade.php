@extends('frontend.layout.master')
@section('title')
wishlist
@endsection
@section('content')
<style>
    .product-image{
        height: 140px;
        width: 100%;
    }
</style>
<!--breadcrumbs-->
<div class=breadcrumbs>
    <div class=container>
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class=breadcrumbs-content>
            <h1 class=page-title>Wishlist</h1>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <ul class=breadcrumb-nav>
            <li><a href="../"><i class="lni lni-home"></i> Home</a></li>
            <li>Wishlist</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="wishlist-content mb-5 py-5">
    <div class="container">
        <div class="row mb-5">
            <!-- wishlist product-->
            @if ($wishlists->count()>0)
            @foreach ($wishlists as  $wishlist)
            <div class="col-md-6">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class=single-product>
                      <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-12">
                          <div class=product-image>
                            <img src="{{asset($wishlist->product->image)}}" alt="wishlist_image">
                            <div class=button>
                                <form action="{{route('cart.add',['id'=>$wishlist->product_id])}}" method="post">
                                    @csrf
                                    <input type="hidden" value="1" name="qty">
                                    <button  type="submit" class=btn><i class="lni lni-cart"></i> Add to Cart</button>
                                </form>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="float-end ">
                                <a href="{{route('wishlist.delete', ['id'=>$wishlist->id])}}">
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </a>
                              </div>
                          <div class=product-info>
                            <span class=category>{{$wishlist->product->category->name}}</span>
                            <h4 class=title>
                              <a href=product-grids.html>{{$wishlist->product->name}}</a>
                            </h4>
                            <div class=price>
                              <span>{{$wishlist->product->selling_price}} Tk</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @else
                <h4 class="text-center text-danger">Wishlist is empty!</h4>
            @endif

        </div>
    </div>
  </section>


@endsection
