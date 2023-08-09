<?php
include "Models/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM ubicacion WHERE id_ubicacion=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="Website Icon" type="png" href="img/conalep-logo.png">

    <title>Conalep - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="bi bi-person-workspace" style="color: #00ff40"></i>
                </div>
                <div class="sidebar-brand-text mx-2"><strong><h4>CONALEP</h4></strong></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0 border border-3">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="color: #00ff40"></i>
                    <span>Panel Administrativo</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider border border-3">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tablas Principales.
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="Equipos.php">
                    <i class="bi bi-pc-display" style="color:#00ff40"></i>
                    <span>Equipos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Reportes.php">
                    <i class="bi bi-journals" style="color:#00ff40"></i>
                    <span>Reportes</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider border border-3">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tablas Secundarias.
            </div>

            <li class="nav-item">
                <a class="nav-link" href="Ubicacion.php">
                    <i class="bi bi-geo-alt" style="color:#00ff40"></i>
                    <span>Ubicación</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Mantenimiento.php">
                    <i class="bi bi-gear-wide-connected" style="color:#00ff40"></i>
                    <span>Mantenimiento</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Departamentos.php">
                    <i class="bi bi-building-fill-check" style="color:#00ff40"></i>
                    <span>Departamentos</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-white d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h1 mb-0 text-gray-800"><strong>Actualizar Edificios</strong></h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark"><strong><i class="bi bi-card-checklist"></i> Formulario de Modificación de Edificios</h6></strong>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form method="POST">
                                        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                                        <?php
                                        include "Controllers/EditUbicacionController.php";
                                        while ($datos = $sql->fetch_object()) {
                                        ?>
                                            <div class="row py-1 mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <label class="text-dark"><strong>¿Que Edificio se encuentra el Equipo?</strong></label>
                                                        <input class="form-control" name="ubicacion" value="<?= $datos->ubicacion ?>" type="text" placeholder="A, B, C, D, Etc." />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <label class="text-dark"><strong>¿Lugar donde hay Equipos de Computo?</strong></label>
                                                        <input class="form-control" name="lugar" value="<?= $datos->lugar ?>" type="text" placeholder="Laboratorio 1, 2, 3, 4, Oficinas, Etc." />
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <input class="btn btn-outline-success text-dark" type="submit" name="btnmodificar" size="10" value="Modificar Edificio">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website <span id="anio-actual"></span></span>
                    </div>
                </div>
                <script>
                    function obtenerAnioActual() {
                        // Creamos una instancia del objeto Date
                        var fechaActual = new Date();
                        // Obtenemos el año actual
                        var anioActual = fechaActual.getFullYear();
                        // Actualizamos el elemento HTML con el año actual
                        document.getElementById("anio-actual").textContent = anioActual;
                    }
                    // Llamamos a la función inicialmente para mostrar el año actual
                    obtenerAnioActual();
                    // Actualizamos el año cada segundo (1000 milisegundos)
                    setInterval(obtenerAnioActual, 1000);
                </script>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>