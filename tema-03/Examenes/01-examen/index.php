<?php
/*

    Controlador; index.php
    Autor: Aday TG

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
$peliculas = get_peliculas();

// Views
include 'views/index.view.php';