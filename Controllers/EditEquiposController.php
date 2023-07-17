<?php
if (!empty($_POST["btnmodificar"])) {
    if (
        //Verificamos que los campos esten completos en el formulario para modificar
        !empty($_POST["id_equipo"]) and
        !empty($_POST["modelo"]) and
        !empty($_POST["marca"]) and
        !empty($_POST["observaciones"]) and
        !empty($_POST["especificaciones"]) and
        !empty($_POST["fallo_repor"]) and
        !empty($_POST["id_ubicacion"])
    ) {
        //La id se manda por un metodo get en la parte inferior del titulo del formulario y se almacena la variable en el archivo global modificar_usuario.php parte superior
        $id = $_POST["id"];
        //Almacenamos los datos del formulario
        $id_equipo = $_POST["id_equipo"];
        $modelo = $_POST["modelo"];
        $marca = $_POST["marca"];
        $observaciones = $_POST["observaciones"];
        $especificaciones = $_POST["especificaciones"];
        $fallo_repor = $_POST["fallo_repor"];
        $id_ubicacion = $_POST["id_ubicacion"];
        // se realiza la consulta para agregar que campos se van a actualizar del formulario
        $sql = $conexion->query("UPDATE equipos SET id_equipo='$id_equipo', modelo='$modelo', marca='$marca', observaciones='$observaciones', especificaciones=$especificaciones, fallo_repor=$fallo_repor, id_ubicacion=$id_ubicacion WHERE id_equipo=$id ");
                    //si se registro correctamente redireccionara a la pagina principal
        if ($sql == 1) {
            // si se modifico correctamente
            // Redirige a otra página
            echo '<div class="alert alert-success text-center"><i class="bi bi-person-add"></i> Equipo Modificado Correctamente</div>';
        } else {
            //si al modificar marca error
            echo '<div class="alert alert-danger text-center">Error al Modificar el Equipo <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
        }
    } else {
        // si faltan campos por llenar
        echo '<div class="alert alert-warning text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondientes</div>';
    }
}
