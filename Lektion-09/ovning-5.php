<?php
/**
 * Visa en lista över alla länder 
 * från REST COUNTRIES
 */

 // Steg 1: Ange en endpoint
 $url = "https://restcountries.eu/rest/v2/all";

 // Steg 2: Hämta data i JSON-format
 $json = file_get_contents($url);

 // Steg 3: Testa data
 // var_dump($json);

 // Steg 4: Konvertera JSON-stängen till en PHP-Array
 $array = json_decode($json, true);

 // print_r($array);

 // Steg 5: Välja data att visa 
$table = "<table>";
$table .= "<tr><th>Land</th><th>Huvudstad</th><th>Flagga</th></tr>";
foreach($array as $key=>$value){
    $table .= "<tr>";
    $table .= "<td>$value[name]</td>";
    $table .= "<td>$value[capital]</td>";
    $table .= "<td><img src='$value[flag]' alt='$value[name]'></td>";
    $table .= "</tr>";
}

$table .= "</table>";

/* ------------------------------------------ */

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alla länder från REST COUNTRIES</title>
   <style>
   img{
       width:50px;
       height:auto;
   }
   td,th{
       border-bottom:1px solid grey;
   }
   th{
       text-align:left;
   }
   </style>
</head>
<body>
    <?=$table?>
</body>
</html>