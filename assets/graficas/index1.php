<?php

//if (isset($_POST['filtro'])) {
  $FechaRegistro = $_POST['FechaRegistro'];

$con = new mysqli("localhost","root","","microparque"); // Conectar a la BD
$sql = "select * from encuestaambiental where FechaRegistro='".$FechaRegistro."'"; // Consulta SQL

$sqlcount = "select COUNT(*) as t FROM encuestaambiental WHERE FechaRegistro ='".$FechaRegistro."'";


$query = $con->query($sql); // Ejecutar la consulta SQL
$aux=$query;
$query=$con->query($sqlcount);
$aux1=$query;
//echo $sqlcount;
$data = array(); // Array donde vamos a guardar los datos

$datacount=array();

while($r = $aux->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
    $data[]=$r; // Guardar los resultados en la variable $data
   // echo $data;
}

while($r = $aux1->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
    $datacount[]=$r; // Guardar los resultados en la variable $data
   // echo $data;
}



//echo $data[]=$r;
//}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grafica de Encuesta Componente Ambiental</title>
    <script src="chart.min.js"></script>
    <link href="../css/styles.css" rel="stylesheet" />
</head>
<body>
<h1>Grafica de Encuesta Componente Ambiental</h1>
<h4>
  <a href="/Micro/index.php" class="btn btn-danger btn- active" role="button" aria-pressed="true">Salir</a>
</h4>
<canvas id="chart1" style="width:100%;" height="100"></canvas>
<script>
var ctx = document.getElementById("chart1");
var data = {
        labels: [ 
        <?php foreach($data as $d):?>
        "<?php echo $d->FechaRegistro?>", 
       
        <?php endforeach; ?>
        ],
        datasets: [{
            label: 'Cantidad Encuestados',
            data: [
        <?php foreach($datacount as $d):?>
        <?php echo $d->t;?>, 
      

        <?php endforeach; ?>
            ],
            backgroundColor: "#5110DB",
            borderColor: "#F2056A",
            borderWidth: 10
        }]
    };
var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    };
var chart1 = new Chart(ctx, {
    type: 'bar', /* valores: line, bar*/
    data: data,
    

    options: options
});
</script>
</body>
</html>