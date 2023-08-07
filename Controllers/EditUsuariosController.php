<?php
if (!empty($_POST["btnmodificar"])) {
    if (
        //Verificamos que los campos esten completos en el formulario para modificar
        !empty($_POST["nombreu"]) and !empty($_POST["appu"]) and !empty($_POST["apmu"]) and !empty($_POST["emailu"]) and !empty($_POST["id_departamento"])
    ) {
        //La id se manda por un metodo get en la parte inferior del titulo del formulario y se almacena la variable en el archivo global modificar_usuario.php parte superior
        $id = $_POST["id"];
        //Almacenamos los datos del formulario
        $nombreu = $_POST["nombreu"];
        $appu = $_POST["appu"];
        $apmu = $_POST["apmu"];
        $emailu = $_POST["emailu"];
        $id_departamento = $_POST["id_departamento"];
        // se realiza la consulta para agregar que campos se van a actualizar del formulario
        $sql = $conexion->query("UPDATE usuarios SET nombreu='$nombreu',
                                    appu='$appu',
                                    apmu='$apmu',
                                    emailu='$emailu',
                                    id_departamento=$id_departamento WHERE id_usuario=$id ");
        //si se registro correctamente redireccionara a la pagina principal
        if ($sql == 1) {
            // si se modifico correctamente
            // Redirige a otra página
            echo '<div class="alert alert-success text-center"><i class="bi bi-person-add"></i> Usuario Modificado Correctamente</div>';
        } else {
            //si al modificar marca error
            echo '<div class="alert alert-danger text-center">Error al Modificar al Usuario <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
        }
    } else {
        // si faltan campos por llenar
        echo '<div class="alert alert-warning text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondientes</div>';
    }
}
