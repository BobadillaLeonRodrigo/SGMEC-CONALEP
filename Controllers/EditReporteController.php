<?php
if (!empty($_POST["btnmodificar"])) {
    if (
        //Verificamos que los campos esten completos en el formulario para modificar
        !empty($_POST["id_mantenimiento"]) and
        !empty($_POST["id_equipo"]) and
        !empty($_POST["descripcion"]) and
        !empty($_POST["tipo_estado"]) and
        !empty($_POST["fecha"])
    ) {
        //La id se manda por un metodo get en la parte inferior del titulo del formulario y se almacena la variable en el archivo global modificar_usuario.php parte superior
        $id = $_POST["id"];
        //Almacenamos los datos del formulario
        $id_mantenimiento = $_POST["id_mantenimiento"];
        $id_equipo = $_POST["id_equipo"];
        $descripcion = $_POST["descripcion"];
        $tipo_estado = $_POST["tipo_estado"];
        $fecha = $_POST["fecha"];
        // se realiza la consulta para agregar que campos se van a actualizar del formulario
        $sql = $conexion->query("UPDATE reportes SET id_mantenimiento='$id_mantenimiento',
                                    id_equipo='$id_equipo',
                                    descripcion='$descripcion',
                                    tipo_estado ='$tipo_estado',
                                    fecha='$fecha' WHERE id_reporte=$id ");
        //si se registro correctamente redireccionara a la pagina principal
        if ($sql == 1) {
            // si se modifico correctamente
            echo '<div class="alert alert-success text-center"><i class="bi bi-journals"></i> Reporte Modificado Correctamente</div>';
        } else {
            //si al modificar marca error
            echo '<div class="alert alert-danger text-center">Error al Modificar el Equipo <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
        }
    } else {
        // si faltan campos por llenar
        echo '<div class="alert alert-warning text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondientes</div>';
    }
}
