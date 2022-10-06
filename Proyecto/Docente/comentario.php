<?php include '../template/header.php' ?>

<div class="container">
      <form class="p-4">
      <a class="btn btn-primary" href="../Docente/homesdocente.php" role="button">Regresar</a>  
      </form>

      <div class="container">
        <div class="mt-5 text-primary text-center">
          <h1>Registar Comentario</h1>
        </div>
        <form class="p-4" method="POST" action="coment.php">
        <div class="mb-3">
            <label class="form-label">Identificacion Docente: </label>
            <input type="number" class="form-control" name="txtIdentificacion" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Proyecto: </label>
            <input type="text" class="form-control" name="txtProyecto" autofocus required>
          </div>
          <div class="mb-3">
            <label class="form-label">Comentario: </label>
            <input type="text" class="form-control" name="txtComentario" autofocus required>
          </div>
          <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" class="btn btn-primary" value="Registrar">
          </div>
        </form>
      </div>
<?php include '../template/footer.php' ?>