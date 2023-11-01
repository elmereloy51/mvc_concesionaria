<?php
include('db.php'); // Incluye el archivo 'db.php', que probablemente contiene la conexión a la base de datos.
$ID = $_POST['txtID']; // Obtiene el valor del campo de entrada 'txtID' del formulario POST.

mysqli_begin_transaction($conexion); // Inicia una transacción en la base de datos.

try {
    mysqli_query($conexion, "DELETE FROM automovil WHERE ID='$ID'") or die("error al eliminar"); // Ejecuta una consulta SQL para eliminar un registro de la tabla 'automovil' donde el ID coincide con el valor proporcionado. Si hay un error, muestra un mensaje de error y detiene la ejecución.

    mysqli_commit($conexion); // Confirma la transacción en la base de datos. Esto se hace si la eliminación se realiza con éxito.

} catch (Exception $e) {
    mysqli_rollback($conexion); // En caso de error, revierte la transacción en la base de datos para deshacer cualquier cambio que se haya realizado antes de que ocurriera el error.
    die("Error en la transacción: " . $e->getMessage()); // Muestra un mensaje de error indicando que hubo un problema con la transacción.
}

mysqli_close($conexion); // Cierra la conexión a la base de datos.

header("location:mostrar.php"); // Redirige al usuario a la página "mostrar.php" después de que se haya eliminado el registro.

?>
