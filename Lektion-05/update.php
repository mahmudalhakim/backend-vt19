<?php
/* **********************************
*
*             UPDATE
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
   $name = $row['name'];
   $tel  = $row['tel'];

   // Nu har vi fått all info som behövs för att uppdatera en post
   // Visa sidhuvud och skapa ett formulär
   require_once 'header.php';
?>

<h2 class="text-center">Uppdatera</h2>

<form action="?id=<?php echo $id; ?>" method="POST">
<!-- Du kan skicka id i en GET-variabel via action -->

<div class="form-row">
  <div class="col-md-6 offset-md-3">
    <input type="text" required
           class="form-control mt-2" 
           value="<?php echo $name ?>"
           name="name"> 
  </div>

  <div class="col-md-6 offset-md-3">
    <input type="text" required
           class="form-control mt-2" 
           value="<?php echo $tel ?>"
           name="tel">
  </div>

  <div class="col-md-6 offset-md-3">
    <input type="submit" 
           class="form-control mt-2 btn btn-outline-warning" 
           value="Uppdatera">
  </div>

</div> <!-- form-row -->

<!-- Du kan också skicka id i en POST-variabel
     via en hidden-field. Jämför med rad 48 -->
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
   
    // Logga in i databasen
    require_once 'db.php';

    // Förbered en SQL-sats
    $stmt = $conn->prepare("UPDATE contacts 
                            SET name= :name , tel= :tel
                            WHERE id= :id ");

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $tel  = filter_var($_POST['tel'], FILTER_SANITIZE_STRING);
    $id   = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
    // id hämtas via POST, se rad 79
    
    // Du kan testa att skriva ut id. 
    // echo "<h1>ID via POST: $id</h1>";

    // eller hämta id via GET, se rad 48
    // $id   = $_GET['id']; 
    // echo "<h1>ID via GET: $id</h1>";  

    // OBS! funktionen die() avslutar skriptet 
    // Bortkommentera för att testa ovanstående utskrifter
    //  die();

    // Binda params
    $stmt->bindParam(':name' , $name);
    $stmt->bindParam(':tel'  , $tel);
    $stmt->bindParam(':id'   , $id);

    // Kör SQL
    $stmt->execute();
    header('Location: index.php');
    return;

endif;