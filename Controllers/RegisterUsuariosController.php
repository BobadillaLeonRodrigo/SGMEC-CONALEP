<?php
//Agrengamos la condición al formulario si todos los campos estan completos.
if (!empty($_POST["btnregistro"])) {
    if (
        !empty($_POST["nombreu"]) and
        !empty($_POST["appu"]) and
        !empty($_POST["apmu"]) and
        !empty($_POST["emailu"]) and
        !empty($_POST["id_departamento"])
    ) {
        //Creamos variables para almacezar los datos del formulario.
        $nombreu = $_POST["nombreu"];
        $appu = $_POST["appu"];
        $apmu = $_POST["apmu"];
        $emailu = $_POST["emailu"];
        $id_departamento = $_POST["id_departamento"];
        //Se crea variable para la implementación de la conexión y la inserción de datos con una consulta.
        $sql = $conexion->query("INSERT INTO usuarios(nombreu,appu,apmu,emailu,id_departamento)
                    values ('$nombreu','$appu','$apmu','$emailu','$id_departamento')");
        if ($sql == 1) {
            echo '<div class="alert alert-success text-center"><i class="bi bi-person-add"></i> Usuario Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Error al Registrar al Usuario</div>';
        }
    } else {
        echo '<div class="alert alert-warning text-center ronunded rounded-5"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondiente</div>';
    }
}
