@extends('frontend.layout.master')
@section('title')
    blog details
@endsection
@section('content')
<!--breadcrumbs-->
    <div class=breadcrumbs>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class=breadcrumbs-content>
                        <h1 class=page-title>Blog Details</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class=breadcrumb-nav>
                        <li><a href={{route('home')}}><i class="lni lni-home"></i> Home</a></li>
                        <li><a href='../'> Blog</a></li>
                        <li>Blog details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--blog details section-->
    <section class="section blog-single">
        <div class=container>
          <div class=row>
            <!--blog details-->
            <div class="col-lg-8 col-md-12 col-12">
              <div class=single-inner>
                <div class=post-details>
                  <div class=main-content-head>
                    <div class=post-thumbnils>
                      <img src="{{ asset($blog->image) }}" style="height: 500px" alt="blog_image">
                    </div>
                    <div class=meta-information>
                      <h2 class=post-title>
                        <a >{{$blog->heading}}</a>
                      </h2>

                      <ul class=meta-info>
                        <li>
                          <a > <i class="lni lni-user"></i> {{$blog->creator}}</a>
                        </li>
                        <li>
                          <a ><i class="lni lni-calendar"></i> {{ $blog->created_at->format('d M Y') }}</a>
                        </li>
                        <li>
                          <a href="javascript:void(0)"><i class="fa-solid fa-dice-d20"></i> {{$blog->BlogCategory->name}}</a>
                        </li>
                      </ul>

                    </div>
                    <div class=detail-inner>
                        {!!$blog->content!!}

                    </div>
                  </div>

                  <div class=post-comments>
                    <h3 class=comment-title><span>Post comments</span></h3>
                    <ul class=comments-list>
                        <!--main comment-->
                      <li>
                        <div class=comment-img>
                          <img src="{{ asset('website') }}/assets/images/blog/xcomment1.jpg.pagespeed.ic.yRrtPo0G_Y.jpg" alt=img>
                        </div>
                        <div class=comment-desc>
                          <div class=desc-top>
                            <h6>Arista Williamson</h6>
                            <span class=date>19th May 2023</span>
                            <a href="javascript:void(0)" class=reply-link><i class="lni lni-reply"></i>Reply</a>
                          </div>
                          <p>
                            Donec aliquam ex ut odio dictum, ut consequat leo interdum. Aenean nunc
                            ipsum, blandit eu enim sed, facilisis convallis orci. Etiam commodo
                            lectus
                            quis vulputate tincidunt. Mauris tristique velit eu magna maximus
                            condimentum.
                          </p>
                        </div>
                      </li>
                      <!--replay section-->
                      <li class=children>
                        <div class=comment-img>
                          <img src="{{ asset('website') }}/assets/images/blog/xcomment2.jpg.pagespeed.ic.P3c5pVzEa7.jpg" alt=img>
                        </div>
                        <div class=comment-desc>
                          <div class=desc-top>
                            <h6>Rosalina Kelian</h6>
                            <span class=date>15th May 2023</span>
                            <a href="javascript:void(0)" class=reply-link><i class="lni lni-reply"></i>Reply</a>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim.
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!--comments form-->
                  <div class=comment-form>
                    <h3 class=comment-reply-title>Leave a comment</h3>
                    <form action="#" method=POST>
                      <div class=row>
                        <div class="col-lg-6 col-12">
                          <div class="form-box form-group">
                            <input type=text name=name class="form-control form-control-custom" placeholder="Website URL" />
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-box form-group">
                            <input type=text name=email class="form-control form-control-custom" placeholder="Your Name" />
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-box form-group">
                            <input type=email name=email class="form-control form-control-custom"
                              placeholder="Your Email" />
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-box form-group">
                            <input type=text name=name class="form-control form-control-custom"
                              placeholder="Phone Number" />
                          </div>
                        </div>
                        <div class=col-12>
                          <div class="form-box form-group">
                            <textarea name="#" class="form-control form-control-custom"
                              placeholder="Your Comments"></textarea>
                          </div>
                        </div>
                        <div class=col-12>
                          <div class=button>
                            <button type=submit class=btn>Post Comment</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <aside class="col-lg-4 col-md-12 col-12">
              <div class="sidebar blog-grid-page">
    

                <!--Featured Post-->
                <div class="widget popular-feeds">
                  <h5 class=widget-title>Featured Posts</h5>
                  <div class=popular-feed-loop>
                    @foreach ($featuredBlogs as $featuredBlog )
                    <div class=single-popular-feed>
                      <div class=feed-desc>
                        <a class=feed-img href=blog-single-sidebar.html>
                          <img src="{{ asset($featuredBlog->image) }}" alt="blog_image">
                        </a>
                        <h6 class=post-title><a href="{{route('blog.details',['id'=>$featuredBlog->id])}}">{{$featuredBlog->heading}}</a></h6>
                        <span class=time><i class="lni lni-calendar"></i> {{ $blog->created_at->format('d M Y') }}</span>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>

                <!--Top Category-->
                <div class="widget categories-widget">
                  <h5 class=widget-title>Top Categories</h5>
                  <ul class=custom>
                    @foreach ( $blogCategories as $blogCategory )
                    <li>
                      <a href="{{route('blog.list',['id'=>$blogCategory->id])}}">{{$blogCategory->name}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </section>
@endsection
