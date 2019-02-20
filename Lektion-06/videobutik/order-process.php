<?php
/**********************************************
 *       order-process.php
 *       Skriptet hanterar formulärdata från
 *       order-form.php
 **********************************************/

// Återuppta sessionen för att lagra meddelanden
session_start();

// Kontrollera att man kommer hit via POST-request
if ($_SERVER['REQUEST_METHOD'] === 'POST'):

    // Hämta och rensa formulärdata
    $filmid     = htmlspecialchars($_POST['filmid']);
    $pris       = htmlspecialchars($_POST['pris']);
    $kundnummer = htmlspecialchars($_POST['kundnummer']); 

    $filmid     = filter_var($filmid, FILTER_SANITIZE_NUMBER_INT);
    $pris       = filter_var($pris, FILTER_SANITIZE_NUMBER_INT);
    $kundnummer = filter_var($kundnummer, FILTER_SANITIZE_NUMBER_INT);


    // Kolla om kunden finns i databasen
    require_once 'db.php';
    $sql = "SELECT * FROM kund WHERE kundnummer=:kundnummer";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':kundnummer', $kundnummer, PDO::PARAM_INT);
    $stmt->execute();
    
    //  Om kunden saknas skapa ett felmeddelande
    if($stmt->rowCount() == 0){
        $_SESSION['message'] = '
            <div class="alert alert-warning">
                OBS! Felaktigt kundnummer!
            </div>';  
        // Gå till föregående sida
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        
        // Make sure that code below does not get executed when we redirect. 
        // http://php.net/manual/en/function.header.php
        exit;

    }
    else{ 
        // Ja kunden finns i databasen
        // Hämta info om kunden
         $row = $stmt->fetch(PDO::FETCH_ASSOC);
         $namn       = $row['namn'];
         $gatuadress = $row['gatuadress'];
         $postnummer = $row['postnummer'];
         $ort        = $row['ort'];
        
        // Skicka beställningen till tabellen uthyrning
        $sql= "INSERT INTO orders (film, kund, datum, pris)
               VALUES (:filmid, :kundnummer, CURRENT_TIMESTAMP, :pris)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':filmid', $filmid);
        $stmt->bindParam(':kundnummer' , $kundnummer);
        $stmt->bindParam(':pris', $pris);
        $stmt->execute();

        // Skapa ett meddelande med info om beställningen
        $_SESSION['message'] = "<div class='alert alert-success'>
                   <h3>Tack $namn</h3>
                   <p>Vi ska skicka filmen till följande adress</p>
                   <p>$gatuadress <br>
                   $postnummer  $ort </p>
                   </div>";
        // Gå till föregående sida
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

// Gå till startsidan vid felaktig POST-request
else:
    echo "<h1>Du får inte vara här!</h1>";
    header("Refresh:5; url=index.php");
    exit;
endif;