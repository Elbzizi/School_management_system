
<aside class="main-sidebar sidebar-light-primary elevation-1">

    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}"  >
        <img style=" width: 250px; height: 40px; margin-top: 6px;" src="{{ asset('assets/img/E-COLE INNOVATION.png') }}" alt="AdminLTE Logo" >
        <div class="line" style="border: none; margin-top:10px; height: 1px; background-color: rgb(212, 212, 212);"></div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- SidebarSearch Form -->
        <div class="form-inline" style="margin-top: 10px;">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Les niveau scolaire
                            <span class="right fas fa-angle-left"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" >
                        <li class="nav-item">
                            <a href="{{ route('admin.Cycles') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cycles d'etude</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Niveau</p>
                            </a>
                        </li>
                        @php
                        $user = Auth::guard('admin')->user();
                        @endphp                        
                        
                        @if($user && $user->role === 'directeur')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>

            </ul>
        </nav>

        
        
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
