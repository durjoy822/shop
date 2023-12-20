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
                              <div class="col-lg-12 col-md-12 col-12">

                                <div class=single-product>
                                  <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-4 col-12">
                                      <div class=product-image>
                                        <img src="https://cdn.shopify.com/s/files/1/0070/7032/files/image5_4578a9e6-2eff-4a5a-8d8c-9292252ec848.jpg?v=1620247043" alt="#">
                                        <div class=button>
                                          <a href=product-details.html class=btn><i class="lni lni-cart"></i> Add to
                                            Cart</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                      <div class=product-info>
                                        <span class=category>Watches</span>
                                        <h4 class=title>
                                          <a href=product-grids.html>Xiaomi Mi Band 5</a>
                                        </h4>
                                        <div class=price>
                                          <span>$199.00</span>
                                        </div>
                                        <div class="float-end ">
                                          <button class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-12 col-md-12 col-12">

                                <div class=single-product>
                                  <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-4 col-12">
                                      <div class=product-image>
                                        <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D" alt="#">
                                        <div class=button>
                                          <a href=product-details.html class=btn><i class="lni lni-cart"></i> Add to
                                            Cart</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                      <div class=product-info>
                                        <span class=category>Watches</span>
                                        <h4 class=title>
                                          <a href=product-grids.html>Xiaomi Mi Band 5</a>
                                        </h4>
                                        <div class=price>
                                          <span>$199.00</span>
                                        </div>
                                        <div class="float-end ">
                                          <button class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                            <div class=row>
                              <div class=col-12>

                                <div class="pagination left">
                                  <ul class=pagination-list>
                                    <li><a href="javascript:void(0)">1</a></li>
                                    <li class=active><a href="javascript:void(0)">2</a></li>
                                    <li><a href="javascript:void(0)">3</a></li>
                                    <li><a href="javascript:void(0)">4</a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
                                  </ul>
                                </div>

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



