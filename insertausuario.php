<?php


include('conexionv.php');

if (isset($_POST['insertausuario'])) {
  $Contraseña = $_POST['Contraseña'];
  $Identificacion = $_POST['Identificacion'];
  $Nombres = $_POST['Nombres'];
  $TipoUsuario = $_POST['TipoUsuario'];
  $Usuario = $_POST['Usuario'];

  $query = "INSERT INTO usuario(Contraseña, Identificacion, Nombres, TipoUsuario, Usuario) VALUES ('$Contraseña', '$Identificacion', '$Nombres','$TipoUsuario','$Usuario')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Usuario guardado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: GestionUsuario.php');

}

?>
