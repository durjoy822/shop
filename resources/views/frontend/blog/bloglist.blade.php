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
                <div ><p class="text-danger text-center mt-5">Blog not found. </p> </div>
                @endif
              </div>
              <!--paginate-->
              <div class="pagination left blog-grid-page">
                   <!--styling pagination-->
                   <div >
                    {{ $blogs->links('frontend.layout.defaultPagination') }}
                   </div>
                   <!--styling pagination-->
              </div>

            </div>
            <!--Sidebar-->
            <aside class="col-lg-4 col-md-12 col-12">
              <div class="sidebar blog-grid-page">
                <!--Featured Posts-->
                <div class="widget popular-feeds">
                  <h5 class=widget-title>Featured Posts</h5>
                  <div class=popular-feed-loop>
                      @foreach ($featuredBlogs as $featuredBlog )
                    <div class=single-popular-feed>
                        <div class=feed-desc>
                          <a class=feed-img href=blog-single-sidebar.html>
                            <img src="{{ asset($featuredBlog->image) }}" alt="blog_image">
                          </a>
                          <h6 class=post-title><a href={{route('blog.details',['id'=>$featuredBlog->id])}}>{{$featuredBlog->heading}}</a></h6>
                          <span class=time><i class="lni lni-calendar"></i> {{ $featuredBlog->created_at->format('d M Y') }}</span>
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
                    @endforeach

                  </ul>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </section>

    @endsection
