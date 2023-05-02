<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #4472ca">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{ asset('foto_admin') }}/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: white">Global Persada</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('template_admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color: white">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin" class="nav-link">
              <font style="color: white;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
              </font>
            </a>
          </li>

          <li class="nav-item">
            <a href="/project" class="nav-link">
              <font style="color: white;">
                <i class="nav-icon fas fa-building"></i>
                <p>Project</p>
              </font>
            </a>
          </li>

          <li class="nav-item">
            <a href="/product" class="nav-link">
              <font style="color: white;">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>Product</p>
              </font>
            </a>
          </li>

          <li class="nav-item">
            <a href="/article" class="nav-link">
              <font style="color: white;">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>Articel</p>
              </font>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>