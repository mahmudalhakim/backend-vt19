<?php
/* **********************************
*
*             UPDATE
*
*************************************/

// Test: Kolla att man kommer hit med en GET-Metod
if(empty($_GET['id'])){
    //echo "<h2>OBS! Du får inte vara här!</h2>";
    // Gå till startsidan
    header('Location: index.php');
    return;
}

// Hämta id från GET
$id = $_GET['id'];

// Kolla om id finns i databasen 
// och hämta all info som tillhör detta id (en rad)

// Logga in i databasen
require_once 'db.php';

// Förbered en SQL-sats
$stmt = $conn->prepare("SELECT * FROM contacts WHERE id = :id");
$stmt->bindParam(':id', $id);

// Kör SQL
$stmt->execute();

if($stmt->rowCount() == 1):
   // echo "<h2>Det finns en rad i databasen!";
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $name = $row['name'];
   $tel  = $row['tel'];

   require_once 'header.php';
?>
<h2 class="text-center">Uppdatera</h2>
<form action="?id=<?php echo $id; ?>" method="POST">

<div class="form-row">
  <div class="col-md-4">
    <input type="text" required
           class="form-control mt-2" 
           value="<?php echo $name ?>"
           name="name"> 
    </div>

  <div class="col-md-4">
    <input type="text" required
           class="form-control mt-2" 
           value="<?php echo $tel ?>"
           name="tel">
  </div>

  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <div class="col-md-4">
    <input type="submit" 
          class="form-control mt-2 btn btn-outline-warning" 
          value="Uppdatera">
  </div>

</div> <!-- form-row -->

</form>
<?php

else:
    echo "<h2>OBS! Hackare får inte vara här!</h2>";
    // Gå till startsidan
    header('Location: index.php');
    return;
endif;


if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    // Logga in i databasen
    require_once 'db.php';

    // Förbered en SQL-sats
    $stmt = $conn->prepare("UPDATE contacts 
                            SET name= :name , tel= :tel
                            WHERE id= :id ");

    $name = $_POST['name'];
    $tel  = $_POST['tel'];
    $id   = $_POST['id']; // hämtas via POST
    // eller via GET
    // $id   = $_GET['id']; 
    // echo "<h1>ID=$id</h1>";
    // die();

    // Binda params
    $stmt->bindParam(':name' , $name);
    $stmt->bindParam(':tel'  , $tel);
    $stmt->bindParam(':id'   , $id);

    // Kör SQL
    $stmt->execute();
    header('Location: index.php');
    return;
}

// Ta bort debug vid production  
require_once 'debug.php';

require_once 'footer.php';