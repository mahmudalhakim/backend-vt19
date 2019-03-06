<?php 
/**********************************************
 *       db.php
 *       Skriptet skapar en databasuppkoppling
 *       med PDO (PHP Data Object)
 **********************************************/

$server   = "localhost";
$username = "root";
$password = "root";
$database = "filmdb2";

try{
    $db = new PDO("mysql:host=$server;dbname=$database;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 

}
catch(PDOException $e){
    echo $e-> getMessage();
}