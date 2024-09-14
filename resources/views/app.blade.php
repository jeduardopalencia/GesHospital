<?php
    // Verifica si el formulario ha sido enviado utilizando el método POST
    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        // Captura los datos enviados a través del formulario HTML y los almacena en variables
        $rol_id = $_POST["usu_rol_id"];
        $fecha = $_POST["usu_fecha_creacion"];
        $estado = $_POST["usu_estado"];
        $contrasenia = $_POST["usu_pass"];

        // Insert SQL y enlace de parámetros para evitar inyección SQL
        $insertarSQL = "INSERT INTO tbl_Usuarios(usu_rol_id, usu_fecha_creacion, usu_estado, usu_pass) 
                        VALUES(:nombres, :precio, :estado, :Id_Profesor, :Id_Horario)";

        $sentencia = $conexion->prepare($insertarSQL);
        $sentencia->bindParam(':nombres', $nombre);
        $sentencia->bindParam(':precio', $precio);
        $sentencia->bindParam(':estado', $estado);
        $sentencia->bindParam(':Id_Profesor', $Id_Profesor);
        $sentencia->bindParam(':Id_Horario', $Id_Horario);
    }
?>