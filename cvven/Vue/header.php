<?php
require_once '../Controleur/conn_db.php';
?>

<header>
   <img src="../Image/hotel.png" alt="logo">
   <h4 class="name-user"><p>Bonjour,</p><?php echo $_SESSION['Nom'], $_SESSION['Prenom']?> </h4>
</header>