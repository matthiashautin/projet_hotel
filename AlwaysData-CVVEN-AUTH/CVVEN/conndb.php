<?php
$host = 'mysql-cvven.alwaysdata.net';
$dbname = 'cvven_bdd_projet_hotel';
$username = 'cvven';
$password = 'G;d,Q7)=4wXj36qL';
$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'connection failed: ' . $e->getMessage();
}
