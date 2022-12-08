<?php
$host = 'mysql-theopruski.alwaysdata.net';
$dbname = 'theopruski_bdd_cvven';
$username = '243681';
$password = 'Theo040603';
$dsn = '';

try {
    $dsn = 'mysql:host' . $host . ';dbname' . $dbname;
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'connection failed: ' . $e->getMessage();
}
