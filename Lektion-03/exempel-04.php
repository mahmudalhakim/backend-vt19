<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET och POST</title>
</head>
<body>
    <h1>GET och POST</h1>
    
    <!-- 
        Du kan skicka data via GET i ett formulär.
        Undersök attributet action nedan
    -->
    <form action="?id=1234" method="post">
    <!-- Tips: hidden field är säkrare -->
     
    <h2>Vad heter du?</h2>
     <input type="text" name="name">
     <input type="submit" value="Skicka">
    </form>

    <?php
        echo "<h2>";
        echo  htmlspecialchars($_POST['name']) ?? '';   
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

