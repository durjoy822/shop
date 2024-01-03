@extends('frontend.layout.master')
@section('title')
shop product list
@endsection
@section('content')
<!--breadcrumbs-->
<div class=breadcrumbs>
    <div class=container>
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class=breadcrumbs-content>
            <h1 class=page-title>Shop List</h1>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <ul class=breadcrumb-nav>
            <li><a href="../"><i class="lni lni-home"></i> Home</a></li>
            <li>Shop List</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<!--product list-->

  <section class="product-grids section">
    <div class=container>
      <div class=row>
        <div class="col-lg-3 col-12">

          <div class=product-sidebar>
            <div class=single-widget>
              <h3>All Categories</h3>
              <ul class=list>
                @foreach ($categories as $category)
                <li>
                  <a href=" {{route('product.list',['id'=>$category->id])}}">{{$category->name}} </a><span>(2)</span>
                </li>
                @endforeach

              </ul>
            </div>


            <div class="single-widget range">
              <h3>Price Range</h3>
              <input type=range class=form-range name=range step=1 min=100 max=10000 value=10
                onchange="rangePrimary.value=value">
              <div class=range-inner>
                <label>$</label>
                <input type=text id=rangePrimary placeholder=100 />
              </div>
            </div>


            <div class="single-widget condition">
              <h3>Filter by Price</h3>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault1>
                <label class=form-check-label for=flexCheckDefault1>
                  $50 - $100L (208)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault2>
                <label class=form-check-label for=flexCheckDefault2>
                  $100L - $500 (311)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault3>
                <label class=form-check-label for=flexCheckDefault3>
                  $500 - $1,000 (485)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault4>
                <label class=form-check-label for=flexCheckDefault4>
                  $1,000 - $5,000 (213)
                </label>
              </div>
            </div>


            <div class="single-widget condition">
              <h3>Filter by Brand</h3>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault11>
                <label class=form-check-label for=flexCheckDefault11>
                  Apple (254)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault22>
                <label class=form-check-label for=flexCheckDefault22>
                  Bosh (39)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault33>
                <label class=form-check-label for=flexCheckDefault33>
                  Canon Inc. (128)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault44>
                <label class=form-check-label for=flexCheckDefault44>
                  Dell (310)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault55>
                <label class=form-check-label for=flexCheckDefault55>
                  Hewlett-Packard (42)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault66>
                <label class=form-check-label for=flexCheckDefault66>
                  Hitachi (217)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault77>
                <label class=form-check-label for=flexCheckDefault77>
                  LG Electronics (310)
                </label>
              </div>
              <div class=form-check>
                <input class=form-check-input type=checkbox value="" id=flexCheckDefault88>
                <label class=form-check-label for=flexCheckDefault88>
                  Panasonic (74)
                </label>
              </div>
            </div>

          </div>

        </div>
        <div class="col-lg-9 col-12">
          <div class=product-grids-head>
            <div class=product-grid-topbar>
              <div class="row align-items-center">
                <div class="col-lg-7 col-md-8 col-12">
                  <form action="#">
                    <div class="d-flex">
                        <label>Product Search:</label>
                        <input class="form-control" type=text placeholder="Search Here...">
                        <button class="btn btn-info" type=submit><i class="lni lni-search-alt"></i></button>
                    </div>

                  </form>
                </div>
                <div class="col-lg-5 col-md-4 col-12">
                  <nav>
                    <div class="nav nav-tabs" id=nav-tab role=tablist>
                      <button class="nav-link " id=nav-grid-tab data-bs-toggle=tab data-bs-target="#nav-grid"
                        type=button role=tab aria-controls=nav-grid aria-selected=true><i
                          class="lni lni-grid-alt"></i></button>
                      <button class="nav-link active" id=nav-list-tab data-bs-toggle=tab data-bs-target="#nav-list"
                        type=button role=tab aria-controls=nav-list aria-selected=false><i
                          class="lni lni-list"></i></button>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
            <!--single product (coll-4) book view-->
            @if ($products->count()>0)
            <div class=tab-content id=nav-tabContent>
              <div class="tab-pane fade" id=nav-grid role=tabpanel aria-labelledby=nav-grid-tab>
                <div class=row>
                    @foreach ($products as $product)
                  <div class="col-lg-4 col-md-6 col-12">
                    <div class=single-product>
                      <div class=product-image>
                        <img src="{{asset($product->image)}}"  alt="product_image" style="height: 250px">
                        @if ($product->discount)
                        <span class=sale-tag>{{$product->discount}}%</span>
                        @else
                        <span class=new-tag>New</span>
                        @endif
                        <div class=button>
                            <form action="{{route('cart.add',['id'=>$product->id])}}" method="post">
                                @csrf
                                <input type="hidden" value="1" name="qty">
                                <button  type="submit" class=btn><i class="lni lni-cart"></i> Add to Cart</button>
                            </form>
                        </div>
                      </div>
                      <div class=product-info>
                        <span class=category>{{$product->category->name}}</span>
                        <h4 class=title>
                          <a href="{{route('product.details',['id'=>$product->id])}}">{{$product->name}}</a>
                        </h4>
                        <div class=price>
                          <span>{{$product->selling_price}} Tk</span>
                          <span class=discount-price>{{$product->regular_price}}</span>
                        </div>
                      </div>
                    </div>

                  </div>
                  @endforeach
                </div>
                <!--pagination-->
                <div class=row>
                  <div class=col-12>
                    <div class="pagination left">
                         <!--styling pagination-->
                     <div >
                        {{ $products->links('frontend.layout.defaultPagination') }}
                       </div>
                       <!--styling pagination-->
                    </div>

                  </div>
                </div>
              </div>



              <!--single product (coll-12 ) div view-->
              <div class="tab-pane show active fade" id=nav-list role=tabpanel aria-labelledby=nav-list-tab>
                <div class=row>
                    @foreach ($products as $product)
                    <div class="col-lg-12 col-md-12 col-12">

                      <div class=single-product>
                        <div class="row align-items-center">
                          <div class="col-lg-4 col-md-4 col-12">
                            <div class=product-image>
                              <img src="{{asset($product->image)}}" alt="#" style="height:250px">
                              @if ($product->discount)
                              <span class=sale-tag>{{$product->discount}}%</span>
                              @else
                              <span class=new-tag>New</span>
                              @endif
                              <div class=button>
                                <form action="{{route('cart.add',['id'=>$product->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" value="1" name="qty">
                                    <button  type="submit" class=btn><i class="lni lni-cart"></i> Add to Cart</button>
                                </form>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-12">
                            <div class=product-info>
                              <span class=category>{{$product->category->name}}</span>
                              <h4 class=title>
                                <a href="{{route('product.details',['id'=> $product->id])}}">{{$product->name}}</a>
                              </h4>
                              <div class=price>
                                <span>{{$product->selling_price}} Tk</span>
                                <span class=discount-price>{{$product->regular_price}} Tk</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    @endforeach

                </div>
                <!--pagination-->
                <div class="row mt-3">
                  <div class=col-12>
                     <!--styling pagination-->
                     <div >
                        {{ $products->links('frontend.layout.defaultPagination') }}
                       </div>
                       <!--styling pagination-->
                   </div>
                  </div>
                </div>
              </div>
            </div>
            @else
            <p class="text-danger text-center mt-4 "> Product not found! </p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
