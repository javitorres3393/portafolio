<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] !== sha1("rick")) {
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
    <title>Mostrar Reservas</title>
    <link rel="icon" href="icono.png" type="image/x-icon">
</head>
<body align="center">
    <h2>Mostrando las reservas</h2>
    <p><form action="mostrar_reservas.php" method="post">
        <label for="filtro">Filtrar por:</label>
        <select name="filtro">
            <option value="id_reserva">ID Reserva</option>
            <option value="id_cliente">ID Cliente</option>
            <option value="num_habitacion">Número Habitación</option>
            <option value="fecha_inicio">Fecha inicio</option>
            <option value="fecha_fin">Fecha fin</option>
            <option value="estado">Estado de la reserva</option>
        </select>
        <input type="text" name="valor">
        <input type="submit" name="filtrar" value="Filtrar">
    </form></p>

    <table border="1" bordercolor="black" width="75%" align="center">
        <tr bgcolor="#F13E3E">
            <th>ID Reserva</th>
            <th>ID Cliente</th>
            <th>Número Habitación</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Estado de la reserva</th>
            <th>Borrar</th>
        </tr>
        <?php
        require_once("conexion.php");

        $sql = "SELECT * FROM Reservas";

        if(isset($_POST['filtrar'])) {
            $filtro = $_POST['filtro'];
            $valor = $_POST['valor'];
            $sql .= " WHERE $filtro = '$valor'";
        }

        $result = $DB->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_reserva"] . "</td>";
                echo "<td>" . $row["id_cliente"] . "</td>";
                echo "<td>" . $row["num_habitacion"] . "</td>";
                echo "<td>" . $row["fecha_inicio"] . "</td>";
                echo "<td>" . $row["fecha_fin"] . "</td>";
                echo "<td>" . $row["estado"] . "</td>";
                echo "<td>";
                echo "<form action='borrar_reservas.php' method='post'>";
                echo "<input type='hidden' name='oculto' value='" . $row["id_reserva"] . "'>";
                echo "<input type='submit' value='Borrar'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        }
        $DB->close();
        ?>
    </table>
    <p><a href="menu.php">Volver a Menú</a></p>
</body>
</html>
