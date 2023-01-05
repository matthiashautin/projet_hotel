<?php
require_once '../Controleur/conn_db.php';
session_start();
$database = new Connection();
$db = $database->open();

/* Affiche le nom de l'utilisateur sans être connecté. Sa affichera donc Bonjour, Erreur Erreur */
$nom = isset($_SESSION['Nom']) ? $_SESSION['Nom'] : 'Erreur';
$prenom = isset($_SESSION['Nom']) ? $_SESSION['Nom'] : 'Erreur';
$id = isset($_SESSION['ID']) ? $_SESSION['ID'] : 'Erreur';

?>


<header>
    <img src="../Image/hotel.png" alt="logo">
    <h4 class="name-user">
        <p>Bonjour, 
            <?php
                if (isset($_SESSION['ID'])) {
                    echo $nom . " " . $prenom;?>
                    <div class=btn-deco-co> 
                        <a class="btn-deco" href='../Controleur/clogout_user.php'>Déconnexion</a>
                    </div>
            <?php
                } else {
                    echo "Vous n'êtes pas connecté";?>
                    <div class=btn-deco-co> 
                        <a class="btn-co" href='login.php'>Connectez-vous</a>
                    </div>
            <?php
                }
            ?>
        </p>
    </h4>
</header>