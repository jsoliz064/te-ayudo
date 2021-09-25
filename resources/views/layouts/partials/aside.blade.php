<aside class="main-sidebar sidebar-ligth-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('favicons/favicon.ico') }}" alt="te-ayudo Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">TE AYUDO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('vendor/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/perfil" class="d-block">Mi Perfil</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
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
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/nose" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p class="font-weight-light">
                            Categorias de Asignaturas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/nose" class="nav-link">
                        <i class="nav-icon fas fa-star"></i>
                        <p class="font-weight-light">
                            Instructores Favoritos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/nose" class="nav-link">
                        <i class="nav-icon fas fa-medal"></i>
                        <p class="font-weight-light">
                            Instructores Recomendados
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/nose" class="nav-link">
                        <i class="nav-icon fab fa-bitcoin"></i>
                        <p class="font-weight-light">
                            Otros
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
