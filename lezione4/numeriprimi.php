<?php
//TROVARE numeri primi fra 1 e 100 e stamparli
//Numero primo è
// >1
//può essere diviso solo per se stesso

//TIP : $a % $b Modulo


function checkIsPrime($number)
{   
    echo "checking $number <br>";
    if ($number == 1) {
        return false;
    }
    //può essere diviso solo per se stesso
    for ($i = 2; $i <= $number/2; $i++) {
        echo "ciclo num $i <br>";
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 1; $i < 101; $i++) {
    if (checkIsPrime($i)) {
        echo "$i è un numero PRIMO<br>";
    }
}

