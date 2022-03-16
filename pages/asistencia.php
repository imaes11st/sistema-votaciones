<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      type="text/css"
      href="styles/styles.css"
      media="screen"
    />
    <title>Document</title>
</head>
<body>
<br>
<?php

require("php/conexion.php");

$sql="SELECT * FROM asistencia";
$cantidadAsistencia="SELECT count(*) cantidad FROM asistencia";

$queryCantidad=mysqli_query($con,$cantidadAsistencia)or die("error al consultar".mysli_error($con));
$reg=mysqli_fetch_array($queryCantidad);

$cantAsis=$reg['cantidad'];





$query=mysqli_query($con,$sql)or die("error al consultar".mysli_error($con));

echo '<table class="table table-sm" style="margin-left: auto;
margin-right: auto;">';
while($res=mysqli_fetch_array($query)){
    echo '<tr>';
        echo '<th>';
            echo $res['id'];
        echo '</th>';

        echo '<th>';
        echo $res['usuario'];
        
    echo '</th>';

        echo '<th>';
        echo $res['fecha'];
        echo '</th>';


    echo '</tr>';
} 


echo '</table>';

?>
<br>
    <div class="ancla">
        <h2>
        Total de participantes:
        <?php echo $cantAsis; ?>
        </h2>
    </div>


</body>
</html>