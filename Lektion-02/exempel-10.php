<?php

// Arbeta med sessioner

// återuppta en session
session_start();

echo "<h1>Sida 2</h2>";
echo "<h2>Vart välkommen " . $_SESSION['user'] . "</h2>";
echo "<h2><a href='exempel-09.php'>Gå till sida 1</a>";

echo '<pre>My Sesssion ';
print_r($_SESSION);
echo '</pre>';