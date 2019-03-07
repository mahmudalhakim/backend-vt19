<?php
/**
 * 
 *   Utveckla en egen tjänsteserver
 *   Skapa ett eget RESTful API
 *   Leverera info om alla kunder i JSON-format
 * 
 */

// Steg 1: Ange innehållstypen JSON 
// med hjälp av PHP-funktionen header()
// Tips: Läs mer om header
// http://php.net/manual/en/function.header.php
header('Content-Type: application/json;charset=utf-8');

// Steg 2: Logga in i databasen
require_once '../db.php'; 

// Steg 3: Skapa en SQL-sats 
// Hämta alla kunder från tabellen kund
$sql = "SELECT * FROM kund";

// Steg 4: Kör SQL med PDO
$stmt = $db->prepare($sql);
$stmt->execute();

// Steg 5: Spara alla filmer i en PHP-Array
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Testa arrayen
// var_dump($array);

// Steg 6: Skapa en JSON-sträng
// med hjälp av PHP-funktionen json_encode()
// json_encode — Returns the JSON representation of a value
// http://php.net/manual/en/function.json-encode.php
$json = json_encode($array, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

// JSON_UNESCAPED_UNICODE
// Encode multibyte Unicode characters literally
// T.ex. Visa inte "Dödslängtan" som "D\u00f6dsl\u00e4ngtan"

// JSON_PRETTY_PRINT
// Use whitespace in returned data to format it
// Alltså vi får snyggare utskrift på JSON
// Läs mer: http://php.net/manual/en/json.constants.php

// Testa JSON-strängen
// var_dump($json);

// Steg 7: Skicka JSON till klienten 
// med hjälp av echo-kommandot 
echo $json;

// OBS! Viktigt
// Ingen extra info får skickas till klienten t.ex. <pre> eller var_dump