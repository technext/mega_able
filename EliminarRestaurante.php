<?php

include("conexionv.php");


if (!isset($_SESSION['Identificacion'])) {
	header("Location: index.php");
}


if(isset($_GET['Nit'])) {
  $Nit = $_GET['Nit'];
  $query = "DELETE FROM restaurante WHERE Nit = $Nit";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ha ocurrido un error.");
  }

  $_SESSION['message'] = 'Restaurante Eliminado Satisfactoriamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: GestionRestaurante.php');
}

?>
