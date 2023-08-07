<?php
//Agrengamos la condición al formulario si todos los campos estan completos.
if (!empty($_POST["btnregistro"])) {
    if (
        !empty($_POST["id_mantenimiento"]) and
        !empty($_POST["id_equipo"]) and
        !empty($_POST["id_estado"]) and
        !empty($_POST["descripcion"]) and
        !empty($_POST["fecha"])
    ) {
        //Creamos variables para almacezar los datos del formulario.
        $id_mantenimiento = $_POST["id_mantenimiento"];
        $id_equipo = $_POST["id_equipo"];
        $fecha = $_POST["fecha"];
        $descripcion = $_POST["descripcion"];
        $id_estado = $_POST["id_estado"];
        //Se crea variable para la implementación de la conexión y la inserción de datos con una consulta.
        //Futuros errores, toda variables asignada debe tener el orden indicado en la parte del "Inserte Into" como "Values"
        $sql = $conexion->query("INSERT INTO reportes(id_mantenimiento,id_equipo,descripcion,fecha,id_estado)
                    values ('$id_mantenimiento','$id_equipo','$fecha','$descripcion','$id_estado')");
        if ($sql == 1) {
            echo '<div class="alert alert-success text-center"><i class="bi bi-journals"></i> Reporte Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Error al Registrar el Equipo</div>';
        }
    } else {
        echo '<div class="alert alert-warning text-center ronunded rounded-5"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondiente</div>';
    }
}
