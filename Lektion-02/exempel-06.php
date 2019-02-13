<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

/* Övning
1. Skapa ett skript som hämtar ett tal via URLen.
2. Om ett tal saknas i URLen 
2.1 eller om talet är mindre än 18 så ska skriptet visa meddelandet
"Du får inte handla här!"
3. Om talet är större än eller lika med 18 visa meddelandet 
"Välkommen till vår webshop";
*/

/*
if(!isset($_GET['tal'])):
    echo "<h1>Du får inte handla här!</h1>";
else:
    // Hämta talet från URLen
    $tal = $_GET['tal'];
    if($tal<18):
        echo "<h1>Du får inte handla här!</h1>";
        echo "<h1>Du är bara $tal år gammal</h1>";
    else:
        echo "<h1>Välkommen till vår webshop</h1>";
    endif;
endif;
*/

$tal = $_GET['tal'] ?? '';
$msg = ($tal>=18) ? 
        "<h1>Välkommen till vår webshop</h1>" 
        : "<h1>Du får inte handla här!</h1>";
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Webshop</title>
</head>
<body>
    <?php echo $msg; ?>
</body>
</html>