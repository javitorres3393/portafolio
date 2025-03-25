<?php require_once("conexion.php"); ?>
<?php
if(isset($_POST['oculto'])){
    $num_habitacion = mysqli_real_escape_string($DB,$_POST['oculto']);
$sql = "DELETE FROM Habitaciones WHERE num_habitacion = $num_habitacion";
if ($DB->query($sql) === TRUE) {
        header("location: mostrar_habitaciones.php");
       exit();
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Habitaciones</title>
</head>
<body>
    
</body>
</html>
