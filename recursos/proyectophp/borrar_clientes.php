<?php require_once("conexion.php"); ?>
<?php
if(isset($_POST['oculto'])){
    $id_cliente = mysqli_real_escape_string($DB,$_POST['oculto']);
$sql = "DELETE FROM Clientes WHERE id_cliente = $id_cliente";
if ($DB->query($sql) === TRUE) {
        header("location: mostrar_clientes.php");
       exit();
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Clientes</title>
</head>
<body>
    
</body>
</html>
