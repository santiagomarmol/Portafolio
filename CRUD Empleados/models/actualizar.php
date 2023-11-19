<?php 
include '../config/conexion.php';
if($_POST){
    $nombres = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $id = $_POST['id'];
    
    $sql = "UPDATE empleado SET nombres = ?, apellido = ?, correo = ? WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssi", $nombres, $apellido, $correo , $id);
    $stmt->execute();

    if($stmt){
        header('location: ../index.php');
    }
    }
    ?>