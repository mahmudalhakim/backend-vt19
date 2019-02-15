<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>
    <h1>Formulär med metoden POST</h1>
    <form action="#" method="post">
     <h2>Vad heter du?</h2>
     <input type="text" name="name">
     <input type="submit" value="Skicka">
    </form>

    <?php
        echo "<h2>";
        echo  $_POST['name'] ?? '';   
        echo "</h2>";
    ?>
</body>
</html>

<?php
    // Enbart vid development (ej production)
     echo '<hr><pre>My GET ';
     print_r($_GET);
     echo '</pre>';
 
     echo '<hr><pre>My POST ';
     print_r($_POST);
     echo '</pre>';

