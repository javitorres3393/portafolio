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
    <title>Mostrar Habitaciones</title>
    <link rel="icon" href="icono.png" type="image/x-icon">
</head>
<body align="center">
    <h2>Mostrando las habitaciones</h2>
    <p><form action="" method="post">
        <label for="filtro">Filtrar por:</label>
        <select name="filtro">
            <option value="num_habitacion">Numero habitacion</option>
            <option value="tipo_habitacion">Tipo Habitacion</option>
            <option value="precio">Precio</option>
            <option value="disponible">Disponible</option>
        </select>
        <input type="text" name="valor">
        <input type="submit" name="filtrar" value="Filtrar">
    </form></p>

    <table border="1" width="75%" align="center">
            <tr bgcolor="#FF5733">
                <th>Numero Habitacion</th>
                <th>Tipo Habitacion</th>
                <th>Precio</th>
                <th>Disponible</th>
                <th>Borrar</th>
            </tr>
            <?php
            require_once("conexion.php");

            $sql = "SELECT * FROM Habitaciones";

            if(isset($_POST['filtrar'])) {
                $filtro = $_POST['filtro'];
                $valor = $_POST['valor'];
                $sql .= " WHERE $filtro = '$valor'";
            }
            
            $result = $DB->query($sql);

            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["num_habitacion"] . "</td>";
                    echo "<td>" . $row["tipo_habitacion"] . "</td>";
                    echo "<td>" . $row["precio"] . "</td>";
                    echo "<td>" . $row["disponible"] . "</td>";
                    echo "<td>";
                echo "<form action='borrar_habitaciones.php' method='post'>";
                echo "<input type='hidden' name='oculto' value='" . $row["num_habitacion"] . "'>";
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
