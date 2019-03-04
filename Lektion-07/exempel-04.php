<?php
/**
 * 
 *   Arbeta med befintliga tjänsteservrar
 *   RESTful API:er
 *   Exempel 4
 * 
 */

// Steg 1: ange en endpoint/resurs (URL)
$url = "https://jsonplaceholder.typicode.com/albums/1/photos";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// echo $json;

// Steg 4: Konvertera JSON till PHP-Array
$result = json_decode($json, true);

// Steg 5: Välj data
// Visa 10 små bilder (thumbnails) med länkar till stora bilder
$images ="";
foreach ($result as $key => $value) {
    if($key == 10) break;
    $images .= "<a href=$value[url] target='_blank'>";
    $images .= "<img src=$value[thumbnailUrl]>";
    $images .= "</a>";
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bilder från JSONPlaceholder</title>
</head>
<body>
   <?=$images?>
</body>
</html>