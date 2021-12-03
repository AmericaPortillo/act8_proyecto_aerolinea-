<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM aviones WHERE num_serie='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo" value="<?php echo $row['modelo']  ?>">
            <input type="text" class="form-control mb-3" name="serie" placeholder="Nmero de serie" value="<?php echo $row['num_serie']  ?>">
            <input type="text" class="form-control mb-3" name="capacidad" placeholder="Capacidad de personas" value="<?php echo $row['capacidad_per']  ?>">
            <input type="text" class="form-control mb-3" name="equipaje" placeholder="Equipaje máximo" value="<?php echo $row['equipaje_max']  ?>">
            <input type="number" class="form-control mb-3" name="tamano" placeholder="Tamaño en metros" value="<?php echo $row['tamaño']  ?>">
            <input type="text" class="form-control mb-3" name="color" placeholder="Color" value="<?php echo $row['color']  ?>">
            <input type="text" class="form-control mb-3" name="piloto" placeholder="ID del piloto" value="<?php echo $row['idPiloto']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>