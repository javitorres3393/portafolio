<?php require_once("conexion.php"); ?>
<?php
if(isset($_POST['oculto'])){
    $id_empleado = mysqli_real_escape_string($DB,$_POST['oculto']);
$sql = "DELETE FROM Empleados WHERE id_empleado = $id_empleado";
if ($DB->query($sql) === TRUE) {
        header("location: mostrar_empleados.php");
       exit();
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Empleados</title>
</head>
<body>
    
</body>
</html>
