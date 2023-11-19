<?php 
include '../config/conexion.php';
if($_GET){
    $id = $_GET['id'];
    
    $sql = "DELETE FROM empleado WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i",  $id);
    $stmt->execute();

    if($stmt){
        header('location: ../index.php');
    }
    }
    ?>