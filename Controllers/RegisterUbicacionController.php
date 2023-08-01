<?php
//Agrengamos la condición al formulario si todos los campos estan completos.
if (!empty($_POST["btnregistro"])) {
    if (
        !empty($_POST["ubicacion"]) and
        !empty($_POST["lugar"])
    ) {
        //Creamos variables para almacezar los datos del formulario.
        $ubicacion = $_POST["ubicacion"];
        $lugar = $_POST["lugar"];
        //Se crea variable para la implementación de la conexión y la inserción de datos con una consulta.
        $sql = $conexion->query("INSERT INTO ubicacion(ubicacion,lugar)
                    values ('$ubicacion','$lugar')");
        if ($sql == 1) {
            echo '<div class="alert alert-success text-center"><i class="bi bi-geo-alt"></i> Edificio Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Error al Registrar un Edificio</div>';
        }
    } else {
        echo '<div class="alert alert-warning text-center ronunded rounded-5"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondiente</div>';
    }
}
