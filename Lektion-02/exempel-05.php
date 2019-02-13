<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Selektioner 
if(isset($_GET['name'])):
    $name = htmlspecialchars($_GET['name']);
else:
    $name = "Välj en produkt";
endif;
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title><?=$name?></title>
</head>
<body>
<h1><?=$name?></h1>
</body>
</html>
<a href="?name=PC">Produkt 1</a> |
<a href="?name=Mac">Produkt 2</a>