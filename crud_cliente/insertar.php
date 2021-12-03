<?php
include("conexion.php");
$con=conectar();

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO cliente(`nombres`, `apellidos`, `direccion`, `correo`, `DNI`, `telefono`) VALUES('$nombres','$apellidos','$direccion','$correo','$dni','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>