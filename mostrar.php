<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    
    <title>Mostrar</title>
    <style>
        .eloy{
            margin-top: 50px;
            caption-side: bottom;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
         

            
            
        }
        td,th{
            border: 2px solid black;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    
    <div>
      
        <!-- -----------------------mostrar-------------------------------- -->
        <div class="espacio-tabla">
            
        
            <!--titulo-->
            <br>
            <br>
            <div class="logos"> 
                LISTA DE AUTOMOVILES
                <br>
                <hr>
                <br>
            </div>
            <table class="eloy">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Motor</th>
                        <th scope="col">Chasis</th>
                        <th scope="col">Color</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                $sql = "SELECT * FROM automovil";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {

                ?>

                    <tr>
                        <td><?php echo $mostrar['ID'] ?></td>
                        <td><?php echo $mostrar['Marca'] ?></td>
                        <td><?php echo $mostrar['Modelo'] ?></td>
                        <td><?php echo $mostrar['Motor'] ?></td>
                        <td><?php echo $mostrar['Chasis'] ?></td>
                        <td><?php echo $mostrar['Color'] ?></td>
                        <td><?php echo $mostrar['Peso'] ?></td>
                        <td><?php echo $mostrar['Precio'] ?></td>

                        <td>
                            <!--ver-->
                            <a class="btn btn-primary" href="ver.php?id=<?php echo $mostrar['ID'] ?>">Ver</a>
                            <!--editar-->
                            <a class="btn btn-success" href="editar.php?id=<?php echo $mostrar['ID'] ?>">Editar</a>
                            <!--eliminar-->
                            <form action="eliminar.php" method="post" style="display: inline;">
                                <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="txtID" readonly>
                                <input class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar">
                            </form>
                        </td>

                    </tr>

                <?php
                }
                ?>
                </tbody>

                <nav> 

                 
                  <a href="index.html">Registrar</a>
                </nav>

            </table>

        
        </div>
                

</body>

</body>
</html>