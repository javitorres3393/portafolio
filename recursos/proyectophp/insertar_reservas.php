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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Reserva</title>
    <link rel="icon" href="icono.png" type="image/x-icon">
</head>
<?php require_once("conexion.php"); ?>
<body>
    <h2>Insertar Reservas</h2>
    <form action="insertar_reservas.php" method="post">
        <p>ID Reserva: <input type="text" name="id_reserva"></p>
        <p>ID Cliente: <input type="text" name="id_cliente"></p>
        <p>Numero Habitacion: <input type="text" name="num_habitacion"></p>
        <p>Fecha inicio: <input type="text" name="fecha_inicio"></p>
        <p>Fecha fin: <input type="text" name="fecha_fin"></p>
        <p>Estado de la reserva: <input type="text" name="estado"></p>
        <p>
            <input type="hidden" name="errores" value="1">
            <input type="submit" name="submit" id="submit" value="Enviar">
        </p>
    </form>

    <?php
    if(isset($_POST['errores'])) {
        $id_reserva = mysqli_real_escape_string($DB,$_POST['id_reserva']);
        $id_cliente = mysqli_real_escape_string($DB,$_POST['id_cliente']);
        $num_habitacion = mysqli_real_escape_string($DB,$_POST['num_habitacion']);
        $fecha_inicio = mysqli_real_escape_string($DB,$_POST['fecha_inicio']);
        $fecha_fin = mysqli_real_escape_string($DB,$_POST['fecha_fin']);
        $estado = mysqli_real_escape_string($DB,$_POST['estado']);
        
        $errores=0;
        if(empty($id_reserva)) {
            echo "<p><font color=red>ERROR. El ID de reserva no puede estar en blanco.</font></p>";
            $errores++;
        }
        if(empty($id_cliente)) {
            echo "<p><font color=red>ERROR. El ID de cliente no puede estar en blanco.</font></p>";
            $errores++;
        }


        if(empty($num_habitacion)) {
            echo "<p><font color=red>ERROR. El número de habitación no puede estar en blanco.</font></p>";
            $errores++;
        }

        if(empty($fecha_inicio)) {
            echo "<p><font color=red>ERROR. La fecha de inicio no puede estar en blanco.</font></p>";
            $errores++;
        }


        if(empty($fecha_fin)) {
            echo "<p><font color=red>ERROR. La fecha de fin no puede estar en blanco.</font></p>";
            $errores++;
        }

        if(empty($estado)) {
            echo "<p><font color=red>ERROR. El estado de la reserva no puede estar en blanco.</font></p>";
            $errores++;
        }


        if($errores==0){
            
            $sql_cliente = "SELECT id_cliente FROM Clientes WHERE id_cliente = '$id_cliente'";
            $result_cliente = $DB->query($sql_cliente);
            if ($result_cliente->num_rows == 0) {
                echo "<p><font color=red>ERROR. Pon una ID de Cliente.</font></p>";
                $errores++;
            }

            $sql_habitacion = "SELECT num_habitacion FROM Habitaciones WHERE num_habitacion = '$num_habitacion'";
            $result_habitacion = $DB->query($sql_habitacion);
            if ($result_habitacion->num_rows == 0) 
            {
                echo "<p><font color=red>ERROR. Pon un numero de habitaciion.</font></p>";
                $errores++;
            }

            if ($errores == 0) 
            {
                $sql_insert = "INSERT INTO Reservas (id_reserva, id_cliente, num_habitacion, fecha_inicio, fecha_fin, estado) VALUES ('$id_reserva', '$id_cliente', '$num_habitacion', '$fecha_inicio', '$fecha_fin', '$estado')";
                if ($DB->query($sql_insert) === TRUE) {
                    echo "<p>La reserva ha sido insertada correctamente.</p>";
                }
            }
        }
    }

    $DB->close();
    ?>
    <p><a href="menu.php">Volver a Menú</a></p>
</body>
</html>