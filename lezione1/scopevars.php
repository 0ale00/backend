<?php

$myVar = "hello";

function printMyName(string $name): void
{
    echo $name;
}

printMyName(
    $myVar
);


/**
 * testStaticScope
 *
 * @return void
 */
function testStaticScope() : void
{
    static $counter = 0;
    echo $counter."<br>";
    $counter++;
}

testStaticScope();
testStaticScope();
testStaticScope();
echo "Fuori " . $myVar."<br>";
testStaticScope();


$varEsterna = 10;

/**
 * sum
 *
 * @param  mixed $myParanNumber
 * @return void
 */
function sum($myParanNumber)
{
    global $myVar;
    global $varEsterna;  //vede la var esterna
    echo $myVar;
    return $varEsterna + $myParanNumber;
}
echo sum(5)."<br>"; 
echo sum(20);