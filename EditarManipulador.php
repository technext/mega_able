<?php
require "conexion.php";
session_start();
if (!isset($_SESSION['Identificacion'])) {
    header("Location: index.php");
}
$Identificacion = $_SESSION['Identificacion'];
$TipoUsuario = $_SESSION['TipoUsuario'];
$Usuario = $_SESSION['Usuario'];


$Nombres = '';
$Apellidos = '';
$Sexo = '';
$Celular = '';
$Correo = '';
$NivelEducativo = '';
$ExperienciaLaboral = '';
$EstadoCivil = '';
$Direccion = '';
$Ciudad = '';
$Departamento = '';
$Pais = '';


if (isset($_GET['Identificacion'])) {
  $Identificacion = $_GET['Identificacion'];
  $query = "SELECT * FROM manipulador WHERE Identificacion=$Identificacion";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombres = $row['Nombres'];
    $Apellidos = $row['Apellidos'];
    $Sexo = $row['Sexo'];
    $Celular = $row['Celular'];
    $Correo = $row['Correo'];
    $NivelEducativo = $row['NivelEducativo'];
    $ExperienciaLaboral = $row['ExperienciaLaboral'];
    $EstadoCivil = $row['EstadoCivil'];
    $Direccion = $row['Direccion'];
    $Ciudad = $row['Ciudad'];
    $Departamento = $row['Departamento'];
    $Pais = $row['Pais'];
  }
}

if (isset($_POST['update'])) {
  $Identificacion = $_GET['Identificacion'];
  $Nombres = $_POST['Nombres'];
  $Apellidos = $_POST['Apellidos'];
  $Sexo = $_POST['Sexo'];
  $Celular = $_POST['Celular'];
  $Correo = $_POST['Correo'];
  $NivelEducativo = $_POST['NivelEducativo'];
  $ExperienciaLaboral = $_POST['ExperienciaLaboral'];
  $EstadoCivil = $_POST['EstadoCivil'];
  $Direccion = $_POST['Direccion'];
  $Ciudad = $_POST['Ciudad'];
  $Departamento = $_POST['Departamento'];
  $Pais = $_POST['Pais'];


  $query = "UPDATE manipulador set Nombres = '$Nombres', Apellidos='$Apellidos',  Sexo='$Sexo', Celular='$Celular', Correo='$Correo', NivelEducativo='$NivelEducativo', ExperienciaLaboral='$ExperienciaLaboral', EstadoCivil='$EstadoCivil', Direccion='$Direccion', Ciudad='$Ciudad', Departamento='$Departamento', Pais='$Pais' WHERE Identificacion=$Identificacion";
  mysqli_query($mysqli, $query);
  $_SESSION['message'] = 'Manipulador Modificado exitosamente!';
  $_SESSION['message_type'] = 'warning';
  header('Location: GestionManipulador.php');
}

?>
<?php include('includes/header1.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="EditarManipulador.php?Identificacion=<?php echo $_GET['Identificacion']; ?>" method="POST">
          <div class="form-group">
            <label><b>Identificación</b></label>
            <input name="Identificacion" type="text" class="form-control" value="<?php echo $Identificacion; ?>" readonly placeholder="Actualizar Identificacion" autofocus>
          </div>

          <div class="form-group">
            <input name="Nombres" type="text" class="form-control" value="<?php echo $Nombres; ?>" placeholder="Actualizar Nombres" autofocus required oninvalid="setCustomValidity('El campo nombres es obligatorio')" oninput="setCustomValidity('')" />
          </div>
          <div class="form-group">
            <input name="Apellidos" type="text" class="form-control" value="<?php echo $Apellidos; ?>" placeholder="Actualizar Apellidos" autofocus required oninvalid="setCustomValidity('El campo Apellidos es obligatorio')" oninput="setCustomValidity('')" />
          </div>

          <div class="form-group">
            <input name="Sexo" type="text" class="form-control" value="<?php echo $Sexo; ?>" readonly placeholder="Actualizar Tipo de Usuario">
          </div>

          <div class="form-group">
            <input name="Celular" type="text" class="form-control" value="<?php echo $Celular; ?>" placeholder="Actualizar Celular" autofocus required oninvalid="setCustomValidity('El campo Celular es obligatorio')" oninput="setCustomValidity('')" />
          </div>
          <div class="form-group">
            <input name="Correo" type="text" class="form-control" value="<?php echo $Correo; ?>" placeholder="Actualizar Correo" autofocus required oninvalid="setCustomValidity('El campo Correo es obligatorio')" oninput="setCustomValidity('')" />
          </div>
            <div class="form-group">
            <input name="NivelEducativo" type="text" class="form-control" value="<?php echo $NivelEducativo; ?>" readonly placeholder="Actualizar Nivel Educativo">
          </div>

          <div class="form-group">
           <div class="form-group">
            <input name="ExperienciaLaboral" type="text" class="form-control" value="<?php echo $ExperienciaLaboral; ?>" readonly placeholder="Actualizar Experiencia Laboral">
          </div>
          <div class="form-group">
           <div class="form-group">
            <input name="EstadoCivil" type="text" class="form-control" value="<?php echo $EstadoCivil; ?>" readonly placeholder="Actualizar Estado civil">
          </div>
          <div class="form-group">
          <div class="form-group">
            <input name="Direccion" type="text" class="form-control" value="<?php echo $Direccion; ?>" placeholder="Actualizar Direccion" autofocus required oninvalid="setCustomValidity('El campo Direccion es obligatorio')" oninput="setCustomValidity('')" />
          </div>
          <div class="form-group">
            <input name="Ciudad" type="text" class="form-control" value="<?php echo $Ciudad; ?>" placeholder="Actualizar Ciudad" autofocus required oninvalid="setCustomValidity('El campo Ciudad es obligatorio')" oninput="setCustomValidity('')" />
          </div>
          <div class="form-group">
            <input name="Departamento" type="text" class="form-control" value="<?php echo $Departamento; ?>" placeholder="Actualizar Departamento" autofocus required oninvalid="setCustomValidity('El campo Departamento es obligatorio')" oninput="setCustomValidity('')" />
          </div>
          <div class="form-group">
            <input name="Pais" type="text" class="form-control" value="<?php echo $Pais; ?>" placeholder="Actualizar Pais" autofocus required oninvalid="setCustomValidity('El campo Pais es obligatorio')" oninput="setCustomValidity('')" />
          </div>

          <input type="submit" name="update" class="btn-success" value="Actualizar">
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer2.php'); ?>