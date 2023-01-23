<?php

$myVal = 3;

$myStringVal = "4.5";

$transofrmedVal = intval ($myStringVal);
$transofrmedValNew = round ($myStringVal);

echo floatval($myStringVal);
echo"<br>";


echo $transofrmedVal;
echo "<hr>";
echo $myVal + $transofrmedVal;
echo "<hr>";
echo $myVal + $myStringVal;
echo "<hr>";
echo $myVal . $myStringVal;
echo "<hr>";

var_dump((int)8.1);

$x = 8 - 6.4; 

echo (int)$x;
var_dump($x);

// il var_dump ti mostra di che tipo è la variabile chiamata
var_dump($myVal);
var_dump($myStringVal);
var_dump($transofrmedVal);
var_dump($transofrmedValNew);

echo '<br>*<br>';
$show_separators = true;
if ($show_separators) {
    echo "<hr>\n";
}