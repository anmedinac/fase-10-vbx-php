<?php
// Recibir el parámetro 'nombre' desde la URL
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    echo "Hola, $username";
} else {
    echo "No se proporcionó el parámetro 'username'.";
}
?>