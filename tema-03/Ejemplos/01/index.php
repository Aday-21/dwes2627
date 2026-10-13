<?php
// Variables de partida
$a = 10;
$b = '10';
$c = 5;
$d = 'Hola Pepe';
$e = 'Hola Luis';
$f = 'hola';
// Comprobamos las expresiones
var_dump($a == $b);       
// true: son iguales
var_dump($a === $b);      
var_dump($a !== $b);      
var_dump($b > $c);        
var_dump($a != $c);       
var_dump($a <> $c);       
// false: iguales, pero de distinto tipo
// true: $a es de distinto tipo que $b
// true: $b es mayor que $c
// true: $a es distinto de $c
// true: igual que la anterior
var_dump($d == $e);       
// false: no son cadenas idénticas
var_dump($d[0] == $e[0]); // true: su primer carácter es idéntico
var_dump($d[0] == $f[0]);    
// false: distingue mayúsculas de minúsculas
$Resultado = ($a > $c) ? 'Es Mayor' : 'Es Menor';
echo $Resultado;    
?>