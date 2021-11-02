<?php


include('conexionv.php');

if (isset($_POST['insertarestaurante'])) {
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
  
  $query = "INSERT INTO restaurante(Nit, NombreRestaurante, NombrePropietario, Direccion, CantidadEmpleados, VariedadGastronomica, Telefono, Correo, Ciudad, Departamento, Pais) VALUES ('$Nit', '$NombreRestaurante', '$NombrePropietario', '$Direccion', '$CantidadEmpleados', '$VariedadGastronomica', '$Telefono', '$Correo', '$Ciudad', '$Departamento','$Pais')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Restaurante Registrado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: GestionRestaurante.php');
}
?>
