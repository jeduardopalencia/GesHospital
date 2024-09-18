<?php
    $servidor = "127.0.0.1";
    $nombreDB = "Hospital";
    $usuario = "root";
    $contrasenia = "";

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
