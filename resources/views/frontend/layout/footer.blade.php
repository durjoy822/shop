<div class=footer-top>
    <div class=container>
        <div class=inner-content>
            <div class=row>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class=footer-logo>
                        <a href=index.html>
                            {{-- <img src="{{ asset('website') }}/assets/images/logo/logo.svg"> --}}
                            <img src="{{ asset($setting->light_logo) }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class=footer-newsletter>
                        <h4 class=title>
                            Subscribe to our Newsletter
                            <span>Get all the latest information, Sales and Offers.</span>
                        </h4>
                        <div class=newsletter-form-head>
                            <form action="#" method=get target=_blank class=newsletter-form>
                                <input name=EMAIL placeholder="Email address here..." type=email>
                                <div class=button>
                                    <button class=btn>Subscribe<span class=dir-part></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=footer-middle>
    <div class=container>
        <div class=bottom-inner>
            <div class=row>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-footer f-contact">
                        <h3>Get In Touch With Us</h3>
                        <p class=phone>Phone: {{$setting->phone}}</p>
                        <ul>
                            <li><span>{{$setting->opening_day}}-{{$setting->closeing_day}}: </span> {{$setting->opening_time}} - {{$setting->closeing_time}}</li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-footer our-app">
                        <h3>Our Mobile App</h3>
                        <ul class=app-btn>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="lni lni-apple"></i>
                                    <span class=small-title>Download on the</span>
                                    <span class=big-title>App Store</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="lni lni-play-store"></i>
                                    <span class=small-title>Download on the</span>
                                    <span class=big-title>Google Play</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-footer f-link">
                        <h3>Information</h3>
                        <ul>
                            <li><a href="{{route('about.us')}}">About Us</a></li>
                            <li><a href="{{route('contact.us')}}">Contact Us</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<div class=footer-bottom>
    <div class=container>
        <div class=inner-content>
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <div class=payment-gateway>
                        <span>We Accept:</span>
                        <img
                            alt="we_accept photo" src="#"
                           >
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class=copyright>
                        <p>Designed and Developed by: {{$setting->design_develop}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <ul class=socila>
                        <li>
                            <span>Follow Us On:</span>
                        </li>
                        <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
