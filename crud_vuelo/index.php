<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM vuelo";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGINA CLIENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="destino" placeholder="Destino">
                                    <input type="text" class="form-control mb-3" name="partida" placeholder="Lugar de partida">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                    <input type="number" class="form-control mb-3" name="pasajeros" placeholder="Número de pasajeros">
                                    <input type="number" class="form-control mb-3" name="pilotos" placeholder="Número de pilotos">                                    
                                    <input type="bumber" class="form-control mb-3" name="avion" placeholder="ID del avión">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID del vuelo</th>
                                        <th>Destino</th>
                                        <th>Partida</th>
                                        <th>Fecha</th>
                                        <th>Número pasajeros</th>
                                        <th>Número pilotos</th>
                                        <th>ID del avión</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idVuelo']?></th>
                                                <th><?php  echo $row['destino']?></th>
                                                <th><?php  echo $row['partida']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['num_pasajeros']?></th>
                                                <th><?php  echo $row['num_pilotos']?></th>
                                                <th><?php  echo $row['idAvion']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['idVuelo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idVuelo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>