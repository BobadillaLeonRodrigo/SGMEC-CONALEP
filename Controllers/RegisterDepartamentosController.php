<?php
//Agrengamos la condición al formulario si todos los campos estan completos.
if (!empty($_POST["btnregistro"])) {
    if (
        !empty($_POST["tipo_departamento"]) and
        !empty($_POST["descripcion"])
    ) {
        //Creamos variables para almacezar los datos del formulario.
        $tipo_departamento = $_POST["tipo_departamento"];
        $descripcion = $_POST["descripcion"];
        //Se crea variable para la implementación de la conexión y la inserción de datos con una consulta.
        $sql = $conexion->query("INSERT INTO departamento(tipo_departamento,descripcion)
                    values ('$tipo_departamento','$descripcion')");
        if ($sql == 1) {
            echo '<div class="alert alert-success text-center"><i class="bi bi-person-add"></i> Departamento Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Error al Registrar un Departamento</div>';
        }
    } else {
        echo '<div class="alert alert-warning text-center ronunded rounded-5"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondiente</div>';
    }
}
