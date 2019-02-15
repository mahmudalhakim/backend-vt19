<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
    <h1>Formulär med metoden GET</h1>
    <form action="#" method="get">
     <h2>Vad heter du?</h2>
     <input type="text" name="name">
     <input type="submit" value="Skicka">
    </form>


    <?php
        // echo $_GET['name'] ?? '';
        /* Vid problem med ??-operator använd en if-sats
        if(isset($_GET['name'])){
            echo '<h2>Hej ' . $_GET['name'] . '</h2>';
        }
        */
        if(isset($_GET['name'])):
            echo '<h2>Hej ' . $_GET['name'] . '</h2>';
        endif;
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

