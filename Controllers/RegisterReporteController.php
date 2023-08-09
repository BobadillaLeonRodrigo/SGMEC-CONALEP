<?php
//Agrengamos la condición al formulario si todos los campos estan completos.
if (!empty($_POST["btnregistro"])) {
    if (
        //Respetar el orden en que se van a desplegar en la tabla del Crud
        !empty($_POST["id_mantenimiento"]) and
        !empty($_POST["id_equipo"]) and
        !empty($_POST["descripcion"]) and
        !empty($_POST["tipo_estado"]) and
        !empty($_POST["fecha"])
    ) {
        //Creamos variables para almacezar los datos del formulario respecto al orden del formulario.
        $id_mantenimiento = $_POST["id_mantenimiento"];
        $id_equipo = $_POST["id_equipo"];
        $descripcion = $_POST["descripcion"];
        $tipo_estado = $_POST["tipo_estado"];
        $fecha = $_POST["fecha"];
        //Se crea variable para la implementación de la conexión y la inserción de datos con una consulta.
        /*  Futuros errores, toda variables asignada debe tener el orden indicado en la parte del "Inserte Into" como "Values"
            al igual en como se tiene pensado visualizar en la tabla
        */
        $sql = $conexion->query("INSERT INTO reportes(id_mantenimiento,id_equipo,descripcion,tipo_estado,fecha)
                    values ('$id_mantenimiento','$id_equipo','$descripcion','$tipo_estado','$fecha')");
        if ($sql == 1) {
            echo '<div class="alert alert-success text-center"><i class="bi bi-journals"></i> Reporte Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Error al Registrar el Equipo</div>';
        }
    } else {
        echo '<div class="alert alert-warning text-center ronunded rounded-5"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondiente</div>';
    }
}
