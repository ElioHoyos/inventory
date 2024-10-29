<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <!-- icono -->
    <link rel="shortcut icon" href="views/img/plantilla/logo.png" type="image/x-icon">
    <!-- plugins css -->
    <!-- bootstrap 3.3.7 -->
    <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
    <!-- theme style -->
    <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">
    <!-- switch -->
    <link rel="stylesheet" href="views/dist/css/switch.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- DataTable -->
    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
    <!-- checkbox -->
    <link rel="stylesheet" href="views/plugins/iCheck/all.css">
    <!-- Datarange picker -->
    <link rel="stylesheet" href="views/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- morris chart -->
    <link rel="stylesheet" href="views/bower_components/morris.js/morris.css">
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- PLUGINS DE JAVASCRIPT -->
    <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- bootstrap 3.3.7 -->
    <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- fastClick -->
    <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="views/dist/js/adminlte.min.js"></script>
    <!-- DataTable -->
    <script src="views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
    <!-- SweetAlert 2 -->
    <script src="views/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- InputMask -->
    <script src="views/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="views/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="views/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- iCheck -->
    <script src="views/plugins/iCheck/icheck.min.js"></script>
    <!-- jQuery Number -->
    <script src="views/plugins/jqueryNumber/jquerynumber.min.js"></script>
    <!-- datarangepicker -->
    <script src="views/bower_components/moment/min/moment.min.js"></script>
    <script src="views/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- morris.js -->
    <script src="views/bower_components/raphael/raphael.min.js"></script>
    <script src="views/bower_components/morris.js/morris.min.js"></script>
    <!-- chart js -->
    <script src="views/bower_components/Chart.js/Chart.js"></script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>I</b>T</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Iven</b>Tory</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="views/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-success btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
       

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>150</h3>

                                <p>Compras</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Ventas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>44</h3>

                                <p>Usuarios registrados</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Productos registrados</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <h1>Hola</h1>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php 
        //llamando al menu
        include "modulos/menu.php";
        // llamando a footer
        include "modulos/footer.php";

        ?>
        
    </div>
</body>

</html>