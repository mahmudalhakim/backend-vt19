<?php
/* **********************************
*
*             DELETE
*
*************************************/

// Ta bort debug vid production  
// require_once 'debug.php';

// Kolla att man kommer hit med en GET-Metod
if(empty($_GET['id'])){
    // echo "<h2>OBS! Du får inte vara här!</h2>";
    // Gå till startsidan
    header('Location: index.php');
    return; 
}

// Hämta id från GET
$id = $_GET['id'];

/* 
  Kolla om id finns i databasen 
  och hämta all info som tillhör detta id
  Vi ska alltså hämta en hel rad
*/

// 1. Logga in i databasen
require_once 'db.php';

// 2. Förbered en SQL-sats
$stmt = $conn->prepare("SELECT * FROM contacts WHERE id = :id");
$stmt->bindParam(':id', $id);

// 3. Kör SQL
$stmt->execute();

if($stmt->rowCount() == 1):
   // echo "<h2>Det finns en rad i databasen!</h2>";
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $name = htmlentities($row['name']);
   $tel  = htmlentities($row['tel']);

   // Nu har vi fått all info som behövs för att ta bort en post
   // Visa sidhuvud och ett formulär för att bekräfta
   require_once 'header.php';
?>

<h2 class="text-center text-danger">Vill du ta bort följande kontakt?</h2>

<form action="#" method="POST">

<div class="form-row">
  <div class="col-md-6 offset-md-3">
    <input type="text" required disabled
           class="form-control mt-2" 
           value="<?php echo $name ?>"
           name="name"> 
  </div>

  <div class="col-md-6 offset-md-3">
    <input type="text" required disabled
           class="form-control mt-2" 
           value="<?php echo $tel ?>"
           name="tel">
  </div>

  <div class="col-md-6 offset-md-3">
    <input type="submit" 
           class="form-control mt-2 btn btn-outline-danger" 
           name="delete"
           value="Radera">
  </div>
  
  <div class="col-md-6 offset-md-3">
    <input type="submit" 
           class="form-control mt-2 btn btn-outline-dark" 
           name="cancel"
           value="Avbryt">
  </div>

</div> <!-- form-row -->

<!-- Skikca id via en hidden-filed (säkrare) -->
<input type="hidden" name="id" value="<?php echo $id; ?>">

</form>

<?php

require_once 'footer.php';

else:
    echo "<h2>Hackare får inte vara här!</h2>";
    // Gå till startsidan
    header('Location: index.php');
    return;

endif;



/********************************************
 * 
 *        Hantera POST-Data 
 *        som skickas via formuläret ovan
 * 
 *******************************************/

if($_SERVER['REQUEST_METHOD'] == 'POST'):
   
    // Vid avbryt gå till startsidan
    if(isset($_POST['cancel'])){
        header('Location: index.php');
        return;
    }

    // Logga in i databasen
    require_once 'db.php';

    // Förbered en SQL-sats
    $stmt = $conn->prepare("DELETE FROM contacts 
                            WHERE id= :id ");

    $id   = $_POST['id']; // hämtas via POST, se rad 74

    // Binda params
    $stmt->bindParam(':id'   , $id);

    // Kör SQL
    $stmt->execute();
    header('Location: index.php');
    return;

endif;