<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <br>
<div class="container">
        <a class="ancla" href="administrador.php?pag=asistencia">ASISTENCIA</a>
       <a class="ancla" href="administrador.php?pag=consultaVotacion">VOTACIONES</a>
</div>
<?php

    @$pag=$_GET['pag'];
    

    if($pag){
        require "pages/".$pag.".php";
    }else{
        require "pages/"."homeAdmin".".php";
    }
   

?> 
<div>
    <a class="btn btn-primary d-grid gap-2 col-2 mx-auto"href="./php/salir.php">Salir</a>
</div>
    
</body>
</html>