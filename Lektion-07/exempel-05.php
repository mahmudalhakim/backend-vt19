<?php
/**
 * 
 *   Arbeta med befintliga tjänsteservrar
 *   RESTful API:er
 *   Exempel 5
 * 
 */

 // Visa felmeddelanden vid development
// Ta bort dessa rader vid production
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// Steg 1: ange en endpoint/resurs (URL)
$url = "http://api.namnapi.se/v2/names.xml";
// Resursen returnerar 10 slumpmässiga namn

// Steg 2: Hämta data i XML-format
$xml = simplexml_load_file($url);

// Steg 3: Testa data
// var_dump($xml);

// Steg 4: Konvertera JSON till PHP-Array
// Behövs ej vid XML-format

// Steg 5: Välj data
// Skriv ut alla förnamn
foreach($xml->name as $x){
    // var_dump($x);
    echo $x->firstname . " ";
    echo $x->surname   . " (";
    echo $x->gender    . ")<br>";
}