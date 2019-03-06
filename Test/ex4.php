<?php
// Steg 1: ange en endpoint/resurs (URL)
$url = "https://swapi.co/api/films";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// echo $json;

// Steg 4: Konvertera JSON till PHP-Array
$array = json_decode($json, true);
// print_r($array);

// Steg 5: Välj data att visa
$movies =  "<ul>";
foreach ($array['results'] as $key => $value) {
    $movies .=  "<li>"; 
    $movies .=  $value['title'] . ", ";
    $movies .=  $value['release_date']; 
    $movies .=  "</li>";
}
$movies .=  "</ul>";

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start Wars Movies</title>
</head>
<body>
    <h1>Start Wars Movies</h1>
    <?=$movies?>
</body>
</html>