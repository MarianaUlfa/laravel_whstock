<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{ asset('backend/dist/img/inventory.jpg') }}" alt="WHstock 
 Logo" 
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><h4>WHstock</h4></span> 
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('backend/dist/img/images2.png') }}" 
 class="img-circle elevation-2" 
          alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>
    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" 
  placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" 
  role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class 
        with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a id="dashboard" href="{{url('/dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard 
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a id="kategori" href="{{url('/category')}}" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Kategori 
            </p>
          </a>
        </li> 
        <li class="nav-item">
          <a id="produk" href="{{url('/produk')}}" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
            <p>
              Produk 
            </p>
          </a>
        </li> 
        <li class="nav-item">
          <a id="pelanggan" href="{{url('/customer')}}" class="nav-link">
            <i class="nav-icon fas fa-user-circle"></i>
            <p>
              Pelanggan 
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a id="supplier" href="{{url('/supplier')}}" class="nav-link">
            <i class="nav-icon fas fa-portrait"></i>
            <p>
              Supplier 
            </p>
          </a>
        </li> 
        <li class="nav-item">
          <a id="produk_masuk" href="{{url('/masuk')}}" class="nav-link">
            <i class="nav-icon fas fa-sign-in-alt"></i>
            <p>
              Produk Masuk
            </p>
          </a>
        </li> 
        <li class="nav-item">
          <a id="produk_keluar" href="{{url('/keluar')}}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Produk Keluar
            </p>
          </a>
        </li> 
        <li class="nav-header"> 
          User Menu 
        </li> 
        <li class="nav-item"> 
          <a href="{{url('/user')}}" class="nav-link"> 
            <i class="fas fa-users nav-icon"></i> 
            <p>User</p> 
          </a> 
        </li> 
        <li class="nav-item"> 
          <a href="{{url('/logout')}}" class="nav-link"> 
            <i class="fas fa-power-off nav-icon"></i> 
            <p>Log Out</p> 
          </a> 
        </li> 
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  </aside>
