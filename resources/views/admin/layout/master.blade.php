<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.layout.head')
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('admin.layout.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('admin.layout.navbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
       @yield('content')
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
     @include('admin.layout.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  @include('admin.layout.script')


  @include('admin.layout.toster')
  @include('admin.layout.tynimce'); 
</body>

</html>
