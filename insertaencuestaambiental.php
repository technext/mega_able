<?php


include('conexionv.php');


if (isset($_POST['insertaencuestaambiental'])) {
  $Nombre = $_POST['Nombre'];
  $Apellidos = $_POST['Apellidos'];
  $FechaRegistro = $_POST['FechaRegistro'];
  $Abono = $_POST['Abono'];
  $DesechosOrganicos = $_POST['DesechosOrganicos'];
  $ImplementacionAbono = $_POST['ImplementacionAbono'];
  $EliminarDesechos = $_POST['EliminarDesechos'];
  $ElaborarAbono = $_POST['ElaborarAbono'];
  $AbonoOrganico = $_POST['AbonoOrganico'];
  $BeneficiosAbono = $_POST['BeneficiosAbono'];
  $ContaminacionAmbiental = $_POST['ContaminacionAmbiental'];
  $ProtegerAmbiente = $_POST['ProtegerAmbiente'];
 
  


  $query = "INSERT INTO encuestaambiental(Nombre, Apellidos, FechaRegistro, Abono, DesechosOrganicos, ImplementacionAbono, EliminarDesechos, ElaborarAbono, AbonoOrganico, BeneficiosAbono, ContaminacionAmbiental, ProtegerAmbiente) VALUES ('$Nombre', '$Apellidos', '$FechaRegistro', '$Abono', '$DesechosOrganicos', '$ImplementacionAbono', '$EliminarDesechos', '$ElaborarAbono', '$AbonoOrganico', '$BeneficiosAbono', '$ContaminacionAmbiental', '$ProtegerAmbiente')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Encuesta de Componente Ambiental Registrada exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: EncuestaAmbiental.php');

}

?>

