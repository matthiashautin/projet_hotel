<?php
require_once '../Controleur/conn_db.php';
session_start();


$nom = isset($_SESSION['Nom']) ? $_SESSION['Nom']: '';
?>

<header>
   <img src="../Image/hotel.png" alt="logo">
   <h4 class="name-user"><p>Bonjour,</p><?php echo $nom?> </h4> 
</header>