@extends('frontend.layout.master')
@section('title')
home
@endsection
@section('content')
<style>
    .product-image img{
        height: 200px;
        width: 100%;
    }
</style>
<!--Hero slaider section-->

<section class=hero-area>
    <div class=container>
        <div class=row>
            <div class="col-lg-8 col-12 custom-padding-right">
                <div class=slider-head>

                    <div class=hero-slider>
                        @foreach ($banners as  $banner)
                        <div class=single-slider
                            style="background-image:url({{ asset($banner->product->image) }})">
                            <div class=content>
                                <h2>
                                   {{$banner->product->name}}
                                </h2>
                                <p>{!!$banner->product->short_description!!}</p>
                                <h3><span>Now Only</span> {{$banner->product->selling_price}} Tk</h3>
                                <div class=button>
                                    <a href="{{route('product.details',['id'=>$banner->product->id])}}" class=btn>Shop Now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class=row>
                    @foreach ($banners as $banner )
                    <div class="col-lg-12 col-md-6 col-12 md-custom-padding mt-2">

                        <div class=hero-small-banner
                            style="background-image:url({{ asset($banner->product->image) }})">
                            <div class=content>
                                <h2>
                                    {{$banner->product->name}}
                                </h2>
                                <h3>{{$banner->product->selling_price}} Tk</h3>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!--Featured category section-->
<section class="featured-categories section">
    <div class=container>
        <div class=row>
            <div class=col-12>
                <div class=section-title>
                    <h2>Featured Categories</h2>
                </div>
            </div>
        </div>
        <div class=row>
            @foreach ($categories as $category)
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-category>
                    <a href="{{route('product.list',['id'=>$category->id])}}">
                        <h5 class=heading>{{$category->name}}</h5>
                    </a>
                    <ul>
                        @foreach ($subCategories as $subCategory)
                        @if ($subCategory->category_id == $category->id)
                        <li><a href="{{route('subcategory.list',['id'=>$subCategory->id])}}">{{$subCategory->name}}</a></li>
                        @endif
                        @endforeach
                    </ul>
                    <div class=images>
                        <img
                            alt="category_image"
                            src="{{asset($category->image)}}" style="height: 200px; width:200px">
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>

<!--Trending product section-->
<section class="trending-product section">
    <div class=container>
        <div class=row>
            <div class=col-12>
                <div class=section-title>
                    <h2>Trending Product</h2>
                </div>
            </div>
        </div>
        <div class=row>
           @foreach ($products as $product )
           <div class="col-lg-3 col-md-6 col-12">

               <div class=single-product>
                   <div class=product-image>
                       <img  alt="#" src="{{asset($product->image)}}" >
                       @if ($product->discount)
                       <span class=sale-tag>{{$product->discount}}%</span>
                       @else
                       <span class=new-tag >New </span>
                       @endif
                       <div class=button>
                        <form action="{{route('cart.add',['id'=>$product->id])}}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="qty">
                           <button type="submit" class="btn mb-2"><i class="lni lni-cart"></i> Add to Cart</button>
                        </form>
                        </div>
                   </div>
                   <div class=product-info>
                       <span class=category> Category : {{$product->category->name}}</span>
                       {{-- <span class=category>Brand : {{$product->brand->name}}</span> --}}
                       <h4 class=title>
                           <a href="{{route('product.details',['id'=>$product->id])}}">{{$product->name}}</a>
                       </h4>
                       <div class=price>
                           <span>{{$product->selling_price}} Tk</span>
                           <span class=discount-price>{{$product->regular_price}} Tk</span>
                       </div>
                   </div>
               </div>

           </div>
           @endforeach
        </div>
    </div>
</section>

<!--Banner section-->
<section class="banner section ">
    <div class=container>
        <div class=row>
            @foreach ($banners as $banner )
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner"
                    style="background-image:url({{ asset($banner->product->image) }})">
                    <div class=content>
                        <h2>{{$banner->product->name}}</h2>
                        <p>{!!$banner->product->short_description!!}</p>
                        <div class=button>
                            <a href="{{route('product.details',['id'=>$banner->product->id])}}" class=btn>View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner custom-responsive-margin"
                    style="background-image:url({{ asset('website') }}/assets/images/banner/xbanner-2-bg.jpg.pagespeed.ic.VbAquGFVe0.jpg)">
                    <div class=content>
                        <h2>Smart Headphone</h2>
                        <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                            incididunt ut labore.</p>
                        <div class=button>
                            <a href=product-grids.html class=btn>Shop Now</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<!--Special offer section-->
