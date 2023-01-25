<?php

$n = 30;
$i = 0;
$sum = 0;

//calculating sum from 1 to n
while ($i <= $n) {
    echo "Sommo $i <br>";
    $sum += $i;
    $i++;
}
echo "Totale $sum <br>";

echo "<hr>";
$somma = 0;
$n = 30;

for ($i = 0; $i <= $n; $i++) {
    echo "Sommo $i <br>";
    $somma += $i;
    }
    echo "Totale $somma <br>";


echo "<hr>";



/**
 * showAsterisk
 *
 * @param  mixed $num
 * @return void
 */
function showAsterisk($num)
{
    $result = "";
    for ($i = 1; $i <= $num; $i++) {
        $result = $result . '*';
    }
    return $result;
}

for ($i = 1; $i <= 10; $i++) {
    echo showAsterisk($i) . "<br>";
}

