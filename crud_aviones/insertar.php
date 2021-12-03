<?php
include("conexion.php");
$con=conectar();

$modelo=$_POST['modelo'];
$serie=$_POST['serie'];
$capacidad=$_POST['capacidad'];
$equipaje=$_POST['equipaje'];
$tamano=$_POST['tamano'];
$color=$_POST['color'];
$piloto=$_POST['piloto'];

$sql="INSERT INTO aviones(`modelo`, `num_serie`, `capacidad_per`, `equipaje_max`, `tamaño`, `color`, `idPiloto`) VALUES('$modelo','$serie','$capacidad','$equipaje','$tamano','$color','$piloto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>