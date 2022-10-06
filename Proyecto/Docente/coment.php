<?php
    print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtIdentificacion"]) || empty($_POST["txtProyecto"])
    || empty($_POST["txtComentario"])){
    echo "faltan datos";
    }

    include_once '../model/conexion.php';
    $identificacion = $_POST["txtIdentificacion"];
    $proyecto = $_POST["txtProyecto"];
    $comentario = $_POST["txtComentario"];
    $sentencia = $bd ->prepare("INSERT INTO cometariodoc(identificacion,proyecto,comentario,rol) 
    VALUES(?,?,?,?);");
    $resultado = $sentencia->execute([$identificacion,$proyecto,$comentario,"cometariodoc"]);

    if ($resultado === TRUE) {
      header('Location: ../Docente/homesdocente.php?mensaje=registrado');
    } else {
      echo "error";
    }
    
?>