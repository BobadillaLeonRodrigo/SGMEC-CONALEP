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
        /*
        En el contexto de bind_param, los caracteres utilizados en la cadena representan los tipos de datos esperados.
        Cada caracter se relaciona con una variable que será vinculada a la consulta.
        Aquí está la correspondencia de caracteres y tipos de datos:
            "s": Tipo de cadena (string)
            "i": Tipo de entero
        */
        $stmt = $conexion->prepare("UPDATE usuarios SET nombreu=?, appu=?, apmu=?, emailu=?, id_departamento=? WHERE id_usuario=?");
        $stmt->bind_param("ssssii", $nombreu, $appu, $apmu, $emailu, $id_departamento, $id);
        $result = $stmt->execute();
        $stmt->close();
        //si se registro correctamente redireccionara a la pagina principal
        if ($result) {
            // si se modifico correctamente
            // Redirige a otra página
            echo '<div class="alert alert-success text-center"><i class="bi bi-person-add"></i> Usuario Modificado Correctamente</div>';
            echo '<script>setTimeout(function() { window.location.href = "http://localhost/SGMEC-Conalep/index.php"; }, 1000);</script>';
            //echo '<script>window.location.href = "http://localhost/SGMEC-Conalep/index.php";</script>';
        } else {
            //si al modificar marca error
            echo '<div class="alert alert-danger text-center">Error al Modificar al Usuario <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: red"></i></div>';
        }
    } else {
        // si faltan campos por llenar
        echo '<div class="alert alert-warning text-center"><i class="bi bi-exclamation-triangle-fill" style="color: red"></i> Ingrese Todos los Campos Correspondientes</div>';
    }
}
