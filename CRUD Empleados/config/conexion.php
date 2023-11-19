<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'db_crud';

$conexion = new mysqli(
    $server,$username,$password,$database);
    if ($conexion->connect_error) {
        die('Conexión fallida: ' . $conexion->connect_error);
        }
        



?>