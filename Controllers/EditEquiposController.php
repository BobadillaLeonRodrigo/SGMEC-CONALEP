<?php
if (!empty($_POST["btnmodificar"])) {
    if (
        // Verificamos que los campos estén completos en el formulario para modificar
        !empty($_POST["id_equipo"]) && !empty($_POST["numserie"]) && !empty($_POST["marca"]) && !empty($_POST["observaciones"]) && !empty($_POST["especificaciones"]) && !empty($_POST["fallo_repor"]) && !empty($_POST["id_ubicacion"])
    ) {
        $id = $_POST["id"];
        $id_equipo = $_POST["id_equipo"];
        $numserie = $_POST["numserie"];
        $marca = $_POST["marca"];
        $observaciones = $_POST["observaciones"];
        $especificaciones = $_POST["especificaciones"];
        $fallo_repor = $_POST["fallo_repor"];
        $id_ubicacion = $_POST["id_ubicacion"];
        // Consulta SQL preparada para actualizar los datos del equipo
        $stmt = $conexion->prepare("UPDATE equipos SET id_equipo=?, numserie=?, marca=?, observaciones=?, especificaciones=?, fallo_repor=?, id_ubicacion=? WHERE id_equipo=?");
        $stmt->bind_param("ssssssii", $id_equipo, $numserie, $marca, $observaciones, $especificaciones, $fallo_repor, $id_ubicacion, $id);
        $result = $stmt->execute();
        $stmt->close();

        if ($result) {
            // si se modificó correctamente
            echo '<div class="alert alert-success text-center"><i class="bi bi-pc-display"></i> Equipo Modificado Correctamente</div>';
            echo '<script>setTimeout(function() { window.location.href = "http://localhost/SGMEC-Conalep/Equipos.php"; }, 1000);</script>';
        } else {
            // si al modificar marca error
            echo '<div class="alert alert-danger text-center">Error al Modificar el Equipo <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
        }
    } else {
        // si faltan campos por llenar
        echo '<div class="alert alert-warning text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondientes</div>';
    }
}
?>
