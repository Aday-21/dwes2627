<?php

function get_peliculas(){

    // Array de películas
    $peliculas = [
        [
            'id' => 1,
            'titulo' => 'Titanic',
            'idioma' => 'Italiano',
            'director' => 'Aday Trandafir',
            'generos' => 'Pasion',
            'año' => 1999,
            'duracion' => '3h y 30min',
            'recaudacion' => 156.5
        ],
        [
            'id' => 2,
            'titulo' => 'Jurasic Park',
            'idioma' => 'Aleman',
            'director' => 'Juan Carlos',
            'generos' => 'Aventura',
            'año' => 2007,
            'duracion' => '2h y 30min',
            'recaudacion' => 3.1
        ],
        [
            'id' => 3,
            'titulo' => 'Avatar',
            'idioma' => 'Ingles',
            'director' => 'Carlos',
            'generos' => 'Romance',
            'año' => 2012,
            'duracion' => '3h y 30min',
            'recaudacion' => 1.5
        ],
        [
            'id' => 4,
            'titulo' => 'El Rey León',
            'idioma' => 'Español',
            'director' => 'Juan Carlos',
            'generos' => 'Infantil',
            'año' => 2005,
            'duracion' => '1h y 30min',
            'recaudacion' => 10.2
        ],
        [  
            'id' => 5,
            'titulo' => 'Harry Potter',
            'idioma' => 'Español',
            'director' => 'Juan Francisco',
            'generos' => 'Magia',
            'año' => '2009',
            'duracion' => '1h y 30min',
            'recaudacion' => 2.5
        ],
        [
            'id' => 6,
            'titulo' => 'Doraimon',
            'idioma' => 'Japones',
            'director' => 'Juan Antonio',
            'generos' => 'Infantil',
            'año' => '2010',
            'duracion' => '1h y 30min',
            'recaudacion' => 2.0
        ]
];

    return $peliculas;

}

function obtener_id_nueva_pelicula($peliculas = []) {
    // Obtener el último artículo del array
    $ultimo_articulo = end($peliculas);

    // Obtener el id del último arículo
    $ultimo_id = $ultimo_articulo['id'];

    // Devolver el id del nuevo artículo (último id + 1)
    return $ultimo_id + 1;
}