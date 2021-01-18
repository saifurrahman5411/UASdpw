@php
  function checkRouteActive($route){
  if(Route:: current() == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     
      <span class="brand-text font-weight-light">adminTOKO JUAL BELI SUPERMOTO BEKAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
            {{request()->user()->nama}}

            @elseif(Auth::guard('pembeli')->check())
            {{Auth::guard('pembeli')->user()->nama}}
            <br>PEMBELI
            
            @elseif(Auth::guard('penjual')->check())
            {{Auth::guard('penjual')->user()->nama}}
            <br>PENJUALSS

            @else
              silakan login dahulu
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                master data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('beranda')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('kategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>kategory</p>
                </a>
                <li class="nav-item">
                <a href="{{url('admin/user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>user</p>
                </a>
                 <li class="nav-item">
                <a href="{{url('admin/produk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>produk</p>
                </a>
                 <li class="nav-item">
                <a href="{{url('admin/promo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>promo</p>
              </li>
               <li class="nav-item">
                <a href="{{url('supplier')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>supplier</p>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>