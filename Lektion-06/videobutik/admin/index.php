<?php

include '../header.php';
include '../db.php';

echo "<h2>Beställningar</h2>";

$sql = "SELECT film.titel AS film_titel,
               film.pris AS pris,
               kund.namn AS kund_namn,
               orders.ordernummer AS ordernummer,
               orders.datum AS orderdatum
        FROM orders, film, kund 
        WHERE film.filmid = orders.film
        AND kund.kundnummer = orders.kund";
$stmt = $conn->prepare($sql); 
$stmt->execute();

$table = '<table class="table table-striped">';
$table .= '<tr><th>Ordernummer</th><th>Film</th><th>Kund</th><th>Orderdatum</th><th>Pris</th></tr>';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
    $table .= '<tr>';
    $table .= '<td>' . $row['ordernummer'] . '</td>';
    $table .= '<td>' . $row['film_titel'] . '</td>';
    $table .= '<td>' . $row['kund_namn'] . '</td>';
    $table .= '<td>' . $row['orderdatum'] . '</td>';
    $table .= '<td>' . $row['pris'] . '</td>';

    $table .= '</tr>';        
}
$table .= '</table>';

echo $table;


include '../footer.php';