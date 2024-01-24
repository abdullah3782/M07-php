<?php

// servidor MySQL
$servidor = "localhost";

// Datos de usuario
$usuario = "root";
$password = "";

try {

    $conexion = new PDO("mysql:host=$servidor;dbname=prueba", $usuario, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexion con exito";
} catch (PDOException $ex) {
    echo "Conexion con exito " . $ex->getMessage();
}

$conexion = null;

?>