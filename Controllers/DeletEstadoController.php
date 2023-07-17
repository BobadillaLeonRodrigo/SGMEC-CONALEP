<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM estado WHERE id_estado=$id");
    if ($sql == 1) {
        echo '<div class="table-responsive alert alert-success text-center"><i class="bi bi-person-dash-fill"></i> Estado Eliminado Correctamente</div>';
    } else {
        echo '<div class="alert alert-danger text-center">Error al Eliminar el Estado <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
    }
}
