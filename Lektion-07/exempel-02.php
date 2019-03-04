<?php
/**
 * 
 *   Arbeta med befintliga tjänsteservrar
 *   RESTful API:er
 *   Exempel 2
 * 
 */

// Steg 1: ange en endpoint/resurs (URL)
$url = "https://jsonplaceholder.typicode.com/users";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// echo $json;

// Steg 4: Konvertera JSON till PHP-Array
$result = json_decode($json, true);

// Steg 5: Välj data
// Skapa en HTML-tabell över namn och e-post
$table = "<table>";
$table .= "<tr><th>Namn</th><th>E-post</th></tr>";
foreach($result as $key=>$value){
    $table .= "<tr>
            <td>$value[name]</td>
            <td>$value[email]</td>
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
    <title>Tabell över alla användare</title>
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