<?php

/*

    new.php

    Permite crear nuevo libro

    @package CRUD Libros
    @author Aday Trandafir Garcia
    @version 1.0

    Tabla libros;
        - id(INT, PRIMARY KEY, AUTO_INCREMENT)
        - titulo(VARCHAR(255))
        - autor(VARCHAR(255))
        - editorial(VARCHAR(255))
        - generos
        - precio

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
$libros = get_libros();

// Views
include 'views/new.view.php';