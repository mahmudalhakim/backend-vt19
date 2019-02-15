<?php
$to      = 'mahmud@example.com';
$subject = 'The subject';
$message = 'Hello message from PHP mail. ';

// OBS! För att skicka headers som en associativ array krävs PHP 7.2.0
$headers = array(
          'From'     => 'webmaster@example.com',
          'Reply-To' => 'noreply@example.com'
);

mail($to, $subject, $message, $headers);

echo "<h3>OBS! <br>
För att kunna skicka mejl krävs en e-postserver. <br>
Ladda upp filen till en online server<h3>";
?>