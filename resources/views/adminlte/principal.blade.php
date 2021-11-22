<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin|Venta de equipos informáticos</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('adminlte/img/adminpestaña.png')}}" type="image/x-icon">
    <!-- Font Awesome -->
    
  @include('templateadmin.css')
</head>

<body class="hold-transition sidebar-mini layout-fixed ">
    <div class="wrapper "  >

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" title="Ocultar/Expandir(Menú)"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('admin/index')}}" class="nav-link">Home</a>
      </li>
    </ul>
    
  </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/')}}" class="brand-link">
                <img src="{{asset('adminlte/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Vista usuarios</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('adminlte/img/trabajador.png')}}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{url('admin/index')}}" class="d-block">ADMINISTRADOR</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-plus-circle"></i>

                                <p>
                                    INGRESOS
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                               
                              
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                    data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link ">
                                            <i class="nav-icon fas fa-store"></i>

                                            <p>
                                                Store/products
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{url('admin/categorias')}}" class="nav-link">
                                                    <i class="fas fa-align-left nav-icon"></i>
                                                    <p>Categorias</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('admin/fabricantes')}}" class="nav-link">
                                                    <i class="fas fa-tools nav-icon"></i>
                                                    <p>Fabricantes</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('admin/store')}}" class="nav-link">
                                                    <i class="fas fa-cart-plus nav-icon"></i>
                                                    <p>Productos [STORE]</p>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>

                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
           
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content" >
                <div class="container-fluid"> 
                    <div>
                        @yield('admincontent')
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.4
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('templateadmin.js')

</body>

</html>
