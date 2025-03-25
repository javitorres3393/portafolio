<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseñas</title>
</head>
<form action=sha1.php method=post>
<input type="text" name="pass">
<input type="submit">
</form>
<?php
if (isset($_POST['pass'])){
    echo sha1($_POST['pass']);
}
?>
<body>
    
</body>
</html>