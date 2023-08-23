<?php
if (!empty($_POST["btnmodificar"])) {
    if (
        //Verificamos que los campos esten completos en el formulario para modificar
        !empty($_POST["tipo_departamento"]) and !empty($_POST["descripcion"])
    ) {
        //La id se manda por un metodo get en la parte inferior del titulo del formulario y se almacena la variable en el archivo global modificar_usuario.php parte superior
        $id = $_POST["id"];
        //Almacenamos los datos del formulario
        $tipo_departamento = $_POST["tipo_departamento"];
        $descripcion = $_POST["descripcion"];
        // se realiza la consulta para agregar que campos se van a actualizar del formulario
        $stmt = $conexion->prepare("UPDATE departamento SET tipo_departamento=?, descripcion=? WHERE id_departamento=?");
        $stmt->bind_param("ssi", $tipo_departamento, $descripcion, $id);
        $result = $stmt->execute();
        $stmt->close();
        //si se registro correctamente redireccionara a la pagina principal
        if ($result) {
            // si se modifico correctamente
            // Redirige a otra página
            echo '<div class="alert alert-success text-center"><i class="bi bi-building-fill-check"></i> Departamento Modificado Correctamente</div>';
            echo '<script>setTimeout(function() { window.location.href = "http://localhost/SGMEC-Conalep/Departamentos.php"; }, 1000);</script>';
        } else {
            //si al modificar marca error
            echo '<div class="alert alert-danger text-center">Error al Modificar el Departamento <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
        }
    } else {
        // si faltan campos por llenar
        echo '<div class="alert alert-warning text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondientes</div>';
    }
}
