<?php
/* **********************************
*
*             READ
*
*************************************/

// 1. Logga in i databasen
require_once 'db.php';

// 2. Förbered en SQL-sats
$stmt = $conn->prepare("SELECT * FROM contacts");

// 3. Kör SQL
$stmt->execute();

// 4. Skapa en HTML-tabell
$table = '<div class="table-height"><table class="table table-hover table-sm">';
$table .= '<tr class="table-info"><th>Namn</th><th>Telefon</th><th class="text-center">Admin</th></tr>';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    // $table .= var_dump($row);
    // $table .= print_r($row);
    $name = htmlentities($row['name']);
    $tel  = htmlentities($row['tel']);
    $id   = htmlentities($row['id']);


    $table .= "<tr>
                  <td>$name</td>
                  <td>$tel</td>
                  <td class='text-center'>
                      <a href='update.php?id=$id' 
                         class='btn btn-sm btn-outline-info'>
                        Uppdatera   
                      </a>
                      <a href='delete.php?id=$id' 
                         class='btn btn-sm btn-outline-danger'>
                        Ta bort   
                      </a>
                  </td>
               </tr>";
} // while
$table .= '</table></div>';

// Skriv ut tabellen
echo $table;