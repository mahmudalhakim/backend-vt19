<?php
/**
 * Visa en slumpmässig bild
 * från Dog API 
 */

 // Steg 1: Ange en endpoint
 $url = "https://dog.ceo/api/breeds/image/random";

 // Steg 2: Hämta data i JSON-format
 $json = file_get_contents($url);

 // Steg 3: Testa data
 // var_dump($json);

 // Steg 4: Konvertera JSON-stängen till en PHP-Array
 $array = json_decode($json, true);

 // var_dump($array);
 // print_r($array['message']);

 // Steg 5: Välja data att visa 
 $image = "<img src='$array[message]' alt='Random Image'";

/* ------------------------------------------ */

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random image from Dog API</title>
    <style>
    .container{
        text-align:center;
        font-family:sans-serif;
    }
    img{
        width:auto;
        height:70vh;
        border:1px solid black;
        border-radius:10px;
    }
    a{
        text-decoration:none;
    }
    </style>
</head>
<body>
<div class="container">
    <h1><a href="">Random image from Dog API</a></h1>
    <?=$image?>
</div>
</body>
</html>