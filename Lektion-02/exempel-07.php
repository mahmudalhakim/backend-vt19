<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Mina kunskaper</title>

    <style>
    
    td{
        border:1px solid hotpink;
    }

    </style>
</head>
<body>
<h1>Mina kunskaper</h1>
<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Iterationer
$languages = [
    'Java',
    'HTML',
    'CSS',
    'JavaScript',
    'PHP',
    'SQL'
];

echo '<ul>';
foreach($languages as $lang):
    echo "<li>$lang</li>" ;
endforeach;
echo '</ul>';

echo '<hr>';

echo '<table>';
foreach($languages as $lang):
    echo "<tr><td>$lang</td></tr>" ;
endforeach;
echo '</table>';

?>

</body>
</html>