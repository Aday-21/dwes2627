
<?php
/*
    Controlador: create.php
    Permite crear un nuevo artículo a partir de los datos enviados desde el formulario.
*/

// Cargar librerías
require_once 'libs/functions.php';

// Extraer los datos del formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categorias = $_POST['categorias'] ?? [];
$categorias = array_map('htmlspecialchars', (array) $categorias);
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

// Obtener el array de artículos
$articulos = get_articulos();

// Obtener ID del nuevo artículo
$new_articulo_id = obtener_id_articulo($articulos);

// Crear el nuevo artículo
$new_articulo = [
    'id' => $new_articulo_id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => $categorias,
    'unidades' => $unidades,
    'precio' => $precio
];

// Agregar el nuevo artículo
$articulos[] = $new_articulo;

// Mostrar la vista
include 'views/index.view.php';
