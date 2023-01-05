<?php
require_once '../Controleur/conn_db.php';
session_start();

$database = new Connection();
$db = $database->open();

$nom = isset($_SESSION['Nom']) ? $_SESSION['Nom'] : 'Erreur';
$prenom = isset($_SESSION['Nom']) ? $_SESSION['Nom'] : 'Erreur';

?>

<header>
    <img src="../Image/hotel.png" alt="logo">
    <h4 class="name-user">
        <p>Bonjour, <?php echo $nom . " " . $prenom ?></p>
    </h4>
</header>