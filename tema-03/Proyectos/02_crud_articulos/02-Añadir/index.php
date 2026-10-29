<?php
/*

    Controlador; index.php
    Muestra la tabla de artículos

*/

// Cargamos la libreria de funciones
require_once 'libs/functions.php';

// Obtenemos los artículos
$articulos = get_articulos();

// Cargamos la vista principal
include 'views/index.view.php';