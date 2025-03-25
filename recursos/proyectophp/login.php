<?php session_start();
require_once("conexion.php");
if(isset($_POST['nick'])&&$_POST['nick']!=""&&isset($_POST['password'])&&$_POST['password']!=""){
    $nick = mysqli_real_escape_string($DB,$_POST['nick']);
    $password = mysqli_real_escape_string($DB,$_POST['password']);
    $pass_sha=sha1($password);
    $sql = "SELECT * from Empleados where nick = '$nick'";
    if (!$resultado = $DB->query($sql)) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
        exit();
    }
    if ($resultado->num_rows == 0) {
        echo "Lo sentimos. Usuario erroneo. <a href=login.html>Volver a intentarlo </a>";
        exit;
    }
    $alumno = $resultado->fetch_assoc();
    if($alumno['pass']!=$pass_sha){
        echo "Lo sentimos. Clave incorrecta. <a href=login.html>Volver a intentarlo </a>";
        exit;
    }
    $_SESSION['id'] = sha1($nick);
    $_SESSION['username'] = $alumno['nombre']." ".$alumno['apellido'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    $resultado->free();
    $DB->close();
    header('location:menu.php');
}
?>
