<aside class="main-sidebar elevation-4">
    <style>
        .main-sidebar {
            position: relative; /* Necesario para el posicionamiento del pseudo-elemento */
            overflow: hidden; /* Evita que el pseudo-elemento se desborde */

        }

        .main-sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: black;
            /* background-image: url("{{ asset('dist/img/sidebar-3.jpg') }}"); */
            background-size: cover; /* Asegura que la imagen cubra todo el fondo */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
            z-index: 1; /* Asegura que el pseudo-elemento esté detrás del contenido */
        }

        .main-sidebar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8); /* Capa oscura con opacidad */
            z-index: 2; /* Asegura que la capa oscura esté encima de la imagen */
        }

        .sidebar {
            position: relative; /* Necesario para que el contenido esté por encima del pseudo-elemento */
            z-index: 3; /* Asegura que el contenido esté por encima de la capa oscura */

        }

        .sidebar .user-panel,
        .sidebar .nav-link,
        .sidebar .brand-link {
            position: relative; /* Necesario para que el contenido tenga su propio contexto de apilamiento */
            z-index: 3; /* Asegura que el contenido esté por encima de la capa oscura */
        }
    </style>
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{url('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="bg-info py-2 px-3 rounded-sm merriweather-black-italic">Clinic Hub</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex merriweather-regular-italic">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User  Image">
            </div>
            <div class="info">
                <p class="d-block text-white"> {{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            {{-- <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div> --}}
        </div>

        <!-- Sidebar Menu -->
        <style>
            .nav-link {
                color: white !important; /* Asegúrate de usar !important si es necesario */
            }
        </style>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Estadistica<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="nav-icon bi bi-house-door-fill"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Simple Link <span class="right badge badge-danger">New</span></p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
