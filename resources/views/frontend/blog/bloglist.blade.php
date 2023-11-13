@extends('frontend.layout.master')
@section('title')
    blog list
@endsection
@section('content')
<!--breadcrumbs-->
    <div class=breadcrumbs>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class=breadcrumbs-content>
                        <h1 class=page-title>Blog List</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class=breadcrumb-nav>
                        <li><a href={{route('home')}}><i class="lni lni-home"></i> Home</a></li>
                        <li><a href='../'> Blog</a></li>
                        <li>Blog List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--blog section-->
    <section class="section blog-section blog-list">
        <div class=container>
          <div class=row>
            <div class="col-lg-8 col-md-12 col-12">
              <div class=row>
                @if ($blogs->count()>0)
                @foreach ($blogs as $blog)
                <div class="col-lg-6 col-md-6 col-12">

                  <div class=single-blog>
                    <div class=blog-img>
                      <a href=blog-single-sidebar.html>
                        <img src="{{ asset($blog->image) }}" style="height: 250px" alt="blog_image">
                      </a>
                    </div>
                    <div class=blog-content>
                      <a class=category href="javascript:void(0)">{{$blog->BlogCategory->name}}</a>
                      <h4>
                        <a href="{{route('blog.details',['id'=>$blog->id] )}}">{{$blog->heading}}</a>
                      </h4>
                      <p>{!!Str::limit($blog->content , 150)!!}</p>
                      <div class=button>
                        <a href="{{route('blog.details',['id'=>$blog->id])}}" class=btn>Read More</a>
                      </div>
                    </div>
                  </div>

                </div>
                @endforeach
                @else
                <div ><h3 class="text-danger">Blog not found. </h3> </div>
                @endif
              </div>
              <!--paginate-->
              <div class="pagination left blog-grid-page">
                <ul class=pagination-list>
                  <li><a href="javascript:void(0)">Prev</a></li>
                  <li class=active><a href="javascript:void(0)">2</a></li>
                  <li><a href="javascript:void(0)">3</a></li>
                  <li><a href="javascript:void(0)">4</a></li>
                  <li><a href="javascript:void(0)">Next</a></li>
                </ul>
              </div>

            </div>
            <!--Sidebar-->
            <aside class="col-lg-4 col-md-12 col-12">
              <div class="sidebar blog-grid-page">
                <!--Search bar-->
                <div class="widget search-widget">
                  <h5 class=widget-title>Search This Site</h5>
                  <form action="#">
                    <input type=text placeholder="Search Here...">
                    <button type=submit><i class="lni lni-search-alt"></i></button>
                  </form>
                </div>

                <!--Featured Posts-->
                <div class="widget popular-feeds">
                  <h5 class=widget-title>Featured Posts</h5>
                  <div class=popular-feed-loop>
                    <div class=single-popular-feed>
                      <div class=feed-desc>
                        <a class=feed-img href=blog-single-sidebar.html>
                          <img src="{{ asset('website') }}/assets/images/blog/xblog-sidebar-1.jpg.pagespeed.ic.aLixndzzRu.jpg" alt="#">
                        </a>
                        <h6 class=post-title><a href=blog-single-sidebar.html>What information is
                            needed for shipping?</a></h6>
                        <span class=time><i class="lni lni-calendar"></i> 05th Nov 2023</span>
                      </div>
                    </div>
                    <div class=single-popular-feed>
                      <div class=feed-desc>
                        <a class=feed-img href=blog-single-sidebar.html>
                          <img src="{{ asset('website') }}/assets/images/blog/xblog-sidebar-2.jpg.pagespeed.ic.haEE6A_MRL.jpg" alt="#">
                        </a>
                        <h6 class=post-title><a href=blog-single-sidebar.html>Interesting fact about
                            gaming consoles</a></h6>
                        <span class=time><i class="lni lni-calendar"></i> 24th March 2023</span>
                      </div>
                    </div>
                    <div class=single-popular-feed>
                      <div class=feed-desc>
                        <a class=feed-img href=blog-single-sidebar.html>
                          <img src="{{ asset('website') }}/assets/images/blog/xblog-sidebar-3.jpg.pagespeed.ic.XJhBmocwcd.jpg" alt="#">
                        </a>
                        <h6 class=post-title><a href=blog-single-sidebar.html>Electronics,
                            instrumentation & control engineering </a></h6>
                        <span class=time><i class="lni lni-calendar"></i> 30th Jan 2023</span>
                      </div>
                    </div>
                  </div>
                </div>

                <!--Top Category-->
                <div class="widget categories-widget">
                  <h5 class=widget-title>Top Categories</h5>
                  <ul class=custom>
                    <li>
                      <a href="javascript:void(0)">Editor's Choice</a><span>(24)</span>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Electronics</a><span>(12)</span>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Industrial Design</a><span>(5)</span>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Secure Payments Online</a><span>(15)</span>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Online Shopping</a><span>(7)</span>
                    </li>
                  </ul>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </section>

    @endsection
