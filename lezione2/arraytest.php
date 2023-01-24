<?php

// array con indici numerici
$cars = array ("ferrari", "audi", "bmw");
$cars[4] = "toyota";
$cars[] = "mercedes";
echo var_dump ($cars);

echo '<hr>';

//array associativo
$age = array("Mario" => 32, "Elena" => 27, "Guido" => 29);
$age["Pietro"] = 81; // modo corretto
$age[] = "Paolo"; // add Paolo ma con indice 0
$age["Maria"] = "16"; //add MAria e l'età l'aggiunge come stringa
$ages[] = 9;
$ages[2] = 20;
echo var_dump ($age);

echo '<hr>';

//array multidimensionli
$famiglia = array (
    "Rossi" => array ("1","2","3"),
    "Verdi" => array ("A","b","c"),
);

$famiglia["Gialli"] = array ("A","b","c"); // crea un altro array posizionandolo per ultimo
$famiglia[] = 14;
$famiglia["Verdi"][] = "d"; // aggiunge all'array verdi 
$famiglia["Gialli"][] = "d"; // aggiunge all'array gialli, lo chiamiamo nello prima quadra, la seconda quadra indica add 
$famiglia[2][] = "e";
$famiglia[4][] = "elementoA";
$famiglia[4][] = "elementoB";
$famiglia[] = 15;
$famiglia[3] =" questo è tre";
$famiglia[] =" questo è il 6";

var_dump($famiglia);echo '<hr>';
echo "Stampo Gialli<br>";
var_dump($famiglia["Gialli"]);
echo '<hr>';
echo "Stampo Verdi<br>";
var_dump($famiglia["Verdi"]);
echo '<hr>';
echo "Stampo 4<br>";
var_dump($famiglia[4]);
echo '<hr>';

$famiglia["Verdi"] = "d"; //cancella Verdi e inserisce solo d

echo '<hr>';
$annidato = array (
    "Rossi" => array ("1","2","3"),
    "Verdi" => array ("A","b","c"),
);

$annidato["Rossi"]["secondoLivello"] = array ("1","2",3);
$annidato["Rossi"]["secondoLivello"]["terzoLivello"] = array ("A","B","C");

var_dump($annidato["Rossi"]);

//modi diversi per creare array
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);


$array = [
    "foo" => "bar",
    "bar" => "foo",
];

echo '<hr>';
//
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo",
             "pippo" => "eccomi"
             )
        )
    );
    
    var_dump($array["foo"]);
    var_dump($array[42]);
    var_dump($array["multi"]["dimensional"]["array"]);
    var_dump($array["multi"]["dimensional"]["pippo"]);
    
    echo '<hr>';
    
    // Create a simple array.
    $array = array(1, 2, 3, 4, 5);
    print_r($array);
    echo '<hr>';
    // Now delete every item, but leave the array itself intact:
    foreach ($array as $i => $value) {
        unset($array[$i]);
    }
    print_r($array);
    echo '<hr>';
    // Append an item (note that the new key is 5, instead of 0).
    $array[] = 6;
    print_r($array);
    echo '<hr>';
    // Re-index:
    $array = array_values($array);
    $array[] = 7;
    print_r($array);