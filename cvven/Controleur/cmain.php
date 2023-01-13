<?php
require_once 'conn_db.php';

$database = new Connection();
$db = $database->open();

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