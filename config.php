<?php
$host = "sql112.infinityfree.com";
$usuario = "if0_36019982";
$contrasena = "SlTKzI3N6Z32E";
$nombre_bd = "prueba";

$conn = new mysqli($host, $usuario, $contrasena, $nombre_bd);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}
?>
