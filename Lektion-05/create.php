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
    <input type="tel" required
           class="form-control mt-2" 
           placeholder="Ange telefon/mobil"
           name="tel">
  </div>

  <div class="col-md-4">
    <input type="submit" 
          class="form-control my-2 btn btn-outline-primary" 
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
   
    // Rensa data
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $tel  = filter_var($tel , FILTER_SANITIZE_STRING);
    
    // Validera data (Backend validering)
    if(empty($name) OR empty($tel)){
        echo '<div class="alert alert-danger">
        Namn eller telefon får inte vara tomt!</div>';
    }
    elseif(strlen($name) < 3){
      echo '<div class="alert alert-danger">
            Namnet måste vara mer än 2 tecken
            </div>';

    }
    else
    {  
        // 1. Logga in i databasen
        require_once 'db.php';

        // 2. Förbered en SQL-sats
        $stmt = $conn->prepare("INSERT INTO contacts (name,tel) 
                                VALUES (:name, :tel) ");

        // Binda variabler till params, som finns i VALUES()
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':tel' , $tel);

        // 3. Skicka SQL till databasen
        $stmt->execute(); 

    } // Avlusta if som validerar data
  

// Redirect to this page.
// Varför?
// https://stackoverflow.com/questions/4142809/simple-post-redirect-get-code-example
// Bra att läsa
// https://en.wikipedia.org/wiki/Post/Redirect/Get 
header("Location: " . $_SERVER['REQUEST_URI']);
exit();
 

endif; // REQUEST_METHOD