<section class="special-offer section">
    <div class=container>
        <div class=row>
            <div class=col-12>
                <div class=section-title>
                    <h2>Special Offer</h2>
                </div>
            </div>
        </div>
        <div class=row>
            @if ($spacial_products->count()>0)
            <div class="col-lg-8 col-md-12 col-12">
                <div class=row>
                    @foreach ( $spacial_products as $spacial_product)
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class=single-product>
                            <div class=product-image>
                                <img  alt="spacial-product" src="{{asset($spacial_product->product->image)}}">
                                <div class=button>
                                    <a href=product-details.html class=btn><i class="lni lni-cart"></i> Add to
                                        Cart</a>
                                </div>
                            </div>
                            <div class=product-info>
                                <span class=category>{{$spacial_product->product->category->name}}</span>
                                <h4 class=title>
                                    <a href={{route('product.details',['id'=>$spacial_product->product_id])}}>{{$spacial_product->product->name}}</a>
                                </h4>
                                <div class=price>
                                    <span>{{$spacial_product->selling_price}} Tk</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

                @foreach ($singleBanners as $singleBanner )

                <div class="single-banner right mt-2"
                    style="background-image:url({{ asset($singleBanner->product->image) }}">
                    <div class=content>
                        <h2>{{$singleBanner->product->name}}</h2>
                        <p>{{$singleBanner->product->short_description}}</p>
                        <div class=price>
                            <span>{{$singleBanner->product->selling_price}}Tk</span>
                        </div>
                        <div class=button>
                            <a href="{{route('product.details',['id'=>$singleBanner->product->id])}}" class=btn>Shop Now</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-lg-4 col-md-12 col-12">
                @foreach ($T_spacialProduct as $spacial_product )
                <div class=offer-content>
                    <div class=image>
                        <img alt="#" src="{{asset($spacial_product->product->image)}}">
                        <span class=sale-tag>-50%</span>
                    </div>
                    <div class=text>
                        <h2><a href=product-grids.html>{{$spacial_product->product->name}}</a></h2>
                        <div class=price>
                            <span>{{$spacial_product->selling_price}} Tk</span>
                            <span class=discount-price>{{$spacial_product->product->regular_price}} Tk</span>
                        </div>
                        <h4 class="text-center text-warning">Eid offer</h4>
                    </div>
                    {{-- <div class=box-head>
                        <div class=box>
                            <h1 id=days>000</h1>
                            <h2 id=daystxt>Days</h2>
                        </div>
                        <div class=box>
                            <h1 id=hours>00</h1>
                            <h2 id=hourstxt>Hours</h2>
                        </div>
                        <div class=box>
                            <h1 id=minutes>00</h1>
                            <h2 id=minutestxt>Minutes</h2>
                        </div>
                        <div class=box>
                            <h1 id=seconds>00</h1>
                            <h2 id=secondstxt>Secondes</h2>
                        </div>
                    </div> --}}
                    <div class=box-head>
                       <div>Starting date time:{{$spacial_product->starting_time}}</div>
                       <div> Ending date time: {{$spacial_product->ending_time}}</div>

                    </div>
                    <div style="background: rgb(204, 24, 24);" class=alert>
                        <h1 style="padding: 50px 80px;color: white;">We are sorry, Event ended ! </h1>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-danger text-center"> Spacial product comming soon. </p>
            @endif
        </div>
    </div>
</section>

