<?php
include("conexion.php");
$con=conectar();

$destino=$_POST['destino'];
$partida=$_POST['partida'];
$fecha=$_POST['fecha'];
$pasajeros=$_POST['pasajeros'];
$pilotos=$_POST['pilotos'];
$avion=$_POST['avion'];

$sql="INSERT INTO vuelo(`destino`, `partida`, `fecha`, `num_pasajeros`, `num_pilotos`, `idAvion`) VALUES('$destino','$partida','$fecha','$pasajeros','$pilotos','$avion')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>