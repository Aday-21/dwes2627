<?php
/*

Controlador; create.php
Autor; Aday Trandafir Garcia

*/
require_once 'libs/functions.php';


$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'] ?? null;
$idioma = $_POST['idioma'] ?? null;
$director = $_POST['director'] ?? null;
$generos = $_POST['generos'] ?? null;
$año = $_POST['año'] ?? null;
$duracion = $_POST['duracion'] ?? null;
$recaudacion = $_POST['recaudacion'] ?? null;

$peliculas = get_peliculas();

$id_nuevo = obtener_id_nueva_pelicula();

include 'views/index.view.php';