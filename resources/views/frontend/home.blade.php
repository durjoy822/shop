@extends('frontend.layout.master')
@section('title')
home
@endsection
@section('content')

<!--Hero slaider section-->

<section class=hero-area>
    <div class=container>
        <div class=row>
            <div class="col-lg-8 col-12 custom-padding-right">
                <div class=slider-head>

                    <div class=hero-slider>

                        <div class=single-slider
                            style="background-image:url({{ asset('website') }}/assets/images/hero/xslider-bg1.jpg.pagespeed.ic.QB-k7UuPjB.jpg)">
                            <div class=content>
                                <h2><span>No restocking fee ($35 savings)</span>
                                    M75 Sport Watch
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                    labore dolore magna aliqua.</p>
                                <h3><span>Now Only</span> $320.99</h3>
                                <div class=button>
                                    <a href=product-grids.html class=btn>Shop Now</a>
                                </div>
                            </div>
                        </div>


                        <div class=single-slider
                            style="background-image:url({{ asset('website') }}/assets/images/hero/xslider-bg2.jpg.pagespeed.ic.nEcfNovovG.jpg)">
                            <div class=content>
                                <h2><span>Big Sale Offer</span>
                                    Get the Best Deal on CCTV Camera
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                    labore dolore magna aliqua.</p>
                                <h3><span>Combo Only:</span> $590.00</h3>
                                <div class=button>
                                    <a href=product-grids.html class=btn>Shop Now</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class=row>
                    <div class="col-lg-12 col-md-6 col-12 md-custom-padding">

                        <div class=hero-small-banner
                            style="background-image:url({{ asset('website') }}/assets/images/hero/xslider-bnr.jpg.pagespeed.ic.71c5Z3kdJp.jpg)">
                            <div class=content>
                                <h2>
                                    <span>New line required</span>
                                    iPhone 12 Pro Max
                                </h2>
                                <h3>$259.99</h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 col-md-6 col-12">

                        <div class="hero-small-banner style2">
                            <div class=content>
                                <h2>Weekly Sale!</h2>
                                <p>Saving up to 50% off all online store items this week.</p>
                                <div class=button>
                                    <a class=btn href=product-grids.html>Shop Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
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
                       <img  alt="#" src="{{asset($product->image)}}" style="height: 250px">
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
<section class="banner section">
    <div class=container>
        <div class=row>
            <div class="col-lg-6 col-md-6 col-12">
                <div class=single-banner
                    style="background-image:url({{ asset('website') }}/assets/images/banner/xbanner-1-bg.jpg.pagespeed.ic.o5kkJh_gbP.jpg)">
                    <div class=content>
                        <h2>Smart Watch 2.0</h2>
                        <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                        <div class=button>
                            <a href=product-grids.html class=btn>View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
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
            </div>
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
            <div class="col-lg-8 col-md-12 col-12">
                <div class=row>
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class=single-product>
                            <div class=product-image>
                                <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/products/xproduct-3.jpg.pagespeed.ic.vRmHjPpu2i.jpg"
                                    alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                <div class=button>
                                    <a href=product-details.html class=btn><i class="lni lni-cart"></i> Add to
                                        Cart</a>
                                </div>
                            </div>
                            <div class=product-info>
                                <span class=category>Camera</span>
                                <h4 class=title>
                                    <a href=product-grids.html>WiFi Security Camera</a>
                                </h4>
                                <ul class=review>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><span>5.0 Review(s)</span></li>
                                </ul>
                                <div class=price>
                                    <span>$399.00</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class=single-product>
                            <div class=product-image>
                                <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/products/xproduct-8.jpg.pagespeed.ic.DLVHLzRhsg.jpg"
                                    alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                <div class=button>
                                    <a href=product-details.html class=btn><i class="lni lni-cart"></i> Add to
                                        Cart</a>
                                </div>
                            </div>
                            <div class=product-info>
                                <span class=category>Laptop</span>
                                <h4 class=title>
                                    <a href=product-grids.html>Apple MacBook Air</a>
                                </h4>
                                <ul class=review>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><span>5.0 Review(s)</span></li>
                                </ul>
                                <div class=price>
                                    <span>$899.00</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class=single-product>
                            <div class=product-image>
                                <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/products/xproduct-6.jpg.pagespeed.ic.GGb3AeLttK.jpg"
                                    alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                <div class=button>
                                    <a href=product-details.html class=btn><i class="lni lni-cart"></i> Add to
                                        Cart</a>
                                </div>
                            </div>
                            <div class=product-info>
                                <span class=category>Speaker</span>
                                <h4 class=title>
                                    <a href=product-grids.html>Bluetooth Speaker</a>
                                </h4>
                                <ul class=review>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>4.0 Review(s)</span></li>
                                </ul>
                                <div class=price>
                                    <span>$70.00</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="single-banner right"
                    style="background-image:url({{ asset('website') }}/assets/images/banner/xbanner-3-bg.jpg.pagespeed.ic.tC7s97FGJm.jpg);margin-top:30px">
                    <div class=content>
                        <h2>Samsung Notebook 9 </h2>
                        <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                            incididunt ut labore.</p>
                        <div class=price>
                            <span>$590.00</span>
                        </div>
                        <div class=button>
                            <a href=product-grids.html class=btn>Shop Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class=offer-content>
                    <div class=image>
                        <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/offer/xoffer-image.jpg.pagespeed.ic.-7hl7Bh4pH.jpg"
                            alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                        <span class=sale-tag>-50%</span>
                    </div>
                    <div class=text>
                        <h2><a href=product-grids.html>Bluetooth Headphone</a></h2>
                        <ul class=review>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Review(s)</span></li>
                        </ul>
                        <div class=price>
                            <span>$200.00</span>
                            <span class=discount-price>$400.00</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry incididunt ut
                            eiusmod tempor labores.</p>
                    </div>
                    <div class=box-head>
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
                    </div>
                    <div style="background: rgb(204, 24, 24);" class=alert>
                        <h1 style="padding: 50px 80px;color: white;">We are sorry, Event ended ! </h1>
                    </div>
                </div>
            </div>
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
