<?php

/*

    Controlador calcular.php

    Proyecto; proyecto 2.2 - calculo de lanzamiento deproyectiles
    Descripción: dada la velocidad incial y el ángulo de lanzamiento, calcular;
    - la altura máxima,
    - el tiempo de vuelo,
    - la distancia horizontal del proyectil,
    - velocidad inicial horizontal,
    - velocidad inicial vertical,
    
    Alumno; Aday Trandafir Garcia
    Fecha; 06/10/2026

*/

// Modelo

// Definir las constantes
define('G', 9.81); 
// Recoger los valores del formulario
$velocidad_inicial = (float) $_POST['velocidad_inicial']?? 0;
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento']?? 0;

// Convertir el ángulo de grados a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// Realizar la operación de calcular
$altura_maxima = ($velocidad_inicial ** 2 * sin($angulo_radianes) ** 2) / (2 * G);
$tiempo_vuelo = (2 * $velocidad_inicial * sin($angulo_radianes)) / G;
$distancia_horizontal = ($velocidad_inicial ** 2 * sin(2 * $angulo_radianes)) / G;
$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radianes);
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radianes);


// Vista
include 'views/resultado.view.php';

