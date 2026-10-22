<?php

$colores = ["rojo", "verde", "azul", "amarillo", "naranja"];

// Recorrer el array con un bucle for
for ($i = 0; $i < count($colores); $i++) {
    echo "Color: " . $colores[$i] . "<br>";
}

// Recorrer el array con un bucle foreach
foreach ($colores as $color) {
    echo "Color: " . $color . "<br>";
}

// Agregar elementos al array
$colores[] = "morado"; // Agregar al final del array


// eliminar elementos del array
unset($colores[2]); // Eliminar el elemento en la posición 2 (azul)

// Recorrer el array mostrando indices y valores
foreach ($colores as $indice => $color) {
    echo "Indice: " . $indice . ", Color: " . $color . "<br>";
}

// Modificar elementos del array
$colores[1] = "morado"; // Modificar el elemento en la posición 1 (verde) a morado