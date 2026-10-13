<?php

/*

    Examen tema 2.
    Aday Trandafir Garcia
    Calculos a realizar;
    - Velocidad Final,
    - Espacio Recorrido,
    - Fuerza Neta,
    - Energia Cinetica Total

*/
// Definir Variables
$velocidadInicial = (float) $_POST['velocidadinicial'];
$aceleracion = (float) $_POST['aceleracion'];
$tiempo = (float) $_POST['tiempo'];
$masa = (float) $_POST['masa'];



//Calcular la velocidad final
$velocidadFinal = $velocidadInicial + $aceleracion * $tiempo;

//Calcular el espacio recorrido
$espacioRecorrido = $velocidadInicial * $tiempo + 0.5 * $aceleracion * pow($tiempo, 2);

//Calcular fuerza neta
$fuerzaNeta = $masa * $aceleracion;

//Calcular energia cinetica final
$energiaCineticaFinal = 0.5 * $masa * pow($velocidadInicial, 2);

// enlazar con view.resultado.php
include 'views/view.resultado.php';


?>