<!--home product list section-->
<section class="home-product-list section">
    <div class=container>
        <div class=row>
            <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                <h4 class=list-title>Best Sellers</h4>

                <div class=single-list>
                    <div class=list-image>
                        <a href=product-grids.html><img
                                data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/home-product-list/x01.jpg.pagespeed.ic.aFGrpkZ-YS.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href=product-grids.html>GoPro Hero4 Silver</a>
                        </h3>
                        <span>$287.99</span>
                    </div>
                </div>


                <div class=single-list>
                    <div class=list-image>
                        <a href=product-grids.html><img
                                data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/home-product-list/x02.jpg.pagespeed.ic.evnaIOAaSH.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href=product-grids.html>Puro Sound Labs BT2200</a>
                        </h3>
                        <span>$95.00</span>
                    </div>
                </div>


                <div class=single-list>
                    <div class=list-image>
                        <a href=product-grids.html><img
                                data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/home-product-list/x03.jpg.pagespeed.ic.9cMfTBVtlQ.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href=product-grids.html>HP OfficeJet Pro 8710</a>
                        </h3>
                        <span>$120.00</span>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                <h4 class=list-title>New Arrivals</h4>

                <div class=single-list>
                    <div class=list-image>
                        <a href=product-grids.html><img
                                data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/home-product-list/x04.jpg.pagespeed.ic.F7KQPplcrb.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href=product-grids.html>iPhone X 256 GB Space Gray</a>
                        </h3>
                        <span>$1150.00</span>
                    </div>
                </div>


                <div class=single-list>
                    <div class=list-image>
                        <a href=product-grids.html><img
                                data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/home-product-list/x05.jpg.pagespeed.ic.CtDfEoUd8D.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href=product-grids.html>Canon EOS M50 Mirrorless Camera</a>
                        </h3>
                        <span>$950.00</span>
                    </div>
                </div>


                <div class=single-list>
                    <div class=list-image>
                        <a href=product-grids.html><img
                                data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/home-product-list/x06.jpg.pagespeed.ic.V0fUUC8Z5C.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href=product-grids.html>Microsoft Xbox One S</a>
                        </h3>
                        <span>$298.00</span>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <h4 class=list-title>Top Rated</h4>
                @foreach ($reviews as $review )
                <div class=single-list>
                    <div class=list-image>
                        <a href="{{route('product.details',['id'=>$review->product->id])}}">
                            <img alt="#" src="{{asset($review->product->image)}}">
                        </a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href="{{route('product.details',['id'=>$review->product->id])}}">{{$review->Product->name}}</a>
                        </h3>
                        <span>{{$review->Product->selling_price}} Tk</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<!--brand section-->
<div class=brands>
    <div class=container>
        <div class=row>
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <h2 class=title>Popular Brands</h2>
            </div>
        </div>
        <div class=brands-logo-wrapper>
            <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                @foreach ($brands as  $brand)
                <div class=brand-logo>
                    <img
                        alt="Brnad-img" src="{{ asset($brand->image) }}"
                        >
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<!--Blog section-->
<section class="blog-section section">
    <div class=container>
        <div class=row>
            <div class=col-12>
                <div class=section-title>
                    <h2>Our Latest Blog</h2>
                </div>
            </div>
        </div>

        <div class=row>
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-12">
                <div class=single-blog>
                    <div class=blog-img>
                        <a href=blog-single-sidebar.html>
                            <img  alt="blog_image" src="{{asset($blog->image)}}" style="height: 250px">
                        </a>
                    </div>
                    <div class=blog-content>
                        <a class=category >{{$blog->BlogCategory->name}}</a>
                        <h4>
                            <a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->heading}}</a>
                        </h4>
                        <p>{!!Str::limit($blog->content, 150)!!}</p>
                        <div class=button>
                            <a href="{{route('blog.details',['id'=>$blog->id])}}" class=btn>Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>

<!--shipping info section-->
<section class=shipping-info>
    <div class=container>
        <ul>

            <li>
                <div class=media-icon>
                    <i class="lni lni-delivery"></i>
                </div>
                <div class=media-body>
                    <h5>Free Shipping</h5>
                    <span>On order over $99</span>
                </div>
            </li>

            <li>
                <div class=media-icon>
                    <i class="lni lni-support"></i>
                </div>
                <div class=media-body>
                    <h5>24/7 Support.</h5>
                    <span>Live Chat Or Call.</span>
                </div>
            </li>

            <li>
                <div class=media-icon>
                    <i class="lni lni-credit-cards"></i>
                </div>
                <div class=media-body>
                    <h5>Online Payment.</h5>
                    <span>Secure Payment Services.</span>
                </div>
            </li>

            <li>
                <div class=media-icon>
                    <i class="lni lni-reload"></i>
                </div>
                <div class=media-body>
                    <h5>Easy Return.</h5>
                    <span>Hassle Free Shopping.</span>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection
