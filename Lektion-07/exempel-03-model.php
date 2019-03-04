<?php
/**
 * 
 *   Arbeta med befintliga tjänsteservrar
 *   RESTful API:er
 *   Exempel 3
 * 
 */

// Visa felmeddelanden vid development
// Ta bort dessa rader vid production
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Steg 1: ange en endpoint/resurs (URL)
$url = "https://jsonplaceholder.typicode.com/users";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// echo $json;

// Steg 4: Konvertera JSON till PHP-Array
$result = json_decode($json, true);

// Steg 5: Välj data
// Skapa adressetiketter. Visa Namn och adress
$etiketter = "";
foreach($result as $key=>$value){
    $etiketter .= "<div>";
    $etiketter .= "<h4>". $value['name'] . "</h4>";
    $etiketter .= $value['address']['street'] . '<br>';
    $etiketter .= $value['address']['suite'] . '<br>';
    $etiketter .= $value['address']['zipcode'] . '<br>';
    $etiketter .= $value['address']['city'] . '<br>';
    $etiketter .= "</div>";
}