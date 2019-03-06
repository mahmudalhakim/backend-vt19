<?php
// Steg 1: ange en endpoint/resurs (URL)
$url = "https://dog.ceo/api/breeds/image/random";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// echo $json;

// Steg 4: Konvertera JSON till PHP-Array
$array = json_decode($json, true);

// Steg 5: Välj data att visa
$image = "<img src='$array[message]' alt='Random image from Dog API'>";

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hundraser</title>

    <style>
    img{
        width:100%;
        height:auto;
    }
    </style>
</head>
<body>
    <h1>Random image from Dog API</h1>
    <?=$image?>
</body>
</html>