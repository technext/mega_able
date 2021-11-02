<?php


include('conexionv.php');

if (isset($_POST['insertamanipulador'])) {
  $Identificacion = $_POST['Identificacion'];
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
  
  $query = "INSERT INTO manipulador(Identificacion, Nombres, Apellidos, Sexo, Celular, Correo, NivelEducativo, ExperienciaLaboral, EstadoCivil, Direccion, Ciudad, Departamento, Pais) VALUES ('$Identificacion', '$Nombres', '$Apellidos', '$Sexo', '$Celular', '$Correo', '$NivelEducativo', '$ExperienciaLaboral', '$EstadoCivil', '$Direccion', '$Ciudad', '$Departamento', '$Pais')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Manipulador Registrado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
