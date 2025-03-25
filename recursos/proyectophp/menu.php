<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit;
}
if ($_SESSION['expire'] > time() + (5 * 60 )) {
    echo "Error sesión caducada";
    exit();
}
//
$_SESSION['expire'] = time() + (5* 60);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="icon" href="icono.png" type="image/x-icon">
</head>
<body>
    <h1>Menú Insertar</h1>
    <p>
    <a href="insertar_clientes.php"><img src="insertar_clientes.png" height="200" width="200"/></a>
    <a href="insertar_reservas.php"><img src="insertar_reservas.png" height="200" width="200"/></a>
    <a href="insertar_empleados.php"><img src="insertar_empleados.png" height="200" width="200"/></a>
    <a href="insertar_habitaciones.php"><img src="insertar_habitaciones.png" height="200" width="200"/></a>
    </p>
    <hr>

    <h1>Menú Mostrar (permisos)</h1>
    <p>
    <a href="mostrar_clientes.php"><img src="mostrar_clientes.png" height="200" width="200"/></a>
    <a href="mostrar_reservas.php"><img src="mostrar_reservas.png" height="200" width="200"/></a>
    <a href="mostrar_empleados.php"><img src="mostrar_empleados.png" height="200" width="200"/></a>
    <a href="mostrar_habitaciones.php"><img src="mostrar_habitaciones.png" height="200" width="200"/></a>
    </p>
    <hr>
    <p>
    <h2><a href="logout.php">Cerrar sesión</a></h2>
    </p>
</body>
</html>