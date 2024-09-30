<?php

$ubicacion="localhost";
$usuario="root";
$clave="";
$base_de_datos = "corposurgir_db";

// Crear la conexión
$conn = new mysqli($ubicacion, $usuario, $clave, $base_de_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos.";
?>