<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nyhetsbrev</title>
</head>
<body>
<form action="#" method="post">
  <label for="email">
    Anmäl dig till vårt nyhetsbrev
  </label>
  <br>
  <input id="email" name="email" type="email" size="40" required
    placeholder="Ange en giltig e-postadress"> 
  <br>
  <input type="submit" value="ANMÄL DIG NU">
 </form>
</body>
</html>

<?php
if(isset($_POST['email'])):
    
    // Lägg till htmlspecialchars för att rensa HTML
    $to = htmlspecialchars($_POST['email']);
    
    // Lägg till ett filter för att validera e-postadressen 
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        echo("<h2 style='color:red'>$to is not a valid email address</h2>");
        die(); // vid fel avsluta med die() eller exit()
    }
    $subject = "Anmälan till nyhetsbrev";
    $message = "<h1>$to finns nu i vårt register!</h1>";
    
    // OBS! För att skicka headers som en associativ array krävs PHP 7.2.0
    /*
    $headers = array(
        'From' => $to,
        'Reply-To' => 'noreply@example.com', 
        'MIME-Version' => '1.0',
        'Content-type' => 'text/html; charset=utf-8', 
        'Bcc' => 'mahmud@example.com'
        );
    mail($to, $subject, $message, $headers);
    */
    
    // Om din server har en äldre version använd följade syntax istället
    $headers[] = "From: $to";
    $headers[] = "Reply-To: noreply@example.com";
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=utf-8";
    $headers[] = "Bcc: mahmud@example.com";
    mail($to, $subject, $message, implode("\r\n", $headers));

    // Var gör funktionen implode?
    // Svar: testa själv gemom att skriva ut med echo!
    echo '<pre>';
    echo implode("\r\n", $headers);
    echo '</pre>';

    echo "<h2>Tack! <br>
    Vi kommer att skicka bekräftelse till $to inom kort</h2>";
  
endif;
?>