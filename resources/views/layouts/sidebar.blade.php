      <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
      <span class="brand-text font-weight-light">Web Dash</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      <img src="{{ asset('storage/'.auth()->user()->profile->image)}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
      <a href="#" class="d-block">{{ Auth::user()->profile->fullname ?? 'System BOT' }}</a>
      </div>
      </div>

      <!-- Sidebar Menu -->

      

      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
      with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
      <a href="/index" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
      Menu
      <i class="right fas fa-angle-left"></i>
      </p>
      </a>
      <ul class="nav nav-treeview">
      <li class="nav-item">
      <a href="/index" class="nav-link {{  (request()->segment(1) == 'index') ? 'active' : '' }}">
      <i class="fa fa-chart-line nav-icon"></i>
      <p>Dashboard</p>
          
      </a>
      </li>
      <li class="nav-item">
      <a href="/profile" class="nav-link {{  (request()->segment(1) == 'profile') ? 'active' : '' }}">
      <i class="fa fa-user nav-icon"></i>
      <p>My Profile</p>
          
      </a>
      </li>
       <li class="nav-item">
      <a href="/trashed" class="nav-link {{  (request()->segment(1) == 'trashed') ? 'active' : '' }}">
      <i class="fa fa-trash nav-icon"></i>
      <p>Recycle Bin</p>
          
      </a>
      </li>
      <li class="nav-item">
      <a href="{{ url('/logout') }}" class="nav-link">
      <i class="fa fa-power-off nav-icon"></i>
      <p>Sign-off</p>
          
      </a>
      </li>
      </ul>
      </li>
      <li class="nav-item has-treeview {{ (request()->segment(1) == 'product') ? 'menu-open' : '' }}">
      <a href="#" class="nav-link">
      <i class="nav-icon fas fa-play"></i>
      <p>
      Products
      
      <i class="fas fa-angle-left right"></i>
      <span class="badge badge-info right">2</span>
      </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
     {{--  <li class="{{ (request()->is('admin/cities')) ? 'active' : '' }}">   --}}
      <a href="/product" class="nav-link {{ (request()->segment(1) == 'product') ? 'active' : '' }}">
      <i class="fa fa-shopping-cart nav-icon"></i>
      <p>View Product</p>
      </a>
      </li>
      <li class="nav-item">
      <a href="/product/create" class="nav-link">
      <i class="fa fa-cart-plus nav-icon"></i>
      <p>Add Product</p>
      </a>
      </li>
      <li class="nav-item">
      <a href="/product" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Collapsed Sidebar</p>
      </a>
      </li>
      </ul>
      </li>

      <li class="nav-item has-treeview {{ (request()->segment(1) == 'category') ? 'menu-open' : '' }}">
      <a href="#" class="nav-link">
      <i class="nav-icon fa fa-cubes"></i>
      <p>
      Categories
      <i class="fas fa-angle-left right"></i>
      <span class="badge badge-info right">2</span>
      </p>
      </a>
      <ul class="nav nav-treeview">
      <li class="nav-item">
      <a href="/category" class="nav-link {{ (request()->segment(1) == 'category') ? 'active' : '' }}">
      <i class="fa fa-file-image nav-icon"></i>
      <p>View Category</p>
      </a>
      </li>
      <li class="nav-item">
      <a href="/category/create" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Add Category</p>
      </a>
      </li>
      <li class="nav-item">
      <a href="/subcategory/create" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Add Sub-Category</p>
      </a>
      </li>
      </ul>
      </li>

      </ul>
      </nav>
      <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
      </aside>
