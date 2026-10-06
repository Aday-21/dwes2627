<?php
// Devuelve falso;
// Asigna valor nulo a la variable
// Cuando la variable no esta definida
// Cuando la variable esta definida pero no tiene valor
// Cuando la variable es borrada con unset()

/* isset(): determina si una variable esta declarada y no es nula.
 Devuelve verdadero;
 - Cuandola variable a sido definida.

*/

$var = 23;

if (is_null($var)) {
    echo "La variable es nula <br>";
} else {
    echo "La variable no es nula <br>";
}

$var1 = 10;
if (isset($var1)) {
    echo "La variable esta definida <br>";
} else {
    echo "La variable no esta definida <br>";
}

$var2 = null;
if (is_null($var2)) {
    echo "La variable esta definida <br>";
} else {
    echo "La variable no esta definida <br>";
}