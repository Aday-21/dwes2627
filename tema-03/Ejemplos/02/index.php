<?php

/*

    Ejemplo 2; if, else, elseif y operador ternario
    Descripción; Determinar el item de calificación de un examen

    La calificación sera;
    - suspenso
    - bien
    - notable
    - sobresaliente

*/

$nota = 7;

if($nota < 5){
    echo "Suspenso";
}else if($nota >= 5 && $nota < 7){
    echo "bien";
}else if($nota >= 7 && $nota < 9){
    echo "notable";
}else{
    echo "sobresaliente";
}