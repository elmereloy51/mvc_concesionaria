

<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>


   .row{
    color: blue;
    border: 5px solid;
    text-align: center;
    margin-left: 100px;
    margin-right: 100px;
   }
   

   </style>
    
    
    <title>Editar</title>

    
</head>
<div class="row">
<body>
   
   <?php
       $id = $_GET["id"];
       $sql="SELECT * FROM automovil where ID='$id'";
       $result = mysqli_query($conexion,$sql);
       while($mostrar = mysqli_fetch_array($result)){
   
   ?>
   
    <form action="procesar_editar.php" method="POST">
           <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="txtID">
        <p>Marca</p>
        <form action="procesar_editar.php" method="POST">
           <input type="text" value="<?php echo $mostrar['Marca'] ?>" name="txtMarca">
        <p>Modelo</p>
        <form action="procesar_editar.php" method="POST">
           <input type="text" value="<?php echo $mostrar['Modelo'] ?>" name="txtModelo">
        <p>Motor</p>
        <form action="procesar_editar.php" method="POST">
           <input type="text" value="<?php echo $mostrar['Motor'] ?>" name="txtMotor">
        <p>Chasis</p>    
        <form action="procesar_editar.php" method="POST">
           <input type="text" value="<?php echo $mostrar['Chasis'] ?>" name="txtChasis">
        <p>Color</p>
        <form action="procesar_editar.php" method="POST">
           <input type="text" value="<?php echo $mostrar['Color'] ?>" name="txtColor">
        <p>Peso</p>
        <form action="procesar_editar.php" method="POST">
           <input type="text" value="<?php echo $mostrar['Peso'] ?>" name="txtPeso">
        <p>Precio</p> 
           <form action="procesar_editar.php" method="POST">
           <input type="text" value="<?php echo $mostrar['Precio'] ?>" name="txtPrecio">
   <?php
       }
   ?>
   <br>
   <br>
   <input type="submit" value="ACTUALIZAR">
   </form>
       </tbody>
   </table>
   </div>
   
   
   </body>
   
   </body>
</div>
</html>