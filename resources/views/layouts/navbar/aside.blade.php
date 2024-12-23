<div class="sidebar">
    <style>
        .main-sidebar {
            position: relative;
            /* Necesario para el posicionamiento del pseudo-elemento */
            overflow: hidden;
            /* Evita que el pseudo-elemento se desborde */

        }

        .main-sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* background-color: black */
            /* background-image: url("{{ asset('dist/img/sidebar-3.jpg') }}"); */
            background-size: cover;
            /* Asegura que la imagen cubra todo el fondo */
            background-position: center;
            /* Centra la imagen */
            background-repeat: no-repeat;
            /* Evita que la imagen se repita */
            z-index: 1;
            /* Asegura que el pseudo-elemento esté detrás del contenido */
        }

        .main-sidebar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
            /* Capa oscura con opacidad */
            z-index: 2;
            /* Asegura que la capa oscura esté encima de la imagen */
        }

        .sidebar {
            position: relative;
            /* Necesario para que el contenido esté por encima del pseudo-elemento */
            z-index: 3;
            /* Asegura que el contenido esté por encima de la capa oscura */

        }

        .sidebar .user-panel,
        .sidebar .nav-link,
        .sidebar .brand-link {
            position: relative;
            /* Necesario para que el contenido tenga su propio contexto de apilamiento */
            z-index: 3;
            /* Asegura que el contenido esté por encima de la capa oscura */
        }
    </style>
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a class="d-block text-white"> {{ Auth::user()->name }} {{ Auth::user()->surname1 }}</a>
        </div>
    </div>
    <!-- SidebarSearch Form -->
    <div class="form-inline">
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fa fa-home" aria-hidden="true"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Gestión de usuarios</p>
                </a>
            </li>
            {{-- <li class="nav-item">
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
            </li> --}}

            <li class="nav-item">
                <a href="{{ route('secretariat.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-briefcase" aria-hidden="true"></i>
                    <p>Secretarias</p>
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
