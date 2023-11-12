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
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class=row>
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-category>
                    <h3 class=heading>TV & Audios</h3>
                    <ul>
                        <li><a href=product-grids.html>Smart Television</a></li>
                        <li><a href=product-grids.html>QLED TV</a></li>
                        <li><a href=product-grids.html>Audios</a></li>
                        <li><a href=product-grids.html>Headphones</a></li>
                        <li><a href=product-grids.html>View All</a></li>
                    </ul>
                    <div class=images>
                        <img data-pagespeed-lazy-src="data:image/jpeg;base64,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"
                            alt="#"
                            src="data:image/jpeg;base64,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"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-category>
                    <h3 class=heading>Desktop & Laptop</h3>
                    <ul>
                        <li><a href=product-grids.html>Smart Television</a></li>
                        <li><a href=product-grids.html>QLED TV</a></li>
                        <li><a href=product-grids.html>Audios</a></li>
                        <li><a href=product-grids.html>Headphones</a></li>
                        <li><a href=product-grids.html>View All</a></li>
                    </ul>
                    <div class=images>
                        <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/featured-categories/fetured-item-2.png"
                            alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-category>
                    <h3 class=heading>Cctv Camera</h3>
                    <ul>
                        <li><a href=product-grids.html>Smart Television</a></li>
                        <li><a href=product-grids.html>QLED TV</a></li>
                        <li><a href=product-grids.html>Audios</a></li>
                        <li><a href=product-grids.html>Headphones</a></li>
                        <li><a href=product-grids.html>View All</a></li>
                    </ul>
                    <div class=images>
                        <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/featured-categories/fetured-item-3.png"
                            alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-category>
                    <h3 class=heading>Dslr Camera</h3>
                    <ul>
                        <li><a href=product-grids.html>Smart Television</a></li>
                        <li><a href=product-grids.html>QLED TV</a></li>
                        <li><a href=product-grids.html>Audios</a></li>
                        <li><a href=product-grids.html>Headphones</a></li>
                        <li><a href=product-grids.html>View All</a></li>
                    </ul>
                    <div class=images>
                        <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/featured-categories/fetured-item-4.png"
                            alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-category>
                    <h3 class=heading>Smart Phones</h3>
                    <ul>
                        <li><a href=product-grids.html>Smart Television</a></li>
                        <li><a href=product-grids.html>QLED TV</a></li>
                        <li><a href=product-grids.html>Audios</a></li>
                        <li><a href=product-grids.html>Headphones</a></li>
                        <li><a href=product-grids.html>View All</a></li>
                    </ul>
                    <div class=images>
                        <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/featured-categories/fetured-item-5.png"
                            alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-category>
                    <h3 class=heading>Game Console</h3>
                    <ul>
                        <li><a href=product-grids.html>Smart Television</a></li>
                        <li><a href=product-grids.html>QLED TV</a></li>
                        <li><a href=product-grids.html>Audios</a></li>
                        <li><a href=product-grids.html>Headphones</a></li>
                        <li><a href=product-grids.html>View All</a></li>
                    </ul>
                    <div class=images>
                        <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/featured-categories/fetured-item-6.png"
                            alt="#"
                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    </div>
                </div>

            </div>
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
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
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
                           <a href=product-details.html class="btn mb-2"><i class="lni lni-cart"></i> Add to Cart</a>
                       </div>
                   </div>
                   <div class=product-info>
                       <span class=category>{{$product->category->name}}</span>
                       <h4 class=title>
                           <a href="{{route('product.details',['id'=>$product->id])}}">{{$product->name}}</a>
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
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
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

                <div class=single-list>
                    <div class=list-image>
                        <a href=product-grids.html><img
                                data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/home-product-list/x07.jpg.pagespeed.ic.LRQsjgfm_s.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href=product-grids.html>Samsung Gear 360 VR Camera</a>
                        </h3>
                        <span>$68.00</span>
                    </div>
                </div>


                <div class=single-list>
                    <div class=list-image>
                        <a href=product-grids.html><img
                                data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/home-product-list/x08.jpg.pagespeed.ic.HuloKYFnZS.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href=product-grids.html>Samsung Galaxy S9+ 64 GB</a>
                        </h3>
                        <span>$840.00</span>
                    </div>
                </div>


                <div class=single-list>
                    <div class=list-image>
                        <a href=product-grids.html><img
                                data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/home-product-list/x09.jpg.pagespeed.ic.wWVNAXGYMB.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                    </div>
                    <div class=list-info>
                        <h3>
                            <a href=product-grids.html>Zeus Bluetooth Headphones</a>
                        </h3>
                        <span>$28.00</span>
                    </div>
                </div>

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
                    <h2>Our Latest News</h2>
                    <p>There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class=row>
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-blog>
                    <div class=blog-img>
                        <a href=blog-single-sidebar.html>
                            <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/blog/xblog-1.jpg.pagespeed.ic.24jdCeAtgl.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                        </a>
                    </div>
                    <div class=blog-content>
                        <a class=category href="javascript:void(0)">eCommerce</a>
                        <h4>
                            <a href=blog-single-sidebar.html>What information is needed for shipping?</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class=button>
                            <a href="javascript:void(0)" class=btn>Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-blog>
                    <div class=blog-img>
                        <a href=blog-single-sidebar.html>
                            <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/blog/xblog-2.jpg.pagespeed.ic.6L6xzKu5Ob.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                        </a>
                    </div>
                    <div class=blog-content>
                        <a class=category href="javascript:void(0)">Gaming</a>
                        <h4>
                            <a href=blog-single-sidebar.html>Interesting fact about gaming consoles</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class=button>
                            <a href="javascript:void(0)" class=btn>Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class=single-blog>
                    <div class=blog-img>
                        <a href=blog-single-sidebar.html>
                            <img data-pagespeed-lazy-src="{{ asset('website') }}/assets/images/blog/xblog-3.jpg.pagespeed.ic._VBu-kFR6c.jpg"
                                alt="#" src="../../pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                        </a>
                    </div>
                    <div class=blog-content>
                        <a class=category href="javascript:void(0)">Electronic</a>
                        <h4>
                            <a href=blog-single-sidebar.html>Electronics, instrumentation & control engineering
                            </a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <div class=button>
                            <a href="javascript:void(0)" class=btn>Read More</a>
                        </div>
                    </div>
                </div>

            </div>
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
