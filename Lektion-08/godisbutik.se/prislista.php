<?php
/**
 * 
 *   Arbeta med befintliga tjänsteservrar
 *   RESTful API:er
 *   Visa en tabell över filmer från videobutiken
 *   Lägg till 5kr extra per film
 * 
 */

// Steg 1: ange en endpoint/resurs (URL)
$url = "http://alhakim.tech/api/movies/";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// echo $json;

// Steg 4: Konvertera JSON till PHP-Array
$result = json_decode($json, true);

// Steg 5: Välj data
// Skapa en HTML-tabell över namn och e-post
$table = "<table>";
$table .= "<tr><th>ID</th><th>Titel</th><th>Pris</th></tr>";
foreach($result as $key=>$value){

    // Lägg till en admin-avgift
    $pris = $value['pris'] + 5;

    $table .= "<tr>
            <td>$value[filmid]</td>
            <td>$value[titel]</td>
            <td>$pris</td>
         </tr>";
}
$table .= "</table>";

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prislista</title>
    <style>
    td{
        border:1px solid hotpink;
    }
    </style>
</head>
<body>
    <?=$table?>
</body>
</html>