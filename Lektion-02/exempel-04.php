<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Datum och tid

$today = date('Y-m-d');
$time  = date('H:i:s');

echo "<h1>$today</h1>";
echo "<h1>Klockan är $time</h1>";

echo "<h2>Aktuell tidzon:" . date_default_timezone_get();
// Ändra till svensk tidzon
date_default_timezone_set('Europe/Stockholm');
// Hämta klockan igen
$time  = date('H:i:s');
echo "<h2>Aktuell tidzon:" . date_default_timezone_get();
echo "<h1>Klockan efter inställning av tidzon: $time</h1>";

echo "<hr>";

$sun_info = date_sun_info(strtotime("today"), 59.3293, 18.0686);
$sunrise = date("H:i:s", $sun_info['sunrise']); 
echo "<h2>Soluppgång: $sunrise</h2>";

echo '<pre>';
print_r($sun_info);
echo '</pre>';