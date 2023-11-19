<?php 
include '../config/conexion.php';
if($_POST){
    $nombres = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    
    $sql = "INSERT INTO empleado (nombres, apellido, correo) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $nombres, $apellido, $correo);
    $stmt->execute();

    if($stmt){
        header('location: ../index.php');
    }
    }
    ?>