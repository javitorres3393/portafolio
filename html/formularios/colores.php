<?php
  $colorCorrecto = rand(0, 5); // Genera un número aleatorio entre 0 y 5
    $colores = ["azul", "verde", "rojo", "naranja", "rosa", "marron"];
    $colorCorrectoString = $colores[$colorCorrecto];

    if (isset($_GET['color']) && $_GET['color'] == $colorCorrectoString) {
    echo "<h1>¡Correcto!</h1>";
    } else {
    echo "<h1>¡Incorrecto!</h1>";
    }
?>