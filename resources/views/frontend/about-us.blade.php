@extends('frontend.layout.master')
@section('title')
    about us
@endsection
@section('content')
<!--breadcrumbs-->
    <div class=breadcrumbs>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class=breadcrumbs-content>
                        <h1 class=page-title>About Us</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class=breadcrumb-nav>
                        <li><a href={{route('home')}}><i class="lni lni-home"></i> Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!--about us-->
    <section class="about-us section">
        <div class=container>
            <div class="row align-items-center ">
                @foreach ($about_us as $index => $about)
                @if($index % 2 == 0)
                    <div class="col-lg-6 col-md-12 col-12 mt-4">
                        <div class="content-left text-center">
                            <img src="{{ asset($about->image) }}" alt="#" style="height:300px; width:70%">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mt-4">
                        <div class="content-right">
                            <h2>{{ $about->heading }}</h2>
                            <p>{{ $about->content }}</p>
                            <!-- Add other content here -->
                        </div>
                    </div>
                @else
                    <!-- Reverse the order for odd iterations -->
                    <div class="col-lg-6 col-md-12 col-12 mt-4">
                        <div class="content-right">
                            <h2>{{ $about->heading }}</h2>
                            <p>{{ $about->content }}</p>
                            <!-- Add other content here -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mt-4">
                        <div class="content-left text-center">
                            <img src="{{ asset($about->image) }}" style="height:300px; width:70%" alt="#">
                        </div>
                    </div>
                @endif
            @endforeach

            </div>
        </div>
    </section>
<!--team section-->
    <section class="team section">
        <div class=container>
            <div class=row>
                <div class=col-12>
                    <div class=section-title>
                        <h2 class="wow fadeInUp" data-wow-delay=.4s>Our Core Team</h2>
                    </div>
                </div>
            </div>
            <div class=row>
                @foreach ($teams as $team )

                <div class="col-lg-3 col-md-6 col-12">
                    <div class=single-team>
                        <div class=image>
                            <img src="{{asset($team->image)}}" alt="#">
                        </div>
                        <div class=content>
                            <div class=info>
                                <h3>{{$team->name}}</h3>
                                <h5>{{$team->position}}</h5>
                                <ul class=social>
                                    <li><a href="{{$team->facebook}}" target="blank"><i class="lni lni-facebook-filled"></i></a>
                                    </li>
                                    <li><a href="{{$team->twitter}}" target="blank"><i class="lni lni-twitter-original"></i></a>
                                    </li>
                                    <li><a href="{{$team->whats_app}}" target="blank"><i class="fa-brands fa-whatsapp" style="color: #00040a;"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
