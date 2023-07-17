<?php
    include "Models/conexion.php";
        $id = $_GET["id"];
            $sql = $conexion->query("SELECT * FROM usuarios WHERE id_usuario=$id");
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
                    <i class="bi bi-house" style="color: #00ff40"></i>
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
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Equipos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
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
                        <h1 class="h1 mb-0 text-gray-800">Total de Registros de Tablas</h1>
                        <a href="./php/index.php" class="mb-0 d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">
                            <i class="fas fa-download fa-sm" style="color: #00ff40"></i> Respaldo de Base de Datos</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1"><strong>Total de Registros</strong></div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    //Se incluye la Conexion a la base de datos y se organizan por medio de Id de cada tabla.
                                                    include 'Models/conexion.php';
                                                        $query = "SELECT id_usuario FROM usuarios ORDER BY id_usuario";
                                                        $query_run = mysqli_query($conexion, $query);
                                                        $row = mysqli_num_rows($query_run);
                                                            echo $row;
                                                ?>
                                                </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-person-plus-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total de Departamentos</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                        //Se incluye la Conexion a la base de datos y se organizan por medio de Id de cada tabla.
                                                        include 'Models/conexion.php';
                                                            $query = "SELECT id_departamento FROM departamento ORDER BY id_departamento";
                                                            $query_run = mysqli_query($conexion, $query);
                                                            $row = mysqli_num_rows($query_run);
                                                                echo $row;
                                                    ?>
                                                </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark"><strong><i class="bi bi-card-checklist"></i> Formulario Modificar Registro</h6></strong>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form method="POST">
                                        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                                            <?php
                                                include "Controllers/EditUsuariosController.php";
                                                    while ($datos = $sql->fetch_object()) {
                                            ?>
                                        <div class="row py-1 mb-3">
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <label class="text-dark"><strong>¿Cuál es Tu Nombre?</strong></label>
                                                    <input class="form-control" name="nombreu" value="<?= $datos->nombreu ?>" type="text" placeholder="Ingrese su Nombre" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <label class="text-dark"><strong>¿Cuál es tu Apellido Paterno?</strong></label>
                                                    <input class="form-control" name="appu" value="<?= $datos->appu ?>" type="text" placeholder="Ingrese su Primer Apellido" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <label class="text-dark"><strong>¿Cuál es tu Apellido Materno?</strong></label>
                                                    <input class="form-control" name="apmu" value="<?= $datos->apmu ?>" type="text" placeholder="Ingrese su Segundo Apellido" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <label class="text-dark"><strong>¿Cuál es tu Correo Electronico?</strong></label>
                                                    <input class="form-control" name="emailu" value="<?= $datos->emailu ?>" type="email" placeholder="rromero@2023conalepmex.edu.mx" />
                                                </div>
                                            </div>
                                            <div class="py-1 col-md-6">
                                                <div class="form-floating mb-md-0">
                                                    <label class="text-dark"><strong>¿Cuál es tu Departamento?</strong></label>
                                                    <select class="form-control" type="text" name="id_departamento" value="<?= $datos->id_departamento ?>">
                                                        <?php
                                                        // Conexión a la base de datos
                                                        $conexion = mysqli_connect("localhost", "root", "", "sgmec");
                                                        // Verificar la conexión
                                                        if (mysqli_connect_errno()) {
                                                            echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
                                                        }
                                                        // Consulta para obtener los datos de la tabla departamento
                                                        $consulta = "SELECT id_departamento, tipo_departamento FROM Departamento";
                                                        $resultado = mysqli_query($conexion, $consulta);
                                                        // Verificar si se obtuvieron resultados
                                                        if (mysqli_num_rows($resultado) > 0) {
                                                            // Iterar sobre los resultados y crear las opciones del select
                                                            while ($fila = mysqli_fetch_assoc($resultado)) {
                                                                $id_departamento = $fila['id_departamento'];
                                                                $tipo_departamento = $fila['tipo_departamento'];
                                                                echo "<option value='$id_departamento'>$tipo_departamento</option>";
                                                            }
                                                        } else {
                                                            echo "<option value=''>No se encontraron departamentos</option>";
                                                        }
                                                        // Cerrar la conexión a la base de datos
                                                        mysqli_close($conexion);
                                                        ?>
                                                    </select>
                                        <?php
                                            }
                                        ?>
                                                </div>
                                            </div>
                                        </div>
                                        <input class="btn btn-outline-success text-dark" href="/index.php" type="submit" name="btnmodificar" size="10" value="Modificar Registro">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


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