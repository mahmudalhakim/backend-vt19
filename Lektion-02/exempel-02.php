<?php

// Arbeta med konstanter
define('SITE_TITLE' , "Nackademin");
define('CARS' , ['Volvo','Toyota']);

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_TITLE ?></title>
</head>
<body>
    <h1><?php echo SITE_TITLE ?></h1>
    <h2>Mina favorit bilar</h2>
    <h3><?php echo CARS[0]?></h3>
    <h3><?=CARS[1]?></h3>

    <h2>Magiska konstanter</h2>
    <?php
        echo __LINE__  . '<br>';
        echo __DIR__  . '<br>';
        echo __FILE__  . '<br>';
    ?>

</body>
</html>