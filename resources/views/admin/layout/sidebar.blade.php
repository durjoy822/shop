<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
      <div class="sidebar-brand-icon">
        <img src="{{asset('admin')}}/img/logo/logo2.png">
      </div>
      <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-spinner"></i>
        <span>Website</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Product
    </div>
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Bootstrap UI</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Bootstrap UI</h6>
          <a class="collapse-item" href="alerts.html">Alerts</a>
          <a class="collapse-item" href="buttons.html">Buttons</a>
          <a class="collapse-item" href="dropdowns.html">Dropdowns</a>
          <a class="collapse-item" href="modals.html">Modals</a>
          <a class="collapse-item" href="popovers.html">Popovers</a>
          <a class="collapse-item" href="progress-bar.html">Progress Bars</a>
        </div>
      </div>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('categories.index')}}">
        <i class="fas fa-dice-d20"></i>
        <span>Categories</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('subcategories.index')}}">
        <i class="fas fa-dice-d6"></i>
        <span>Sub categories</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('brands.index')}}">
        <i class="fas fa-universal-access"></i>
        <span>Brand</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('units.index')}}">
        <i class="fab fa-ubuntu"></i>
        <span>Unit</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('products.index')}}">
        <i class="fas fa-project-diagram"></i>
        <span>Product</span>
      </a>
    </li>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
    Order
    </div>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-th-list"></i>
          <span>Order</span>
        </a>
      </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
    Blogs
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('blogs_categories.index')}}">
            <i class="fas fa-th-list"></i>
          <span>Blogs categories</span>
        </a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('blogs.index')}}">
            <i class="fas fa-th-list"></i>
          <span>Blogs</span>
        </a>
      </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
     Email Management
    </div>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-envelope-open-text"></i>
          <span>Single Sent</span>
        </a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-mail-bulk"></i>
          <span>Multiple sent</span>
        </a>
      </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
    Settings
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('user')}}">
          <i class="fas fa-users-cog"></i>
          <span>User settings</span>
        </a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('roles.index')}}">
        <i class="fas fa-user-shield  "></i>
        <span>Roles settings</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('optimize')}}">
        <i class="fas fa-rocket"></i>
        <span>Optimize</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
  </ul>
