<?php
/**
 * Visa alla breeds (hundraser) 
 * och alla sub-breeds
 * från Dog API
 */

 // Steg 1: Ange en endpoint
 $url = "https://dog.ceo/api/breeds/list/all";

 // Steg 2: Hämta data i JSON-format
 $json = file_get_contents($url);

 // Steg 3: Testa data
 // var_dump($json);

 // Steg 4: Konvertera JSON-stängen till en PHP-Array
 $array = json_decode($json, true);

 // var_dump($array);
 // print_r($array['message']);

 // Steg 5: Välja data att visa 
 $list = "<ol>";
 foreach($array['message'] as $breed=>$sub_breed){
     $list .= "<li>" . ucfirst($breed) ;
              // Visa Sub-breeds här
              if(!empty($sub_breed))
                $list .= ": ";
                
              $list .= implode(", " , $sub_breed);

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
    <title>Alla hudraser</title>
</head>
<body>
    <h1>Alla hundraser</h1>
    <?php echo $list?>
</body>
</html>