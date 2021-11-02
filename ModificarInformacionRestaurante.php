<?php
require "conexion.php";
 
 $Nit = $_POST['Nit'];
  $Instalaciones = $_POST['Instalaciones'];
  $Cupo = $_POST['Cupo'];
  $Cuenta = $_POST['Cuenta'];
  $Seña = $_POST['Seña'];
  $Pagina = $_POST['Pagina'];
  $Afirmativo = $_POST['Afirmativo'];
 


$query="UPDATE restaurante SET Instalaciones='$Instalaciones', Cupo='$Cupo', Cuenta='$Cuenta', Seña='$Seña', Pagina= '$Pagina', Afirmativo='$Afirmativo' WHERE Nit= $Nit";


  $result = mysqli_query($mysqli, $query);


  if(!$result) 
{ 
echo" 
<script language='javascript'> 
alert('Error') 
window.location='InformacionResturante.php' 
</script>"; 
exit(); 
} 
else 
{ 
echo" 
<script language='javascript'> 
alert('..:::: Guardado con exito!::::..') 
window.location='InformacionResturante.php' 
</script>"; 
}

?>