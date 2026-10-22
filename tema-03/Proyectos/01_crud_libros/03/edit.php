<?php
/*
    create.php

    Permite crear un nuevo libro a partir de los datos enviados en el formulario.
    Muestra una lista de libros y permite agregar, editar y eliminar libros.

    @package CRUD Libros
    @author  Aday Trandafir Garcia
    @version 1.0

    Tablaa libros:
        - id (INT, PRIMARY KEY, AUTO_INCREMENT)
        - titulo (VARCHAR(255))
        - autor (VARCHAR(255))
        - editorial (VARCHAR(255))
        - generos
        - precio

*/

// Caragr librerías
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el indice del libro a editar desde la url
// edit.php?incice=0 - edito el primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el indice recibido

// CArgar el array de los libros
$libros = get_libros();

// Obtenemos el libro a editar
$libro = $libros[$indice];