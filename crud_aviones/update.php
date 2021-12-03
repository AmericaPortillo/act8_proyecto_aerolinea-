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

$sql="UPDATE aviones SET modelo='$modelo',num_serie='$serie',capacidad_per='$capacidad',equipaje_max='$equipaje',tamaño='$tamano',color='$color',idPiloto='$piloto' WHERE num_serie='$serie'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>