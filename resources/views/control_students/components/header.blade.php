<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('home') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/Logo_teinco.png') }}" alt="" height="60">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/Logo_teinco.png') }}" alt="" height="60">
                        <span class="ms-2 text-white display-7 align-middle"></span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/default.png') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 text-black" key="t-henry">{{ Auth::user()->name }}
                        {{ Auth::user()->lastname }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block text-black"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    {{-- <a class="dropdown-item" href="{{ route('logout') }}"><i
                            class="bx bx bx-user font-size-16 align-middle me-1"></i> <span key="t-logout">Mi
                            perfíl</span></a> --}}
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                            key="t-logout">Cerrar Sesion</span></a>
                </div>
            </div>

        </div>
    </div>
</header>

<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-dark navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->is('/*') ? 'active' : '' }}" href="{{ route('home') }}"
                            id="topnav-more"role="button">
                            <i class="bx bxs-dashboard me-2"></i><span key="t-extra-pages">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->is('programs*') ? 'active' : '' }}" href="{{ route('programs') }}" id="topnav-more"role="button">
                            <i class="bx bx-book-bookmark me-2"></i><span key="t-extra-pages">Programas</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->is('students*') ? 'active' : '' }}" href="{{ route('students') }}" id="topnav-more"role="button">
                            <i class="bx bx-user-pin me-2"></i><span key="t-extra-pages">Estudiantes</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
