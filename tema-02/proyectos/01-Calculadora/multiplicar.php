<?php

/*

    Controlador multiplicar.php

    Proyecto; proyecto 2.1 - calculadora básica
    Descripción: calculadora básica con operaciones de 
    - suma, 
    - resta, 
    - multiplicación, 
    - división,
    - potencia,
    - ...
    Alumno; Aday Trandafir Garcia
    Fecha; 05/10/2026

*/

// Modelo

// Negociado
// Recoger los valores del formulario
$valor1 = (float) $_POST['valor1'];
$valor2 = (float) $_POST['valor2'];

// Realizar la operación de multiplicación
$resultado = $valor1 * $valor2;

$operacion = "Multiplicación";


// Vista
include 'views/resultado.view.php';

