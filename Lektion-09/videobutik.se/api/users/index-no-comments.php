<?php
header('Content-Type: application/json;charset=utf-8');
$db = new PDO("mysql:host=localhost;dbname=filmdb2;charset=utf8", "root","root");
$stmt = $db->prepare("SELECT * FROM kund");
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($array, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);