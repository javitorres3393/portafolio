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
    <title>Mostrar Empleados</title>
    <link rel="icon" href="icono.png" type="image/x-icon">
</head>
<body align="center">
    <h2>Mostrando los empleados</h2>
    <p><form action="" method="post">
        <label for="filtro">Filtrar por:</label>
        <select name="filtro">
            <option value="id_empleado">ID Empleado</option>
            <option value="nombre">Nombre</option>
            <option value="cargo">Cargo</option>
            <option value="salario">Salario</option>
        </select>
        <input type="text" name="valor">
        <input type="submit" name="filtrar" value="Filtrar">
    </form></p>
    <table border="1" width="75%" align="center">
            <tr bgcolor="grey">
                <th>ID Empleado</th>
                <th>Nombre Completo:</th>
                <th>Cargo:</th>
                <th>Salario:</th>
                <th>Borrar</th>
            </tr>
            <?php
            require_once("conexion.php");

            $sql = "SELECT * FROM Empleados";

            if(isset($_POST['filtrar'])) {
                $filtro = $_POST['filtro'];
                $valor = $_POST['valor'];
                $sql .= " WHERE $filtro = '$valor'";
            }
            
            $result = $DB->query($sql);

            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id_empleado"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["cargo"] . "</td>";
                    echo "<td>" . $row["salario"] . "</td>";
                    echo "<td>";
                    echo "<form action='borrar_empleados.php' method='post'>";
                    echo "<input type='hidden' name='oculto' value='" . $row["id_empleado"] . "'>";
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