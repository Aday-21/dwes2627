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
    <h1>Ficha de alumnos: </h1>
    <!-- Muestro los datos del alumno -->
    <p>Nombre: <?= $nombre; ?></p>
    <p>Apellido: <?= $apellido; ?></p>
    <p>Edad: <?= $edad; ?></p>
    <p>Población: <?= $poblacion; ?></p>
</body>
</html>