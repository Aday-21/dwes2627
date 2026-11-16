<?php

require_once __DIR__ . '/class/Cliente.php';

// Crear un objeto de la clase Cliente
$c1 = new Cliente();

var_dump($c1);

$c1 -> setNombre('Ladrillos Margari');
$c1 -> setPoblacion('Ubrique');
$c1 -> setDni('1111111A');
