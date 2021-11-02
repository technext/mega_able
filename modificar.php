<?php

require "conexion.php";
session_start();

if (!isset($_SESSION['Identificacion'])) {
    header("Location: index.php");
}

$Identificacion = $_SESSION['Identificacion'];
$TipoUsuario = $_SESSION['TipoUsuario'];
$Nombres = $_SESSION['Nombres'];
$Contraseña ='';
$Apellidos ='';
$TipoUsuario ='';
$Usuario='';

if(isset($_GET['Identificacion'])){
  $Identificacion = $_GET['Identificacion'];
  $query = "SELECT * FROM usuario WHERE Identificacion=$Identificacion";
   $result= mysqli_query($mysqli, $query);
   if(mysqli_num_rows($result)== 1){
      $row =mysqli_fetch_array($result);
      $Contraseña = $row['Contraseña'];
      $Apellidos = $row['Apellidos'];
      $TipoUsuario = $row['TipoUsuario'];
      $Usuario = $row['Usuario'];
   }
}
if(isset($_GET['update'])){
   $Identificacion = $_GET['Identificacion'];
   $Contraseña = $_POST['Contraseña'];
   $Apellidos = $_POST['Apellidos'];
   $Nombres = $_POST['Nombres'];
   $TipoUsuario = $_POST['TipoUsuario'];
   $Usuario = $_POST['Usuario'];
   $query ="UPDATE usuario set Contraseña = $'Contraseña',Apellidos = $'Apellidos',Nombres = $'Nombres',TipoUsuario = $'TipoUsuario',Usuario = $'Usuario' WHERE Identificacion =$Identificacion";
   mysqli_query($mysqli, $query);
   $_SESSION['message'] ='Usuario Modificado Exitosamente';
   $_SESSION['message_type'] ='warning';
   header('Location:GestionUsuario.php');
}


?>