<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM ubicacion WHERE id_ubicacion=$id");
    if ($sql == 1) {
        echo '<div class="table-responsive alert alert-success text-center"><i class="bi bi-person-dash-fill"></i> Edificio Eliminado Correctamente</div>';
    } else {
        echo '<div class="alert alert-danger text-center">Error al Eliminar el Edificio <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
    }
}
