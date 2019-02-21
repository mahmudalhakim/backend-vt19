<?php
/**********************************************
 *       order-form.php
 *       Skriptet hanterar en GET-request
 *       och visar ett beställningsformulär
 **********************************************/

// Skapa en session för att lagra meddelanden
session_start();

// Om id saknas i URLen, gå till startsidan 
if(!isset($_GET['id'])){
    header('Location: index.php');
    // Make sure that code below does not get executed when we redirect. 
    // http://php.net/manual/en/function.header.php
    exit;
}

// Infoga sidhuvud (header.php)
include_once 'header.php';

// OBS! 
// Om id finns i URlen kommer vi hit
// Men vi måste rensa id för att undvika XSS-Attacker
// Testa följane URLen i olika webbläsare
// order-form.php?id=<script>location="https://geekprank.com/hacker/"</script>

// Hämta id från URLen 
$id = $_GET['id'];


// echo "<h1>$id</h1><hr>";;

// Rensa specialtecken med htmlspecialchars()
$id = htmlspecialchars($id);
// echo "<h1>$id</h1><hr>";;

// Rensa heltal med filter_var()
// Användbart för att t.ex. ta bort alla andra tecken förutom siffor
// https://www.w3schools.com/php7/filter_sanitize_number_int.asp
$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
// echo "<h1>$id</h1><hr>"; 
// die();   


// Sök filmen i databasen med hjälp av dess id
require 'db.php';
$sql  = "SELECT * FROM film WHERE filmid=:id";
$stmt = $conn->prepare($sql);
// Tips PDO::PARAM_INT kräver datatypen int
// http://php.net/manual/en/pdo.constants.php
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

// Om filmen saknas i databasen gå till startsidan
// echo "<h1>rowCount = " . $stmt->rowCount() . "</h1>"; die;
if($stmt->rowCount() == 0){
    header('Location: index.php');
    exit;
}

// Hämta all data om filmen
$row  = $stmt->fetch(PDO::FETCH_ASSOC);
// Tips
// http://php.net/manual/en/pdostatement.fetch.php
$filmid    = $row['filmid'];
$titel     = $row['titel'];
$kategori  = $row['kategori'];
$huvudroll = $row['huvudroll'];
$pris      = $row['pris'];

// Starta en Bootstrap rad
echo "<div class='row'>";

// Visa en bild om det finns en sådan i mappen images
$image = "images/$filmid.jpg";
if (file_exists($image)) {
    echo "<div class='col-md-6'>";
    echo "<img class='rounded img-fluid w-100' src='$image' alt='$titel'>";
    echo "</div>";
} 

// Visa ett beställningsformulär
?>

<div class="col-md-6">
    <h2>Du har valt följande film</h2>
    <h3><?php echo $titel; ?></h3>
    <h3>Pris: <?php echo $pris; ?>kr</h3>
    <form action="order-process.php" method="post">
        <input type="number" name="kundnummer" required
               class="form-control my-2" 
               placeholder="Ange ditt kundnummer">
        <input type="hidden" name="filmid" value="<?=$filmid?>">
        <input type="hidden" name="pris" value="<?=$pris?>">
        <input type="submit" 
               class="form-control my-2 btn btn-outline-success" 
               value="Skicka beställningen">
    </form>

    <?php
    // Om det finns ett meddelande i sessionen så visa här
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        // Rensa sessionen
        unset($_SESSION['message']);
    }
    ?>
</div> <!-- col -->
</div> <!-- row -->

<?php
require_once 'footer.php';