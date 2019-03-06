<?php
// Steg 1: ange en endpoint/resurs (URL)
$url = "https://restcountries.eu/rest/v2/all";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// echo $json;

// Steg 4: Konvertera JSON till PHP-Array
$array = json_decode($json, true);
// print_r($array);

// Steg 5: Välj data att visa
$countries =  "<table>";
$countries .= "<tr><th>Land</th><th>Huvudstad</th><th>Flagga</th></tr>";
foreach ($array as $key => $value) {
    $countries .=  "<tr>";
    $countries .=  "<td>$value[name]</td>";
    $countries .=  "<td>$value[capital]</td>";
    $countries .=  "<td><img src='$value[flag]' alt=''></td>";
    $countries .=  "</tr>";
}
$countries .=  "</table>";

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REST COUNTRIES API</title>
    <style>
    img{
        width:50px;
        height:auto;
    }
    th{
        text-align:left;
    }
    th,td{
        border-bottom   :1px solid grey;
    }
    </style>
</head>
<body>
    <?=$countries?>
</body>
</html>