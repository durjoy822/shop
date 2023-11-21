@extends('frontend.layout.master')
@section('title')
    shop product details
@endsection
@section('content')
    <!--breadcrumbs-->
    <div class=breadcrumbs>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class=breadcrumbs-content>
                        <h1 class=page-title>Single Product</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class=breadcrumb-nav>
                        <li><a href="../"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href=index.html>Shop</a></li>
                        <li>Single Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--product details section-->
    <section class="item-details section">
        <div class=container>
            <div class=top-area>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class=product-images>
                            <main id=gallery>
                                <div class=main-img>
                                    <img src="{{ asset($product->image) }}" id=current alt="product_image"
                                        style="height: 350px">
                                </div>
                                <div class=images>
                                    @foreach ($product->multipleImages as $multipleImage)
                                        <img src="{{ asset($multipleImage->multiple_image) }}" class=img alt="#"
                                            style="height: 100px">
                                    @endforeach
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class=product-info>
                            <h2 class=title>{{ $product->name }}</h2>
                            <p class="category m-0"><i class="fa-solid fa-play"></i> Category : {{ $product->category->name }}
                            </p>
                            <p class=category><i class="fa-solid fa-play"></i>  Brand : {{ $product->brand->name }}</p>
                            <h3 class=price>{{ $product->selling_price }} Tk <span>{{ $product->regular_price }} Tk</span>
                            </h3>
                            <p class=info-text>
                                {!! $product->short_description !!}
                            </p>
                            <div class=row>
                            </div>
                            <div class=bottom-content>
                                <div class="row align-items-end">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-group quantity mt-0">
                                            <form action="" method="post">
                                                <label for=color>Quantity</label>
                                                <input type="number" class="form-control py-2" name="qty"
                                                    value="1" min="1" placeholder="Select qty">

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 mt-2">
                                        <div class="button cart-button">
                                            <button class=btn style="width: 100%;">Add to Cart</button>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class=wish-button>
                                            <button class=btn><i class="lni lni-heart"></i> To Wishlist</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--product details info section-->
            <div class=product-details-info>
                <div class=single-block>
                    <div class=row>
                        <div class="col-lg-12 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Details</h4>
                                {!! $product->long_description !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!--product review section-->
                <div class=row>
                    <div class="col-lg-4 col-12">
                        <div class="single-block give-review">
                            <!--product review form-->
                            <h4>Leave Your Review</h4>
                            <form action="{{route('reviews.store')}}" method="post">
                                @csrf

                                @if (!Auth::guard('customer')->check())
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <div class=form-group>
                                        <label for="customer_name">Name</label>
                                        <input type="text" name="customer_name" class="form-control mt-1">
                                        <div class="text-danger">@error('customer_name'){{ $message }} @enderror</div>

                                    </div>
                                    <div class='form-group mt-2'>
                                        <label for="customer_email">Email</label>
                                        <input type="text" name="customer_email" class="form-control mt-1">
                                        <div class="text-danger">@error('customer_email'){{ $message }} @enderror</div>

                                    </div>
                                    <div class="form-group mt-2">
                                        <label for=review-rating>Rating</label>
                                        <select class="form-control mt-1" name="rating" id=review-rating>
                                            <option selected>Selete rating</option>
                                            <option value="5">5 Stars</option>
                                            <option value="4">4 Stars</option>
                                            <option value="3">3 Stars</option>
                                            <option value="2">2 Stars</option>
                                            <option value="1">1 Star</option>
                                        </select>
                                        <div class="text-danger">@error('rating'){{ $message }} @enderror</div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="review">Review</label>
                                        <textarea class="form-control" name="review" id="review"></textarea>
                                        <div class="text-danger">@error('review'){{ $message }} @enderror</div>
                                    </div>
                                @else
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="customer_id" value="{{ Auth::guard('customer')->user()->id }}">
                                <input type="hidden" name="customer_name" value="{{ Auth::guard('customer')->user()->name }}">
                                <input type="hidden" name="customer_email"value="{{ Auth::guard('customer')->user()->email }}">

                                    <div class="form-group mt-2">
                                        <label for=review-rating>Rating</label>
                                        <select class="form-control mt-1" name="rating" id=review-rating>
                                            <option selected>Selete rating</option>
                                            <option value="5">5 Stars</option>
                                            <option value="4">4 Stars</option>
                                            <option value="3">3 Stars</option>
                                            <option value="2">2 Stars</option>
                                            <option value="1">1 Star</option>
                                        </select>
                                        <div class="text-danger">@error('rating'){{ $message }} @enderror</div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="review">Review</label>
                                        <textarea class="form-control mt-1" name="review" id="review"></textarea>
                                        <div class="text-danger">@error('review'){{ $message }} @enderror</div>
                                    </div>
                                    @endif
                                <button type="submit" class="btn review-btn">
                                    Leave a Review
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class=single-block>
                            <div class=reviews>
                                <h4 class=title>Latest Reviews</h4>

                                @foreach ($reviews as $review)
                                    <div class=single-review>
                                        <img src="{{ asset('website') }}/assets/images/blog/xcomment2.jpg.pagespeed.ic.P3c5pVzEa7.jpg"
                                            alt="#">
                                        <div class='review-info pt-1'>
                                            <h4>
                                                <span>{{ $review->customer_name }}</span>
                                            </h4>
                                            <ul class=stars>
                                                @if ($review->rating == 1)
                                                    <i class="fas fa-star text-warning"></i>
                                                @elseif ($review->rating == 2)
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                @elseif ($review->rating == 3)
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                @elseif ($review->rating == 4)
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                @elseif ($review->rating == 5)
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                @endif
                                            </ul>
                                            <p>{!! $review->review !!}</p>
                                        </div>
                                    </div>
                                @endforeach

                                <!--styling pagination-->
                               <div >
                                 {{ $reviews->links('frontend.layout.defaultPagination') }}
                                </div>
                                <!--styling pagination-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--script for product-->
    <script type="text/javascript">
        const current = document.getElementById("current");
        const opacity = 0.6;
        const imgs = document.querySelectorAll(".img");
        imgs.forEach(img => {
            img.addEventListener("click", (e) => {
                imgs.forEach(img => {
                    img.style.opacity = 1;
                });
                current.src = e.target.src;
                e.target.style.opacity = opacity;
            });
        });
    </script>

@endsection
