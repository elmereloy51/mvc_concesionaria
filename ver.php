<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Ver</title>
</head>
<body>
    
    <div>
        

        
        <div class="espacio-tabla">
            <table class="table table-dark table-striped">
                <thead>
                </thead>
                <tbody>


                <?php
                $id = $_GET["id"];
                $sql = "SELECT * FROM automovil where ID='$id'";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {

                ?>
                    <h3><p>Marca: <?php echo $mostrar['Marca'] ?></p></h3>
                    <h3><p>Modelo: <?php echo $mostrar['Modelo'] ?></p></h3>
                    <h3><p>Motor: <?php echo $mostrar['Motor'] ?></p></h3>
                    <h3><p>Chasis: <?php echo $mostrar['Chasis'] ?></p></h3>
                    <h3><p>Color: <?php echo $mostrar['Color'] ?></p></h3>
                    <h3><p>Peso: <?php echo $mostrar['Peso'] ?></p></h3>
                    <h3><p>Precio: <?php echo $mostrar['Precio'] ?></p></h3>

                <?php
                }
                ?>
        <a class="btn btn-primary" href="mostrar.php ?>">Regresar</a>
                </tbody>
            </table>
        </div>

    </body>

   
    </body>
</html>