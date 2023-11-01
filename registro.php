<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include ('db.php');

$marca=$_POST['txtMarca'];
$modelo=$_POST['txtModelo'];
$motor=$_POST['txtMotor'];
$chasis=$_POST['txtChasis'];
$color=$_POST['txtColor'];
$peso=$_POST['txtPeso'];
$precio=$_POST['txtPrecio'];

$consulta="INSERT INTO `automovil` (`Marca`, `Modelo`, `Motor`, `Chasis`, `Color`, `Peso`, `Precio`) 
VALUES ('$marca', '$modelo', '$motor', '$chasis', '$color', '$peso', '$precio');";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registro exitoso";


mysqli_close($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>registro</title>
</head>
<body>

    <div>
        <header class="enca"> 
            <div class="wrap"> 
                <div class="logos"> 
                    
                </div>
                <nav> 
                    <a href="mostrar.php">Inspeccionar</a>
                </nav>
            </div>
        </header>
        <hr>
                <center><h1><?php echo "Registro Exitoso";  ?></h1><center>
</html>