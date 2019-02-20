<?php

// Visa felmeddelanden och varningar
// Enbart vid development
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Visa information om PHP i denna maskin
// phpinfo();

echo '<pre>My GET ';
print_r($_GET);
echo '</pre>';

echo '<pre>My POST ';
print_r($_POST);
echo '</pre>';