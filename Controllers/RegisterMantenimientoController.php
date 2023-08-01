<?php
//Agrengamos la condición al formulario si todos los campos estan completos.
if (!empty($_POST["btnregistro"])) {
    if (
        !empty($_POST["tipo_mantenimiento"]) and
        !empty($_POST["descripcion"])
    ) {
        //Creamos variables para almacezar los datos del formulario.
        $tipo_mantenimiento = $_POST["tipo_mantenimiento"];
        $descripcion = $_POST["descripcion"];
        //Se crea variable para la implementación de la conexión y la inserción de datos con una consulta.
        $sql = $conexion->query("INSERT INTO mantenimiento (tipo_mantenimiento,descripcion)
                    values ('$tipo_mantenimiento','$descripcion')");
        if ($sql == 1) {
            echo '<div class="alert alert-success text-center"><i class="bi bi-gear-wide-connected"></i> Mantenimiento Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Error al Registrar un Mantenimiento</div>';
        }
    } else {
        echo '<div class="alert alert-warning text-center ronunded rounded-5"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondiente</div>';
    }
}
