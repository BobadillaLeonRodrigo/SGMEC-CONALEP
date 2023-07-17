<?php
//Agrengamos la condición al formulario si todos los campos estan completos.
if (!empty($_POST["btnregistro"])) {
    if (
        !empty($_POST["id_equipo"]) and
        !empty($_POST["modelo"]) and
        !empty($_POST["marca"]) and
        !empty($_POST["observaciones"]) and
        !empty($_POST["especificaciones"]) and
        !empty($_POST["fallo_repor"]) and
        !empty($_POST["id_ubicacion"])
    ) {
        //Creamos variables para almacezar los datos del formulario.
        $id_equipo = $_POST["id_equipo"];
        $modelo = $_POST["modelo"];
        $marca = $_POST["marca"];
        $observaciones = $_POST["observaciones"];
        $especificaciones = $_POST["especificaciones"];
        $fallo_repor = $_POST["fallo_repor"];
        $id_ubicacion = $_POST["id_ubicacion"];
        //Se crea variable para la implementación de la conexión y la inserción de datos con una consulta.
        $sql = $conexion->query("INSERT INTO equipos(id_equipo,modelo,marca,observaciones,especificaciones,fallo_repor,id_ubicacion)
                    values ('$id_equipo','$modelo','$marca','$observaciones','$especificaciones','$fallo_repor','$id_ubicacion')");
        if ($sql == 1) {
            echo '<div class="alert alert-success text-center"><i class="bi bi-person-add"></i> Equipo Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Error al Registrar el Equipo</div>';
        }
    } else {
        echo '<div class="alert alert-warning text-center ronunded rounded-5"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondiente</div>';
    }
}
