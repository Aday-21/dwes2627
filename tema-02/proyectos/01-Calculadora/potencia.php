<?php

/*

    Controlador potencia.php

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

// Realizar la operación de potencia
$resultado = pow($valor1, $valor2);

$operacion = "Potencia";


// Vista
include 'views/resultado.view.php';

