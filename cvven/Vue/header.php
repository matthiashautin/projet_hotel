<?php
require_once '../Controleur/conn_db.php';
session_start();
$database = new Connection();
$db = $database->open();

$nom = isset($_SESSION['Nom']) ? $_SESSION['Nom'] : 'Erreur';
$prenom = isset($_SESSION['Nom']) ? $_SESSION['Nom'] : 'Erreur';
$id = isset($_SESSION['ID']) ? $_SESSION['ID'] : 'Erreur';

?>

<header>
    <img src="../Image/hotel.png" alt="logo">
    <h4 class="name-user">
        <p>Bonjour, <?php 
        if (isset($_SESSION['ID'])) {

            echo $nom . " " . $prenom;
            echo "<a href='../Controleur/clogout_user.php'>logout</a>";

         } else {
            echo 'Vous etes pas connecté';
            echo "<a href='login.php'>login</a>";

         }
        ?></p>
    </h4>
</header>