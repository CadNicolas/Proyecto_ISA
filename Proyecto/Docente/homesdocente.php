<?php include '../template/header.php' ?>


<?php
include_once "../model/conexion.php";
$sentencia = $bd->query("select * from profesores");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($persona);
?>

<?php
session_start();
$codigo = $_SESSION['codigo'];
$name = $_SESSION['nombre'];
if (!isset($_SESSION['usuario'])) {
  header('Location: index.html');
  exit();
}
?>
<?php
include "../model/conexion.php";
$setencia2 = $bd->prepare("select * from profesores where documento =?;");
$setencia2->execute([$_SESSION['usuario']]);
$persona3 = $setencia2->fetch(PDO::FETCH_OBJ);
if (isset($persona3->nombre)) {
  $nombrepro = $persona3->nombre;
} else {
  $nombrepro = NULL;
}
//print_r($persona);
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
            Lista de personas
          </div>
        </did>
        <div class="p-4">
          <table class="table aling-middle">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col" colspan="2">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($persona as $dato) {
                if ($dato->documento == $_SESSION['usuario']) {
                  # code...

              ?>
                  <tr>
                    <td scope="row"><?php echo $dato->nombre; ?></td>
                    <td><?php echo $dato->apellido; ?></td>
                    <td><a class="text-success" href="editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a onclick="return confirm('¿Estas Seguro de eliminar esta cuenta?')" class="text-danger" href="eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash3-fill"></a></td>
                  </tr>

                  <thead>
              <tr>
                <th scope="col">Documento</th>
                <th scope="col">Facultad</th>
              </tr>
            </thead>

            <tr>
                    <td scope="row"><?php echo $dato->documento; ?></td>
                    <td><?php echo $dato->facultad; ?></td>
                  </tr>

              <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
          
        </form>
              <form class="p-4" >
              <a class="btn btn-primary w-100" href="comentario.php" role="button">Realizar comentarios del proyecto asignado</a>
              <br><br>
              <a class="btn btn-primary w-100" href="asignacion.php" role="button">Asignacion de proyectos y estudiante</a> 
              <br><br>
              <a class="btn btn-primary w-100" href="indexcalif.php" role="button">Registrar Calificaciones</a> 
              </form>
              
        <div class="card-footer">
          <a href="logout.php" class="btn btn-outline-danger w-100 ">Cerrar sesion<i class="bi bi-box-arrow-left"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../template/footer.php.' ?>