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

        <!-- url amigables -->
        <?php
        // llamando al cabezote
        include "modulos/cabezote.php";
        //llamando al menu
        include "modulos/menu.php";
        if(isset($_GET["ruta"])){
            if($_GET["ruta"] == "inicio"         ||
               $_GET["ruta"] == "categoria"  ||
               $_GET["ruta"] == "usuarios"   ||
               $_GET["ruta"] == "productos"  ||
               $_GET["ruta"] == "salir"){
            include "modulos/".$_GET["ruta"].".php";
            }else{
                include "modulos/404.php";
            }
        }else{
            include "modulos/inicio.php";
        }
        // llamando a footer
        include "modulos/footer.php";
        ?>
        
    </div>
</body>

</html>