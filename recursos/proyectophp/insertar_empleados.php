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
    <title>Insertar Empleados</title>
    <link rel="icon" href="icono.png" type="image/x-icon">
</head>
<?php require_once("conexion.php"); ?>
<body>
    <h2>Insertar Empleados</h2>
    <form action="insertar_empleados.php" method="post">
      <p>ID Empleado: <input type="text" name="id_empleado"></p>
      <p>Nombre: <input type="text" name="nombre"></p>
      <p>Cargo: <input type="text" name="cargo"></p>
      <p>Salario: <input type="text" name="salario"></p>

    <p>
    <input type="hidden" name="errores" value="1">
    <input type="submit" name="submit" id="submit" value="Enviar">
</form>

<?php
if(isset($_POST['errores'])) {
    
    if(isset($_POST['id_empleado'])) $id_empleado = mysqli_real_escape_string($DB,$_POST['id_empleado']);
    if(isset($_POST['nombre'])) $nombre = mysqli_real_escape_string($DB,$_POST['nombre']);
    if(isset($_POST['cargo'])) $cargo = mysqli_real_escape_string($DB,$_POST['cargo']);
    if(isset($_POST['salario'])) $salario = mysqli_real_escape_string($DB,$_POST['salario']);
    
    $errores=0;
    if(!isset($id_empleado) || $id_empleado=="") {
        echo "<p><font color=red>ERROR. El id del empleado no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($nombre) || $nombre=="") {
        echo "<p><font color=red>ERROR. El nombre no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($cargo) || $cargo=="") {
        echo "<p><font color=red>ERROR. El cargo no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($salario) || $salario=="") {
        echo "<p><font color=red>ERROR. El salario no puede estar en blanco </font> </p>";
        $errores++; }

    if($errores==0)
    {

        $sql = "INSERT INTO empleados (id_empleado, nombre, cargo, salario) VALUES ('$id_empleado','$nombre','$cargo','$salario')";

        if ($DB->query($sql) === TRUE) 
        {
            echo "El empleado $nombre ha sido insertado correctamente";
        }
    }

}

$DB->close();
?>
<p><a href="menu.php">Volver a Menú</a></p>
</body>
</html>