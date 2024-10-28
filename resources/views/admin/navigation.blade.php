<aside class="main-sidebar bg-orange-fundal sidebar-no-expand">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashboard') }}" class="brand-link text-sm">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Store Logo" width=250 height=80 class="brand-image elevation-3">
  
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="clearfix"></div>
        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item dropdown">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link nav-dashboard">
                        <i class="nav-icon mt-9 fas fa-tachometer-alt"></i>
                        <p>Panou de control</p>
                    </a>
                </li> 
                <li class="nav-item dropdown">
                    <a href="{{ url('admin/products') }}" class="nav-link nav-product">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Listă de produse</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ url('admin/inventory') }}" class="nav-link nav-inventory">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Listă de inventar</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ url('admin/orders') }}" class="nav-link nav-orders">
                        <i class="nav-icon fas fa-list"></i>
                        <p> Listă de comenzi</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ url('admin/clients') }}" class="nav-link nav-clients">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Listă de clienți</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ url('admin/sales-report') }}" class="nav-link nav-sales">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Raport de vânzări</p>
                    </a>
                </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
