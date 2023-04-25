<?php
require "conexion.php";
 
 $Identificacion = $_POST['Identificacion'];
  $Normas = $_POST['Normas'];
  $Buenas = $_POST['Buenas'];
  $Resolucion = $_POST['Resolucion'];
  $Contaminacion = $_POST['Contaminacion'];
  $Inocuo = $_POST['Inocuo'];
  $Afirmativo = $_POST['Afirmativo'];
  $Capacitacion = $_POST['Capacitacion'];
  $Certificado = $_POST['Certificado'];
  $Cropologico = $_POST['Cropologico'];
  $Caso = $_POST['Caso'];
  $Alimentos = $_POST['Alimentos'];
  $Prendas = $_POST['Prendas'];
  $Bata= $_POST['Bata'];
  $Tiempo = $_POST['Tiempo'];
  $Frecuencia = $_POST['Frecuencia'];
  $Retira = $_POST['Retira'];


$query="UPDATE manipulador SET Normas='$Normas', Buenas='$Buenas', Resolucion='$Resolucion', Contaminacion='$Contaminacion', Inocuo= '$Inocuo', Afirmativo='$Afirmativo', Capacitacion='$Capacitacion', Certificado='$Certificado', Cropologico='$Cropologico', Caso='$Caso', Alimentos='$Alimentos', Prendas= '$Prendas', Bata='$Bata', Tiempo='$Tiempo', Frecuencia='$Frecuencia', Retira='$Retira' WHERE Identificacion= $Identificacion";


  $result = mysqli_query($mysqli, $query);


  if(!$result) 
{ 
echo" 
<script language='javascript'> 
alert('Error') 
window.location='InformacionManipulador.php' 
</script>"; 
exit(); 
} 
else 
{ 
echo" 
<script language='javascript'> 
alert('..:::: Guardado con exito!::::..') 
window.location='InformacionManipulador.php' 
</script>"; 
}

?>