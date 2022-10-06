<?php include '../template/header.php' ?>

<form class="p-4" >
<a class="btn btn-primary" href="../administrativos/home.php" role="button">Administrativos</a>
</form>

<?php
include_once "../model/conexion.php";
$sentencia = $bd->query("select * from cometariodoc");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($persona);
?>

<?php
session_start();
$name = $_SESSION['nombre'];
if (!isset($_SESSION['usuario'])) {
  header('Location: index.html');
  exit();
}
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <!--inicio alerta -->


      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {

      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Rellena todos los campos.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>

      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {

      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Registrado!</strong> Se agregaron los datos.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>

      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {

      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Vuelve a intentar.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>

      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {

      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Editado!</strong> Datos Actualizados.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>

      <?php
      if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {

      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Eliminado!</strong> Datos Eliminados.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
      ?>
      <!--fin alerta -->
      <div class="mb-3 text-primary text-center">
        <h1>Bienvenidos <?php ?></h1>
      </div>
      <div class="card">
        <did class="card-header">
          <div class="text-center">
            Lista de comentarios
          </div>
        </did>
        <div class="p-6">
          <table class="table aling-middle">
            <thead>
              <tr>
              <th>
                <th scope="col">Identificacion Docente</th>
                <th scope="col">Proyecto</th>
                <th scope="col">Comentario</th>
                <th scope="col" colspan="1">Opcion</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($persona as $dato) {

              ?>
                  <tr>
                  <th>
                    <td scope="row"><?php echo $dato->identificacion; ?></td>
                    <td><?php echo $dato->proyecto; ?></td>
                    <td><?php echo $dato->comentario; ?></td>
                    <td><a onclick="return confirm('¿Estas Seguro de eliminar esta cuenta?')" class="text-danger" href="eliminarcom.php?identificacion=<?php echo $dato->identificacion; ?>"><i class="bi bi-trash3-fill"></a></td>
                    </tr>
              <?php
                
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
            <a href="logout.php" class="btn btn-outline-danger w-100 ">Cerrar sesion<i class="bi bi-box-arrow-left"></i></a>
          </div>
      </div>
    </div>
  </div>
</div>

<?php include '../template/footer.php.' ?>