<?php
/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de artículos.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los artículos creados.
*/

// Funcion get_articulos(): Devuelve un array con todos los artículos.

function get_articulos(){

    // Array de artículos
    $articulos = [
        [
            'id' => 1,
            'descripcion' => 'Teclado',
            'modelo' => 'K120',
            'categorias' => ['informática', 'periféricos'],
            'unidades' => 10,
            'precio' => 15.50
        ],
        [
            'id' => 2,
            'descripcion' => 'Ratón',
            'modelo' => 'M185',
            'categorias' => ['informática', 'periféricos'],
            'unidades' => 20,
            'precio' => 12.99
        ],
        [
            'id' => 3,
            'descripcion' => 'Monitor',
            'modelo' => 'P2419H',
            'categorias' => ['informática', 'pantallas'],
            'unidades' => 5,
            'precio' => 149.99
        ],
        [
            'id' => 4,
            'descripcion' => 'PC',
            'modelo' => 'T733A',
            'categorias' => ['informática', 'periféricos'],
            'unidades' => 15,
            'precio' => 1399.99
        ],
        [
            'id' => 5,
            'descripcion' => 'Auriculares',
            'modelo' => 'D7261M',
            'categorias' => ['informática', 'periféricos'],
            'unidades' => 4,
            'precio' => 149.99
        ]
    ];

    return $articulos;

}
