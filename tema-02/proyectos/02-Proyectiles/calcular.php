<?php

/*

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
define('G', 9.81); // Aceleración debida a la gravedad

// Recoger los valores del formulario
$velocidad_inicial = (float) $_POST['velocidad_inicial']?? 0;
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento']?? 0;

// La velocidad inicial horizontal
$velocidad_inicial_horizontal = $velocidad_inicial * cos(deg2rad($angulo_lanzamiento));

// La velocidad inicial vertical
$velocidad_inicial_vertical = $velocidad_inicial * sin(deg2rad($angulo_lanzamiento));

// Angulo en radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// Alcance maximo en metros
$alcance_maximo = ($velocidad_inicial ** 2 * sin(2 * $angulo_radianes)) / G;

// La altura máxima
$altura_maxima = ($velocidad_inicial ** 2 * sin($angulo_radianes) ** 2) / (2 * G);

// El tiempo de vuelo
$tiempo_vuelo = (2 * $velocidad_inicial * sin(deg2rad($angulo_lanzamiento))) / G;


// Vista
include 'views/resultado.view.php';

