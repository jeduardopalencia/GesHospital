<?php
    $servidor = "sql308.byethost7.com";
    $nombreDB = "b7_37207049_Hospital";
    $usuario = "b7_37207049";
    $contrasenia = "22601890aB@";

    try{
        //Crear la coneccion PDO
        $conexion = new PDO("mysql:host=$servidor; dbname=$nombreDB", $usuario, $contrasenia);

        //Configurar PDO que lance excepciones en caso de error
        $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Mensaje de conexion exitosa
        echo "Conexión exitosa";
    }
    catch(PDOExcption $ex){
        echo "Error de conexión: " . $ex->getMessage();
    }
?>