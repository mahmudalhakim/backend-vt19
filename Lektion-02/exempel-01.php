<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

// OBS! URLen. 
// Du måste skriva ?name=NÅGOT 
// i adressfältet alltså i webbläsaren
// exempel-01.php?name=Mahmud

echo 'Hej ' . $_GET['name'] . '<br>';

// Spara data från $_GET i en variabel
$name =  $_GET['name'];

// Hämta mer data via GET
// Skriv detta i adressfältet
// exempel-01.php?name=Mahmud&order=1234
echo "Hej " . $_GET['name'] . 
     '<br>Ditt ordernummer är ' .  $_GET['order'];


// Skriv ut all info som finns i GET-Arrayen
echo '<pre>';
print_r($_GET);
echo '</pre>';

