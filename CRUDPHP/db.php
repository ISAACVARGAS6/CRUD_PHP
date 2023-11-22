<?php
$host = 'localhost';
$usuario = 'root';
$password = '';
$db = 'crud_example';

$conexion = new mysqli($host, $usuario, $password, $db);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}
?>
