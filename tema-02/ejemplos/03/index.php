<?php
    $nombre = "Juan";
    $apellido = "Pérez Lopez";
    $edad = 30;
    $poblacion = "Madrid";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo PHP</title>
</head>
<body>
    <h1>Ficha de alumnos</h1>
    <?php
        echo "<b>Nombre:</b> ". $nombre . "<br>";
        echo "<b>Apellido:</b> $apellido<br>";
        echo "<b>Edad:</b> $edad<br>";
        echo "<b>Población:</b> $poblacion<br>";
    ?>
</body>
</html>