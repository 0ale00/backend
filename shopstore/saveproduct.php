<?php
session_start();

require_once "inc/functions.php";

//leggo il file
$catalogo = readFileJson("data/products.json");

if ($catalogo == null) {
    $catalogo = array();
}

$catalogo[] = $_SESSION['userData'];

$result = updateFileJson($myAnagr, "data/products.json");
$myAnagr = readFileJson("data/products.json");
require_once 'login.php';