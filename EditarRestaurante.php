<?php
require "conexion.php";
session_start();
if (!isset($_SESSION['Identificacion'])) {
    header("Location: index.php");
}
$Identificacion = $_SESSION['Identificacion'];
$TipoUsuario = $_SESSION['TipoUsuario'];
$Usuario = $_SESSION['Usuario'];


$NombreRestaurante = '';
$NombrePropietario = '';
$Direccion = '';
$CantidadEmpleados = '';
$VariedadGastronomica = '';
$Telefono = '';
$Correo = '';
$Ciudad = '';
$Departamento = '';
$Pais = '';


if (isset($_GET['Nit'])) {
  $Nit = $_GET['Nit'];
  $query = "SELECT * FROM restaurante WHERE Nit=$Nit";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $NombreRestaurante = $row['NombreRestaurante'];
    $NombrePropietario = $row['NombrePropietario'];
    $Direccion = $row['Direccion'];
    $CantidadEmpleados = $row['CantidadEmpleados'];
    $VariedadGastronomica = $row['VariedadGastronomica'];
    $Telefono = $row['Telefono'];
    $Correo = $row['Correo'];
    $Ciudad = $row['Ciudad'];
    $Departamento = $row['Departamento'];
    $Pais = $row['Pais'];
  }
}

if (isset($_POST['update'])) {
  $Nit = $_POST['Nit'];
  $NombreRestaurante = $_POST['NombreRestaurante'];
  $NombrePropietario = $_POST['NombrePropietario'];
  $Direccion = $_POST['Direccion'];
  $CantidadEmpleados = $_POST['CantidadEmpleados'];
  $VariedadGastronomica = $_POST['VariedadGastronomica'];
  $Telefono = $_POST['Telefono'];
  $Correo = $_POST['Correo'];
  $Ciudad = $_POST['Ciudad'];
  $Departamento = $_POST['Departamento'];
  $Pais = $_POST['Pais'];

  $query = "UPDATE restaurante set NombreRestaurante = '$NombreRestaurante', NombrePropietario='$NombrePropietario', Direccion='$Direccion',  CantidadEmpleados='$CantidadEmpleados', VariedadGastronomica='$VariedadGastronomica', Telefono='$Telefono', Correo='$Correo', Ciudad='$Ciudad', Departamento='$Departamento', Pais='$Pais' WHERE Nit=$Nit";
  mysqli_query($mysqli, $query);
  $_SESSION['message'] = 'Restaurante Modificado exitosamente!';
  $_SESSION['message_type'] = 'warning';
  header('Location: GestionRestaurante.php');
}

?>
<?php include('includes/header1.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="EditarRestaurante.php?Nit=<?php echo $_GET['Nit']; ?>" method="POST">
          <div class="form-group">
            <label><b>Nit</b></label>
            <input name="Nit" type="text" class="form-control" value="<?php echo $Nit; ?>" readonly placeholder="Actualizar Nit" autofocus>
          </div>

          <div class="form-group">
            <input name="NombreRestaurante" type="text" class="form-control" value="<?php echo $NombreRestaurante; ?>" placeholder="Actualizar Nombre de Restaurante" autofocus required oninvalid="setCustomValidity('El campo Nombre Restaurante es obligatorio')" oninput="setCustomValidity('')" />
          </div>
          <div class="form-group">
            <input name="NombrePropietario" type="text" class="form-control" value="<?php echo $NombrePropietario; ?>" placeholder="Actualizar Nombre Propietario" autofocus required oninvalid="setCustomValidity('El campo Nombre de  propietario es obligatorio')" oninput="setCustomValidity('')" />
          </div>


          <div class="form-group">
            <input name="Direccion" type="text" class="form-control" value="<?php echo $Direccion; ?>" placeholder="Actualizar Direccion" autofocus required oninvalid="setCustomValidity('El campo Direccion es obligatorio')" oninput="setCustomValidity('')" />
          </div>

          <div class="form-group">
            <input name="CantidadEmpleados" type="text" class="form-control" value="<?php echo $CantidadEmpleados; ?>" placeholder="Actualizar Cantidad Empleados" autofocus required oninvalid="setCustomValidity('El campo Cantidad empleados es obligatorio')" oninput="setCustomValidity('')" />
          </div>

          
            <div class="form-group">
            <input name="VariedadGastronomica" type="text" class="form-control" value="<?php echo $VariedadGastronomica; ?>" readonly placeholder="Actualizar Variedad Gastronomica">
          </div>
          <div class="form-group">
            <input name="Telefono" type="text" class="form-control" value="<?php echo $Telefono; ?>" placeholder="Actualizar Telefono" autofocus required oninvalid="setCustomValidity('El campo Telefono es obligatorio')" oninput="setCustomValidity('')" />
          </div>
          

          <div class="form-group">
            <input name="Correo" type="text" class="form-control" value="<?php echo $Correo; ?>" placeholder="Actualizar Correo" autofocus required oninvalid="setCustomValidity('El campo Correo es obligatorio')" oninput="setCustomValidity('')" />
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