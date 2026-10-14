<?php

/*

    Ejemplo 3.6
    If, Else, ElseIf
    Descripción; Dada la nota, se ha de devolver el item calificado;
        - Insuficiente,
        - Suficiente,
        - Bien,
        - Notable,
        - Sobresaliente,

*/


$nota = 7;

// Estructura switch - evalua conjunto de acciones
switch (true){
    case($nota < 5):
        echo "Insuficiente";
        break;
    case($nota < 6):
        echo "Suficiente";
        break;
    case($nota < 7):
        echo "Bien";
        break;
    case($nota < 9):
        echo "Notable";
        break;
    case($nota <= 10):
        echo "Sobresaliente";
        break;
    default:
        echo "Valor no permitido";
}