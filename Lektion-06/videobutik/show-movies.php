<?php
/**********************************************
 *       show-movies.php
 *       Skriptet visar alla filmer  
 *       i en Bootstrap-grid
 **********************************************/

// Logga in i databasen
require_once 'db.php';

// Skapa en SQL-sats
// Hämta alla filmer från tabellen film
$stmt = $conn->prepare("SELECT * FROM film");

// Kör SQL
$stmt->execute();

// Starta en Bootstrap rad
echo "<div class='row'>";

// Iterera över resultatet med en while
// Lagra varje rad i $row
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :

// Hämta data från varje rad i tabellen
$id        = $row['filmid'];
$titel     = $row['titel'];
$kategori  = $row['kategori'];
$huvudroll = $row['huvudroll'];
$pris      = $row['pris'];

// Hämta src till en bild från mappen images
$image = "images/$id.jpg";
if (!file_exists($image)) {
    $image = "images/no-poster.png";
} 

?>
<!-- Starta en Bootstrap kolumn och ange olika brytpunkter -->
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
<!-- Skapa ett kort för att presentera en film
      https://getbootstrap.com/docs/4.2/components/card/   -->
<div class="card m-1">
  <img class="card-img-top" src="<?php echo $image ?>" 
        alt="<?php echo $titel; ?>">
  <div class="card-body">
    <h4 class="card-title"><?php echo $titel; ?></h4>
    <p class="card-text">
    Huvudroll: <?php echo $huvudroll; ?><br>
    Kategori:  <?php echo $kategori;  ?>
    </p>
    <!-- Skapa en GET-Länk till en beställningssida (skicka filmid)
         t.ex. order-form.php?id=1 -->
    <a href="order-form.php?id=<?php echo $id ?>" 
       class="btn btn-outline-info">
       Pris: <?php echo $pris; ?>:-
    </a>
  </div>
</div>
<!-- Avsluta kolumnen -->
</div>
<?php 

// Avsluta while
endwhile; 

// Avsluta Bootstrap raden 
echo '</div>';