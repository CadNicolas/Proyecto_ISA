<?php
    if(!isset($_GET['idsolicitud'])){
      header('Location: ../administrativos/index.php?mensaje=error');
      exit();
    }

    include '../model/conexion.php';
    $idsolicitud = $_GET['idsolicitud'];

    $sentencia = $bd->prepare("DELETE FROM solicitudes where idsolicitud =?;");
    $resultado = $sentencia->execute([$idsolicitud]);

    if ($resultado === TRUE) {
      header('Location: ../administrativos//homesolicitud.php?mensaje=eliminado');
    } else {
      header('Location: ../administrativos//homesolicitud.php?mensaje=error');
      exit();
    }
    
?>