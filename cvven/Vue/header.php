<?php
require_once '../Controleur/conn_db.php';
session_start();

$nom = isset($_SESSION['Nom']) ? $_SESSION['Nom'] : '';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['Nom'] . "!";
} else {
    echo "Please log in first to see this page.";
}

?>

<header>
    <img src="../Image/hotel.png" alt="logo">
    <h4 class="name-user">
        <p>Bonjour,</p><?php echo $nom ?>
    </h4>
</header>