<?php
// Visa alla felmeddelanden!
ini_set('display_errors', '1');
error_reporting(E_ALL);

$title = "Exempel 2";

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<?php
// 
echo "<h1>$title</h1>";
echo "<h2>Arbeta med indexerade arrayer/vektorer</h2>";

// Olika sätt att skapa arrayer
// 1. Arrayliteral (Array Literal)
$cars1 = ['Saab' , 'Volvo' , 'BMW'];

// 2. Arraykonstruktor (Array Constructor/Initializer)
$cars2 = Array('Saab' , 'Volvo' , 'BMW');

// Indexering 
echo "Jag tycker om $cars1[1] och $cars2[0]. <br>";

// Skriv ut en array
echo $cars1; // Notice: Array to string conversion...
echo '<br>';

echo '<h3>Funktionen print_r()</h3>';
echo '<pre>';
print_r($cars1);
echo '</pre>';

// Skriv ut en dump på arrayen
echo '<h3>Funktionen var_dump()</h3>';
echo '<pre>';
var_dump($cars1);
echo '</pre>';

// Ändra innehåll i en array
$cars1[0] = 'Opel';
echo '<pre>';
print_r($cars1);
echo '</pre>';

echo "<h3>Antal element</h3>";
echo count($cars1);

echo "<h3>Sortera en array</h3>";
sort($cars1);

echo '<pre>';
print_r($cars1);
echo '</pre>';

echo "<h3>Lägga till nya element</h3>";
$cars1[] = 'Saab'; // OBS! [] efter variabelnamnet

echo '<pre>';
print_r($cars1);
echo '</pre>';

// Skapa en tom array
$products = [] ; 

// Lägg till produkter
$products[] = 'PC';
$products[] = 'Mac';

echo '<pre>';
print_r($products);
echo '</pre>';

echo "<h2>Arbeta med associativa arrayer</h2>";

// Exempel 1
$flowers = array(
    'ros'    => 50,
    'liljor' => 60
);

echo '<pre>';
print_r($flowers);
echo '</pre>';

// Exempel 2
$age = [
    'mahmud' => 45,
    'Sara'   => 35
];

echo '<pre>';
print_r($age);
echo '</pre>';

echo "Mahmud är $age[mahmud] år. <br>";      // OK
echo "Sara är " . $age["Sara"] . " år.<br>"; // OK
echo "Sara är " . $age['Sara'] . " år.<br>"; // OK
echo "Sara är " . $age[Sara] . " år.<br>";   // Warning: Use of undefined constant ...

echo "<h3>Miljövariabler</h3>";
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

echo "Skriptet finns här: $_SERVER[PHP_SELF] <br>";
echo "Dokumentroten är: $_SERVER[DOCUMENT_ROOT] <br>";

?>

<br><br><br><br><br><br><br><br>
</body>
</html>