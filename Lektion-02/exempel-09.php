<?php

// Arbeta med sessioner

// Starta en session
session_start();

$_SESSION['user'] = 'Mahmud';
$_SESSION['age']  = 45;
$_SESSION['guld'] = true;

echo "<h1>Sida 1</h2>";
echo "<h2>Välkommen " . $_SESSION['user'] . "</h2>";
echo "<h2><a href='exempel-10.php'>Gå till sida 2</a>";

echo '<pre>My Sesssion ';
print_r($_SESSION);
echo '</pre>';