<?php

$myVar = "hello";



$varEsterna = 10;



/**
 * sum
 *
 * @param  mixed $myParamNumber
 * @return int
 */
function sum(int $myParamNumber) : int
{
    global $myVar;
    global $varEsterna;  //vede la var esterna
    echo $myVar;
    return $varEsterna + $myParamNumber;
}
echo sum("prova"); //da errore perchè abbiamo creato una funzione int e qui inseriamo invece una stringa
echo sum(17);