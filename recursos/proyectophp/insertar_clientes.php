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
    <title>Insertar Clientes</title>
    <link rel="icon" href="icono.png" type="image/x-icon">
</head>
<?php require_once("conexion.php"); ?>
<body>
    <h2>Insertar Clientes</h2>
    <form action="insertar_clientes.php" method="post">
      <p>ID Cliente: <input type="text" name="id_cliente"></p>
      <p>Nombre: <input type="text" name="nombre"></p>
      <p>Apellidos: <input type="text" name="apellidos"></p>
      <p>Email: <input type="text" name="email"></p>
      <p>DNI: <input type="text" name="dni"></p>
      <p>Telefono: <input type="text" name="telefono"></p>

    <p>
    <input type="hidden" name="errores" value="1">
    <input type="submit" name="submit" id="submit" value="Enviar">
</form>

<?php
    if(isset($_POST['errores'])) {
    
    if(isset($_POST['id_cliente'])) $id_cliente = mysqli_real_escape_string($DB,$_POST['id_cliente']);
    if(isset($_POST['nombre'])) $nombre = mysqli_real_escape_string($DB,$_POST['nombre']);
    if(isset($_POST['apellidos'])) $apellidos = mysqli_real_escape_string($DB,$_POST['apellidos']);
    if(isset($_POST['email'])) $email = mysqli_real_escape_string($DB,$_POST['email']);
    if(isset($_POST['dni'])) $dni = mysqli_real_escape_string($DB,$_POST['dni']);
    if(isset($_POST['telefono'])) $telefono = mysqli_real_escape_string($DB,$_POST['telefono']);
    
    $errores=0;
    if(!isset($id_cliente) || $id_cliente=="") {
        echo "<p><font color=red>ERROR. El id del cliente no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($nombre) || $nombre=="") {
        echo "<p><font color=red>ERROR. El nombre no puede estar en blanco </font> </p>";
        $errores++; }

    if(!isset($apellidos) || $apellidos=="") {
        echo "<p><font color=red>ERROR. El primer apellido no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($email) || $email=="") {
        echo "<p><font color=red>ERROR. El segundo apellido no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($dni) || $dni=="") {
        echo "<p><font color=red>ERROR. El dni no puede estar en blanco </font> </p>";
        $errores++; }
    if(!isset($telefono) || $telefono=="") {
        echo "<p><font color=red>ERROR. El telefono no puede estar en blanco </font> </p>";
        $errores++; }

    if($errores==0){

        $sql = "INSERT INTO clientes (id_cliente,nombre,apellidos,email,dni,telefono) VALUES ('$id_cliente','$nombre','$apellidos','$email','$dni','$telefono')";

        if ($DB->query($sql) === TRUE) 
        {
            echo "El cliente $nombre ha sido insertado correctamente";
        }
    }

}

$DB->close();
?>
<p><a href="menu.php">Volver a Menú</a></p>
</body>
</html>