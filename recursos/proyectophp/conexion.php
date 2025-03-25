<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$hostname = "localhost";
$database = "jthotel";
$username = "root";
$password = "";

$DB = new mysqli($hostname, $username, $password, $database);

if ($DB->connect_errno) {
    echo "Lo sentimos, este sitio web está experimentando problemas.<br>";
    echo "Error: Fallo al conectarse a MySQL debido a : \n";
    echo "Errno" . $DB->connect_errno . "\n";
    echo "Error" . $DB->connect_error . "\n";
    exit;
}
?>  
</body>
</html>

