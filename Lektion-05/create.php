<?php
/* **********************************
*
*             CREATE
*
*************************************/

// 1. Visa ett HTML-formulär
?>

<form action="#" method="POST">

<div class="form-row">
  <div class="col-md-4">
    <input type="text" required
           class="form-control mt-2" 
           placeholder="Ange namn"
           name="name"> <!-- OBS! name skapar ett element i POST-Arrayen -->
  </div>

  <div class="col-md-4">
    <input type="text" required
           class="form-control mt-2" 
           placeholder="Ange telefon/mobil"
           name="tel">
  </div>

  <div class="col-md-4">
    <input type="submit" 
          class="form-control mt-2 btn btn-outline-primary" 
          value="Lägg till">
  </div>

</div> <!-- form-row -->
</form>

<?php
// 2. Arbeta med data som skickas via formuläret
if($_SERVER['REQUEST_METHOD'] == 'POST'):
    // Hämta värden (values) från olika input-fält
    $name = $_POST['name'];
    $tel  = $_POST['tel'];
    // Validera data (Backend validering)
    if(empty($name) OR empty($tel)){
        echo "<h2>Namn eller telefon får inte vara tomt!";
    }else
    {  
        // Logga in i databasen
        require_once 'db.php';

        // Förbered en SQL-sats
        $stmt = $conn->prepare("INSERT INTO contacts (name,tel) 
                                VALUES (:name, :tel) ");

        // Binda variabler till params, som finns i VALUES()
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':tel' , $tel);

        // Skicka SQL till databasen
        $stmt->execute(); 

    } // Avlusta if som validerar data

endif; // REQUEST_METHOD