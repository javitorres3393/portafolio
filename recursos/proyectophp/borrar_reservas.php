<?php require_once("conexion.php"); ?>
<?php
if(isset($_POST['oculto'])){
    $id_reserva = mysqli_real_escape_string($DB,$_POST['oculto']);
$sql = "DELETE FROM Reservas WHERE id_reserva = $id_reserva";
if ($DB->query($sql) === TRUE) {
        header("location: mostrar_reservas.php");
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
