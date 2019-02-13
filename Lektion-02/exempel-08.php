<?php

// Arbeta med funktioner
function print_array($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
// Anropa funktionen
print_array($_GET);
?>
<!-- Skapa en länk med en Querystring  -->
<h2>
<a href="?firstName=Mahmud&lastName=Al Hakim">
Klicka här för att testa!
</a>
</h2>