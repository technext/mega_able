<?php


include('conexionv.php');


if (isset($_POST['insertalistachequeo'])) {
  $Nit = $_POST['Nit'];
  $Nombre = $_POST['Nombre'];
  $Certificado = $_POST['Certificado'];
  $Proteccion = $_POST['Proteccion'];
  $Uniformes = $_POST['Uniformes'];
  $Manos = $_POST['Manos'];
  $Practicas = $_POST['Practicas'];
  $Lavan = $_POST['Lavan'];
  $Evidencian = $_POST['Evidencian'];
  $Establecimiento = $_POST['Establecimiento'];
  $Equipos = $_POST['Equipos'];
  $Total = $_POST['Total'];

 



  $query = "INSERT INTO listachequeo(Nit,Nombre, Certificado, Proteccion, Uniformes, Manos, Practicas, Lavan, Evidencian, Establecimiento, Equipos,Total) VALUES ('$Nit','$Nombre', '$Certificado', '$Proteccion', '$Uniformes', '$Manos', '$Practicas', '$Lavan', '$Evidencian', '$Establecimiento', '$Equipos', '$Total')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Lista Chequeo Registrado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: ListaChequeo.php');

}

?>
