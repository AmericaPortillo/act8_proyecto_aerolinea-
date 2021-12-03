<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];

$sql="UPDATE cliente SET nombres='$nombres',apellidos='$apellidos',direccion='$direccion',correo='$correo',telefono='$telefono',DNI='$dni' WHERE idCliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>