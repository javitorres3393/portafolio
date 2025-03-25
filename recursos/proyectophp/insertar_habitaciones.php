<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8859">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Habitaciones</title>
    <link rel="icon" href="icono.png" type="image/x-icon">
</head>
<?php require_once("conexion.php"); ?>
<body>
    <h2>Insertar Habitaciones</h2>
    <form action="insertar_habitaciones.php" method="post">
      <p>Numero de habitacion: <input type="text" name="num_habitacion"></p>
      <p>Tipo de Habitacion: <input type="text" name="tipo_habitacion"></p>
      <p>Precio: <input type="text" name="precio"></p>
      <p>Disponible: <input type="text" name="disponible"></p>

    <p>
    <input type="hidden" name="errores" value="1">
    <input type="submit" name="submit" id="submit" value="Enviar">
</form>

<?php
if(isset($_POST['errores'])) {
    
    if(isset($_POST['num_habitacion'])) $num_habitacion = mysqli_real_escape_string($DB,$_POST['num_habitacion']);
    if(isset($_POST['tipo_habitacion'])) $tipo_habitacion = mysqli_real_escape_string($DB,$_POST['tipo_habitacion']);
    if(isset($_POST['precio'])) $precio = mysqli_real_escape_string($DB,$_POST['precio']);
    if(isset($_POST['disponible'])) $disponible = mysqli_real_escape_string($DB,$_POST['disponible']);
    
    $errores=0;
    if(!isset($num_habitacion) || $num_habitacion=="") {
        echo "<p><font color=red>ERROR. El numero de habitacion no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($tipo_habitacion) || $tipo_habitacion=="") {
        echo "<p><font color=red>ERROR. El tipo de habitacion no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($precio) || $precio=="") {
        echo "<p><font color=red>ERROR. El precio no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($disponible) || $disponible=="") {
        echo "<p><font color=red>ERROR. La disponibilidad no puede estar en blanco </font> </p>";
        $errores++; }

    if($errores==0){

        $sql = "INSERT INTO Habitaciones (num_habitacion,tipo_habitacion,precio,disponible) VALUES ('$num_habitacion','$tipo_habitacion','$precio','$disponible')";

        if ($DB->query($sql) === TRUE) 
        {
            echo "La habitacion ha sido insertado correctamente";
    }
}
}

$DB->close();
?>
<p><a href="menu.php">Volver a Menú</a></p>
</body>
</html>