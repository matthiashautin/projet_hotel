<?php
$db_servername = "mysql-cvven.alwaysdata.net";
$db_name = "cvven_bdd_projet_hotel";
$db_username = "cvven";
$db_pass = "G;d,Q7)=4wXj36qL";

try 
{
  $pdo = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   
catch (PDOException $e) {
    print "Erreur :" . $e->getMessage() . "<br/>";  
    die;
}
?>