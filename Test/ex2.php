<?php
// Steg 1: ange en endpoint/resurs (URL)
$url = "https://dog.ceo/api/breeds/list/all";

// Steg 2: Hämta data i JSON-format
$json = file_get_contents($url);

// Steg 3: Testa data
// echo $json;

// Steg 4: Konvertera JSON till PHP-Array
$array = json_decode($json, true);

// Steg 5: Välj data att visa
$list = "<ol>";
   foreach ($array['message'] as $breed => $sub_breed) {
        $list .= "<li>" . ucfirst($breed) ;
        if(!empty($sub_breed))
            $list .= ": " . implode(", ",$sub_breed);
        $list .= "</li>";
    }
$list .= "</ol>";

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hundraser</title>
</head>
<body>
    <h1>Hundraser</h1>
    <?=$list?>
</body>
</html>