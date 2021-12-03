<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM vuelo WHERE idVuelo='$id'";
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
            
            <input type="hidden" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['idVuelo']  ?>">
            <input type="text" class="form-control mb-3" name="destino" placeholder="Destino" value="<?php echo $row['destino']  ?>">
            <input type="text" class="form-control mb-3" name="partida" placeholder="Lugar de partida" value="<?php echo $row['partida']  ?>">
            <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']  ?>">
            <input type="number" class="form-control mb-3" name="pasajeros" placeholder="Número de pasajeros" value="<?php echo $row['num_pasajeros']  ?>">
            <input type="number" class="form-control mb-3" name="pilotos" placeholder="Número de pilotos" value="<?php echo $row['num_pilotos']  ?>">
            <input type="bumber" class="form-control mb-3" name="avion" placeholder="ID del avión" value="<?php echo $row['idAvion']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>