<?php
    print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtIdsolicitud"]) || empty($_POST["txtNombredoc"]) 
    || empty($_POST["txtAsunto"]) || empty($_POST["txtSolicitud"])){
    echo "faltan datos";
    }

    include_once '../model/conexion.php';
    $idsolicitud = $_POST["txtIdsolicitud"];
    $nombredoc = $_POST["txtNombredoc"];
    $asunto = $_POST["txtAsunto"];
    $solicitud = $_POST["txtSolicitud"];
    $sentencia = $bd ->prepare("INSERT INTO solicitudes(idsolicitud,nombredoc,asunto,solicitud,solicitante) 
    VALUES(?,?,?,?,?);");
    $resultado = $sentencia->execute([$idsolicitud,$nombredoc,$asunto,$solicitud,"solicitudes"]);

    if ($resultado === TRUE) {
      header('Location: ../estudiante/homestudent.php?mensaje=registrado');
    } else {
      echo "error";
    }
    
?>
