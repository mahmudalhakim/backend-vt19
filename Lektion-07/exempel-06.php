<?php
/**
 * 
 *   Arbeta med befintliga tjänsteservrar
 *   RESTful API:er
 *   Exempel 6
 * 
 */

 // Visa felmeddelanden vid development
// Ta bort dessa rader vid production
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// Steg 1: ange en endpoint/resurs (URL)
$url = "http://api.namnapi.se/v2/names.json";
// Resursen returnerar 10 slumpmässiga namn

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// var_dump($json);

// Steg 4: Konvertera JSON till PHP-Array
$data = json_decode($json, true);
// var_dump($data);

// Steg 5: Välj data
// Skapa en sträng som innehåller 10 förnamn och efternamn
$names ="";
foreach($data["names"] as $key=>$value){
    // print_r($value);
    $names .= $value['firstname'] . " " . $value['surname'] . "<br>";
}

// Skriv ut en HTML-lista
$list = "<ol>";
foreach($data["names"] as $key=>$value){
    $list .= "<li>$value[firstname] $value[surname]</li>";
}
$list .= "</ol>";

// Skriv ut en HTML-tabell
$table = "<table class='table table-hover'>";
foreach($data["names"] as $key=>$value){
    $table .= "<tr><td>$value[firstname] $value[surname]</td></tr>";
}
$table .= "</table>";

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NamnAPI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <style>
    td{
        border:1px solid red;
        padding:5px;
    }
    </style> -->
</head>
<body class="container">
    <h1>Några exempel från <a href="http://namnapi.se"> namnapi.se</a></h1>
    <h2>10 slumpmässiga namn</h2>
    <?=$names?>
    <h2>En HTML-lista</h2>
    <?=$list?>
    <h2>En HTML-tabell</h2>
    <?=$table?>
</body>
</html>