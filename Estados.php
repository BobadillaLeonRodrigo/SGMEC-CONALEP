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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
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
                    <i class="bi bi-box-arrow-down" style="color: #00ff40"></i>
                </div>
                <div class="sidebar-brand-text mx-2"><strong><h4>CONALEP</h4></strong></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 border border-3 border-success">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="color: #00ff40"></i>
                    <span>Panel Administrativo</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider border border-3 border-success">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tablas Principales.
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="Equipos.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Equipos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Reportes.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reportes</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider border border-3 border-success">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tablas Secundarias.
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="Estados.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Estados</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Ubicacion.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Ubicación</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Mantenimiento.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Mantenimiento</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Departamentos.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Departamentos</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block border border-3 border-success">

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
                        <h1 class="h1 mb-0 text-gray-800"><strong>Estados</strong></h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark"><strong><i class="bi bi-card-checklist"></i> Formulario de Registro de Estados</h6></strong>
                                </div>
                                    <?php
                                        // Se llaman los archivos a utilizar para el funcionamiendo del formulario en el registro de usuarios
                                        //Primero se llama la conexion y despues los controladores
                                        include "Models/conexion.php";
                                        include "Controllers/RegisterEstadoController.php";
                                    ?>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row py-1 mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <label class="text-dark"><strong>¿Estados de los Equipos?</strong></label>
                                                    <input class="form-control" name="tipo_estado" type="text" placeholder="Activo, Inactivo, Mantenimiento, Desmantelado"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <label class="text-dark"><strong>¿Observaciones?</strong></label>
                                                    <input class="form-control" name="observaciones" type="text" placeholder="Detalles"/>
                                                </div>
                                            </div>
                                        </div>
                                        <input class="btn btn-outline-success text-dark" type="submit" name="btnregistro" size="10" value="Registrar Estados">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-6">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-dark"><strong><i class="bi bi-table"></i> Tabla de Registros de Estados</h6></strong>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead class="text-center text-dark bg-success">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tipo de Estado</th>
                                                    <th>Observaciones</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tfoot class="text-center">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tipo de Estado</th>
                                                    <th>Observaciones</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                            <tbody class="text-center">
                                                <?php
                                                include "Models/conexion.php";
                                                include "Controllers/DeletEstadoController.php";
                                                $sql = $conexion->query("SELECT * FROM estado");
                                                while ($datos = $sql->fetch_object()) { ?>
                                                    <tr>
                                                        <td><?= $datos->id_estado ?></td>
                                                        <td><?= $datos->tipo_estado ?></td>
                                                        <td><?= $datos->observaciones ?></td>
                                                        <td>
                                                            <a href="UpdateEstado.php?id=<?= $datos->id_estado ?>" class="btn btn-small btn-success" style="color:black"><i class="bi bi-pencil-fill"></i></a>
                                                            <a href="Estados.php?id=<?= $datos->id_estado ?>" class="btn btn-small btn-danger" style="color:black"><i class="bi bi-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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