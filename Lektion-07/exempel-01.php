<?php
/**
 * 
 *   Arbeta med befintliga tjänsteservrar
 *   RESTful API:er
 *   Exempel 1
 * 
 */

// Steg 1: ange en endpoint/resurs (URL)
$url = "https://jsonplaceholder.typicode.com/users";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// echo "<pre>";
// echo $json;
// echo "</pre>";

// Steg 4: Konvertera JSON till PHP-Array
$result = json_decode($json, true);

// OBS! Parameter 2 (true) anger en associativ array (annars objekt)
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// Steg 5: Välj data att visa (skriva ut med echo)
foreach($result as $key=>$value){
    // echo "Nyckel nr $key <br>" ;
    
    // echo "<pre>Värdet som finns i nr $key är en ";
    // print_r($value);
    // echo "</pre>";

    // Skriv ut alla namn
    echo $value['name'] . "<br>";
}

echo "<hr>";

foreach($result as $key=>$value){ 
    // Skriv ut alla namn och telefonnummer
    echo $value['name'], ", " ,  $value['phone'] , "<br>";
}

echo "<hr>";

// Visa en HTML-lista över alla användare 
echo "<ol>";
foreach($result as $key=>$value){
    echo "<li>";
    echo $value['name'];
    echo "</li>";
}
echo "</ol>";