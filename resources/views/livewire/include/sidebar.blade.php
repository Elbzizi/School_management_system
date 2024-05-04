<aside class="main-sidebar sidebar-light-success elevation-1 ">

    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}">
        <img style=" width: 250px; height: 40px; margin-top: 6px;" src="{{ asset('assets/img/E-COLE INNOVATION.png') }}"
            alt="AdminLTE Logo">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- SidebarSearch Form -->
        <div class="form-inline" style="margin-top: 10px;">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @php
                    $user = Auth::guard('admin')->user();
                @endphp
                @if ($user)

                    @if ($user->role === 'enseignant')
                        <li class="nav-item menu">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enseignant Tab</p>
                            </a>
                        </li>
                    @endif
                    @if ($user->role === 'surveillant' || $user->role === 'directeur')
                        <li class="nav-item  @yield('open-gestion-scolaire')">
                            <a href="#" class="nav-link @yield('cycle') ">
                                <i class="nav-icon fas fa-tachometer-alt "></i>
                                <p>
                                    Gestion Scolaire
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="{{ route('admin.Cycles') }}" class="nav-link @yield('cycle')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liste des Cycles</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('admin.groupes') }}" class="nav-link @yield('cycle')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liste Groupes</p>
                                    </a>
                                </li>
                                {{-- hna ndir les tabs dyal admin o surveillant --}}


                            </ul>
                        </li>
                        <li class="nav-item  @yield('open-gestion-etudiant')">
                            <a href="#" class="nav-link @yield('listetudiant') ">
                                <i class="fa-solid fa-users-between-lines" style="color: #1a1919;"></i>
                                <p>Gestion Etudiants
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="{{ route('admin.etudiant.demandes') }}" class="nav-link @yield('demandesInscription')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>demandes D'inscription</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('admin.etudiant') }}" class="nav-link @yield('listetudiant')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liste Etudiant</p>
                                    </a>
                                </li>
                                {{-- hna ndir les tabs dyal admin o surveillant --}}


                            </ul>
                        </li>
                        @if ($user->role === 'directeur')
                            <li class="nav-item  @yield('open-gestion-employer')">
                                <a href="#" class="nav-link @yield('listemployer')">
                                    <i class="nav-icon fa-solid fa-user-pen" style="color: #1a1919;"></i>
                                    <p> Gestion Employer
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item ">
                                        <a href="{{ route('admin.employer') }}" class="nav-link @yield('listemployer')">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Liste des Employers </p>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="{{ route('admin.employer') }}" class="nav-link @yield('register')">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Ajouter Employers </p>
                                        </a>
                                    </li>
                                    {{-- hna ndir les tabs dyal admin  --}}


                                </ul>
                            </li>
                        @endif


                    @endif
                    {{-- ===========================================etudient============================= --}}
                @else
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                consulter le note
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('programme') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                consulter le programme
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('absences') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                consulter le absences
                            </p>
                        </a>
                    </li>
                @endif



            </ul>
        </nav>



        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
