@extends('frontend.layout.master')
@section('title')
  wishlist
@endsection
@section('content')
<style>
    .product-image img{
        height: 168px;
        width: 200px
    }
</style>
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
                        <div class="text-center"><h5>Wishlist</h5></div>
                        <hr>

                        <div class="tab-pane show active fade" id=nav-list role=tabpanel aria-labelledby=nav-list-tab>
                            <div class=row>
                                @if ($wishlists->count()>0)
                                @foreach ($wishlists as $wishlist)
                              <div class="col-lg-12 col-md-12 col-12">

                                <div class=single-product>
                                  <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-4 col-12">
                                      <div class=product-image>
                                        <img src="{{$wishlist->product->image}}" alt="#">
                                        <div class=button>
                                          <a href=product-details.html class=btn><i class="lni lni-cart"></i> Add to
                                            Cart</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                      <div class=product-info>
                                        <span class=category>Category name</span>
                                        <h4 class=title>
                                          <a href=product-grids.html>{{$wishlist->product->name}}</a>
                                        </h4>
                                        <div class=price>
                                          <span>{{$wishlist->product->selling_price}} Tk </span>
                                        </div>
                                        <div class="float-end ">
                                            <a href="{{route('wishlist.delete', ['id'=>$wishlist->id])}}">
                                          <button class="btn btn-sm btn-danger">Delete</button>
                                        </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                              @else
                              <div class="text-danger text-center"><p>Wishlist is empty!</p></div>
                              @endif

                            </div>
                            <div class="row mt-2">
                                <div >
                                    {{ $wishlists->links('frontend.layout.defaultPagination') }}
                                   </div>
                            </div>
                          </div>
                    </div>
                </div>
                </div>
            </div>
           </div>
        </div>
    </section>

@endsection



