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
    
    <?php
        // Comillas dobles
        echo "<b>Nombre:</b> $nombre<br>";

        // Comillas simples
        echo '<b>Nombre:</b> $nombre<br>';

        // Solución uso de comillas simples y concaternación
        echo '<b>Apellido:</b> ' . $apellido . '<br>';
    ?>

</body>
</html>