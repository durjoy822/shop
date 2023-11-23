<!DOCTYPE html>
<html class=no-js lang=zxx>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
   @include('frontend.layout.head')
</head>
<body>
    <!--preloder-->
    <div class=preloader>
        <div class=preloader-inner>
            <div class=preloader-icon>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <!--topbar/middle header/navbar-->
    <header class="header navbar-area">
       @include('frontend.layout.top-header-navbar')
    </header>


   @yield('content')

<!--footer-->
    <footer class=footer>
       @include('frontend.layout.footer')
    </footer>

<!--footer to top scroller-->
    <a href="#" class=scroll-top>
        <i class="lni lni-chevron-up"></i>
    </a>

<!--script-->
   @include('frontend.layout.script')
   <!--sweet alart-->
   @include('frontend.layout.sweetAlart');


</body>
</html>
