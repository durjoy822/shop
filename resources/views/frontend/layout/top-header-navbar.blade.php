<!--top bar-->
<div class=topbar>
    <div class="container" style="display: block">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class=top-left>
            <ul class=menu-top-link>
              <li>
                <div class=select-position>
                  <select id=select4>
                    <option value=0 selected>$ USD</option>
                    <option value=1>€ EURO</option>
                    <option value=2>$ CAD</option>
                    <option value=3>₹ INR</option>
                    <option value=4>¥ CNY</option>
                    <option value=5>৳ BDT</option>
                  </select>
                </div>
              </li>
              <li>
                <div class=select-position>
                  <select id=select5>
                    <option value=0 selected>English</option>
                    <option value=1>Español</option>
                    <option value=2>Filipino</option>
                    <option value=3>Français</option>
                    <option value=4>العربية</option>
                    <option value=5>हिन्दी</option>
                    <option value=6>বাংলা</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class=top-end>
            @if (Auth::guard('customer')->check())
            <div class=user>
              <i class="lni lni-user"></i>
              Hello &nbsp;  &nbsp;
              <a class=user href="{{route('customer.profile')}}"> {{Auth::guard('customer')->user()->name}}   &nbsp;  Dashboard </a>
              <a href="{{route('customer.logout')}}" data-toggle="modal" data-target="#logoutModal" class="text-danger">Logout</a>

            </div>
            @else
            <ul class=user-login>
              <li>
                <a href="{{route('customer.login')}}">Sign In</a>
              </li>
              <li>
                <a href="{{route('customer.register')}}">Register</a>
              </li>
            </ul>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

<!--middle header-->
<div class=header-middle>
    <div class=container>
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3 col-7">

                <a class=navbar-brand href={{route('home')}}>
                    <img src="{{ asset('website') }}/assets/images/logo/logo.svg" alt=Logo>
                </a>

            </div>
            <div class="col-lg-5 col-md-7 d-xs-none">

                <div class=main-menu-search>

                    <div class="navbar-search search-style-5">
                        <div class=search-select>
                            <div class=select-position>
                                <select id=select1>
                                    <option selected>All</option>
                                    <option value=1>option 01</option>
                                    <option value=2>option 02</option>
                                    <option value=3>option 03</option>
                                    <option value=4>option 04</option>
                                    <option value=5>option 05</option>
                                </select>
                            </div>
                        </div>
                        <div class=search-input>
                            <input type=text placeholder=Search>
                        </div>
                        <div class=search-btn>
                            <button><i class="lni lni-search-alt"></i></button>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-md-2 col-5">
                <div class=middle-right-area>
                    <div class=nav-hotline>
                        <i class="lni lni-phone"></i>
                        <h3>Hotline:
                            <span>(+100) 123 456 7890</span>
                        </h3>
                    </div>
                  <!--wishlist-->
                    <div class=navbar-cart>
                        <div class=wishlist>
                            <a href="{{route('wishlist')}}">
                                <i class="lni lni-heart"></i>
                                <span class="total-items">{{ Auth::guard('customer')->check() ? $wishlistCount : '0' }}</span>
                            </a>
                        </div>
                        <!--cart-->
                        <div class=cart-items>
                            <a href="javascript:void(0)" class=main-btn>
                                <i class="lni lni-cart"></i>
                                <span class=total-items>{{count(Cart::getContent())}}</span>
                            </a>

                            <div class=shopping-item>
                                <div class=dropdown-cart-header>
                                    <span>{{count(Cart::getContent())}} Items</span>
                                    <a href="{{route('cart')}}">View Cart</a>
                                </div>
                                <ul class=shopping-list>
                                    @foreach ( Cart::getContent() as $cartProduct )
                                    <li>
                                        <a href="{{route('cart.delete',['id'=>$cartProduct->id])}}" class=remove title="Remove this item"><i
                                                class="lni lni-close"></i></a>
                                        <div class=cart-img-head>
                                            <a class=cart-img href=product-details.html><img
                                                    src="{{ asset($cartProduct->attributes->image) }}"
                                                    alt="#"></a>
                                        </div>
                                        <div class=content>
                                            <h4><a href=product-details.html>{{$cartProduct->name}}</a></h4>
                                            <p class=quantity>{{$cartProduct->quantity}}x - <span class=amount>{{$cartProduct->price}} Tk</span></p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class=bottom>
                                    <div class=total>
                                        <span>Total</span>
                                        <span class=total-amount>
                                            <?php
                                            $totalAmount = 0;
                                            foreach (Cart::getContent() as $cartProduct) {
                                                $totalAmount += $cartProduct->quantity * $cartProduct->price;
                                            }
                                            echo number_format($totalAmount)." Tk";
                                        ?>
                                        </span>
                                    </div>
                                    <div class=button>
                                        <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
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

<!--bottom header-->
<div class=container>
    <div class="row align-items-center">
        <div class="col-lg-8 col-md-6 col-12">
            <div class=nav-inner>

                <div class=mega-category-menu>
                    <span class=cat-button><i class="lni lni-menu"></i>All Categories</span>
                    <ul class=sub-category>
                        @foreach ($categories as $category)
                        <li><a href="{{route('product.list',['id'=>$category->id])}}">{{$category->name}}
                            @if (count($category->subCategory)>0)
                            <i class="lni lni-chevron-right"></i>
                            @endif
                        </a>
                            @if (count($category->subCategory)>0)
                            <ul class=inner-sub-category>
                                @foreach ($category->subCategory as $subCategory)
                                <li><a href="{{route('subcategory.list',['id'=>$subCategory->id])}}">{{$subCategory->name}}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>


                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler mobile-menu-btn" type=button data-bs-toggle=collapse
                        data-bs-target="#navbarSupportedContent" aria-controls=navbarSupportedContent
                        aria-expanded=false aria-label="Toggle navigation">
                        <span class=toggler-icon></span>
                        <span class=toggler-icon></span>
                        <span class=toggler-icon></span>
                    </button>
                    <div class="collapse navbar-collapse sub-menu-bar" id=navbarSupportedContent>
                        <ul id=nav class="navbar-nav ms-auto">
                            <!--home-->
                            <li class=nav-item>
                                <a href="{{route('home')}}"  aria-label="Toggle navigation">Home</a>
                            </li>
                            <!--blog-->
                            <li class=nav-item>
                                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle=collapse
                                  data-bs-target="#submenu-1-4" aria-controls=navbarSupportedContent aria-expanded=false
                                  aria-label="Toggle navigation">Blog</a>
                                <ul class="sub-menu collapse" id=submenu-1-4>
                                    @foreach ($blogCategories as $blogCategory)
                                    <li class=nav-item><a href="{{route('blog.list',['id'=>$blogCategory->id])}}">{{$blogCategory->name}}</a>
                                    @endforeach
                                  </li>
                                </ul>
                              </li>
                               <!--about us-->
                              <li class=nav-item>
                                <a href="{{route('about.us')}}" aria-label="Toggle navigation">About us</a>
                            </li>
                             <!--contact us-->
                            <li class=nav-item>
                                <a href="{{route('contact.us')}}" aria-label="Toggle navigation">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">

            <div class=nav-social>
                <h5 class=title>Follow Us:</h5>
                <ul>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>


<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p>Are you sure you want to logout?</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
      <a href="{{route('logout')}}" class="btn btn-primary">Logout</a>
    </div>
  </div>
</div>
</div>

