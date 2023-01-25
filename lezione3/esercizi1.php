<?php

/**
 * checkPosNeg
 *
 * @param  mixed $numero
 * @return void
 */
function checkPosNeg($numero)
{
    if ($numero > 0) {
        echo "Il numero è positivo";
    } elseif ($numero < 0) {
        echo "il numero è negativo";
    } elseif ($numero < 18) {
        echo "Il numero è postivo";
    } else {
        echo "il numero è uguale a 0";
    }
}

/**
 * checkPatente
 *
 * @param  mixed $numero
 * @return void
 */
function checkPatente($numero)
{
    if ($numero >= 18) {
        echo " Puoi prendere la patente";
    } elseif ($numero >= 0) {
        echo " Non puoi prendere la patente";
    }
}

$myNum = array(67, -3, 0, "Pietro", 11, 22.4, -13.2, "Guido", 0, 81,17.5,18, "gianni", "maria", -16.6);

foreach ($myNum as $key => $numero) {
    echo "Analizzo " . $numero . ": ";
    if (is_numeric($numero)) {
        checkPosNeg($numero);
        if (is_int($numero)) {
            checkPatente($numero);
        }
    } else {
        echo "Non è un numero!";
    }

    echo "<br>";
}