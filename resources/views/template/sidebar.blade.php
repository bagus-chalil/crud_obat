<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('template/logo.png')}}" alt="AdminLTE Logo" class="brand-image "
            style="opacity: .8">
        <span class="brand-text font-weight-light">Kimia Farma</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/image_user/'.auth()->user()->image) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/profil" class="d-block">{{ auth()->user()->name }} </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
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
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/main" class="nav-link">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-header">MISCELLANEOUS</li>
                @foreach ($sidebar as $sidebar=>$url)   
                <li class="nav-item">
                    <a href="{{$url}}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>{{$sidebar}} </p>
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">CRUD OBAT</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/main">Home</a></li>
                        <li class="breadcrumb-item active">@yield('navigation')</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
