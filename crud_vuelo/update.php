<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$destino=$_POST['destino'];
$partida=$_POST['partida'];
$fecha=$_POST['fecha'];
$pasajeros=$_POST['pasajeros'];
$pilotos=$_POST['pilotos'];
$avion=$_POST['avion'];

$sql="UPDATE vuelo SET destino='$destino',partida='$partida',fecha='$fecha',num_pasajeros='$pasajeros',num_pilotos='$pilotos',idAvion='$avion' WHERE idVuelo='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>