<?php include '../template/header.php' ?>
     
<div class="container">
      <form class="p-4" >
      <a class="btn btn-primary" href="homestudent.php" role="button">Regresar</a>
      </form>

      <div class="mt-5 text-primary text-center">
      <h1>Registrar Solicitud</h1>
      </div>
      <br>

      <form class="p-4" method="POST" action="datossol.php">
      <a class="btn btn-primary btn-lg" href="descargar.php" role="button">Enviar Documento</a>
      (ENVIA TU DOCUMENTO PRIMERO)<br><br> 

          <div class="mb-3">
            <label class="form-label">Digite su documento:  </label>
            <input type="number" class="form-control" name="txtIdsolicitud" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Nombre Proyecto: </label>
            <input type="text" class="form-control" name="txtNombredoc" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Asunto: </label>
            <input type="text" class="form-control" name="txtAsunto" autofocus required>
          </div>
          <div class="mb-3">
                <label class="form-label">Digite su solicitud: </label>
                <textarea type="text" class="form-control" name="txtSolicitud" rows="4" cols="50" 
                  placeholder="Max 100 caracteres" autofocus required></textarea>
                </div>
          <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" class="btn btn-outline-success mt-3 w-100" value="Hacer solicitud">
          </div>
        </form>
      </div>
<?php include '../template/footer.php' ?>