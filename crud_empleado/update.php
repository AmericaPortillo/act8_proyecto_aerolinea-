<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$curp=$_POST['curp'];

$sql="UPDATE empleado SET nombres='$nombres',apellidos='$apellidos',telefono='$telefono',direccion='$direccion',correo='$correo',curp='$curp' WHERE idEmpleado='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>