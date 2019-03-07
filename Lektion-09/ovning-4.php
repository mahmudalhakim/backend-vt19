<?php
/**
 * Visa en lista över alla filmer 
 * från SWAPI.CO 
 */

 // Steg 1: Ange en endpoint
 $url = "https://swapi.co/api/films";

 // Steg 2: Hämta data i JSON-format
 $json = file_get_contents($url);

 // Steg 3: Testa data
 // var_dump($json);

 // Steg 4: Konvertera JSON-stängen till en PHP-Array
 $array = json_decode($json, true);

 // var_dump($array['results']);
 // print_r($array['results']);

 // Steg 5: Välja data att visa 
 $list = "<ol>";
 foreach($array['results'] as $key=>$value){
    $list .= "<li>";
    $list .= $value['title'];
    $list .= ", ";
    $list .= $value['release_date'];
    $list .= "</li>";
 }
 $list .= "</ol>";

/* ------------------------------------------ */

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alla filmer från SWAPI</title>
   
</head>
<body>
<div class="container">
<h1>Star Wars Movies</h1>
<?=$list?>
</div>
</body>
</html>