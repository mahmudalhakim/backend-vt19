<?php
// Lägg till dessa rader för att visa felmeddelanden.
ini_set('display_errors', '1');
error_reporting(E_ALL);


$title = "Exempel 1";

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- PHP-koden nedan är en shortcut till echo -->
    <title><?=$title?></title>
</head>
<body>
<?php
// Mitt första PHP-skript
echo "<h1>Hello World!</h1>";
echo "<h2>Exempel 1</h2>";
print("<p>Lite text i print</p>");
echo ("<p>Lite text i echo</p>");

echo "<h3>Variabler</h3>";
$namn = 'Mahmud Al Hakim';
echo $namn;
echo '<br>';

// Visa info om en variabel
var_dump($namn);
echo '<br>';

$heltal = 123;
var_dump($heltal);
echo '<br>';

// Testa typer
echo is_string($heltal);
// OBS! False är ett tomt resultat
echo '<br>';
echo is_int($heltal); // 1

echo "<h3>Strängar</h3>";
$fname = "Mahmud";
$lname = "Al Hakim";

// Skriv ut text och variabler
echo $fname,$lname; // MahmudAl Hakim
echo '<br>';

echo "Hej $fname $lname! <br>";

// eller skicka flera argument till echo
echo "Hej " , $fname  , " " , $lname , "!<br>";
echo 'Hej ' , $fname  , ' ' , $lname , '!<br>';

// Konkatenering i PHP görs med en punkt
echo "Hej " . $fname  . " " . $lname . "!<br>";
echo 'Hej ' . $fname  . ' ' . $lname . '!<br>';

// OBS!  => Hej $fname $lname! 
echo 'Hej $fname $lname! <br>';

?>

<br><br><br><br><br><br><br><br>
</body>
</html>