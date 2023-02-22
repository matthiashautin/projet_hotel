<?php
require_once 'conn_db.php';
/* Ouvre une nouvelle session de l'utilisateur et une nouvelle connection à la database */
$database = new Connection();
$db = $database->open();

/* Vérifie que l'ID est bien égale à l'ID pour connexion vers la reservation sinon redirection vers la page de login pour se connecter */
$id = isset($_SESSION['ID']) ? $_SESSION['ID'] : 'Erreur';

    if (isset($_SESSION['ID'])) { ?>
        <div class="link">
            <a href="./reservation.php">Réserver</a>
        </div>
    <?php
    } else { ?>
        <div class="link">
            <a href="./login.php">Réserver</a>
        </div>
    <?php
    }
?>