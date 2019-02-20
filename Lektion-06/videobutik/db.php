<?php 
/**********************************************
 *       db.php
 *       Skriptet skapar en databasuppkoppling
 *       med PDO (PHP Data Object)
 **********************************************/

$server   = "localhost";
$username = "root";
$password = "root";
$database = "filmdb";

try{
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 

}
catch(PDOException $e){
    echo $e-> getMessage();
}