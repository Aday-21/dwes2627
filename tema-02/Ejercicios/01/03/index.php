<?php

/*

    Actividad 2.1.1
    Descripción: uso de variables
        - un título
        - un párrafo
        - un enlace
    Alumno; Aday Trandafir Garcia
    Fecha; 30/09/2026

*/

$titulo = "Mi primera aplicación en PHP";
$parrafo = "Esta es mi primera aplicación en PHP, estoy aprendiendo a usar variables y a mostrar contenido dinámico en la web.
            Esta es mi primera aplicación en PHP, estoy aprendiendo a usar variables y a mostrar contenido dinámico en la web.
            Esta es mi primera aplicación en PHP, estoy aprendiendo a usar variables y a mostrar contenido dinámico en la web.
            Esta es mi primera aplicación en PHP, estoy aprendiendo a usar variables y a mostrar contenido dinámico en la web.";
$enlace = "https://elpais.com/";

// 02
$imagen = "elpais.png";

// 03
$nombre = "Hola";
$mensaje = "mundo";

$resultado = $nombre . " " . $mensaje;

// Vista de la aplicacion - html
include 'view.index.php';

?>