<?php
session_start();
$session = "session.php";
$lib = "login";
if (isset($_SESSION['mail'])) {
    $session = "logout.php";
    $lib = "logout";
}
?>
<nav class="navbar">
    <a href="https://theopruski.alwaysdata.net/CVVEN/accueil.php">Accueil</a>
    <a href="https://theopruski.alwaysdata.net/CVVEN/register.php">Formulaire d'inscription</a>
    <?php if (isset($_SESSION['mail'])) : ?>
        <a href="https://theopruski.alwaysdata.net/CVVEN/client.php">Utilisateurs</a>
    <?php endif; ?>
    <a href="https://theopruski.alwaysdata.net/CVVEN/<?= $session ?>"><?= $lib ?></a>
</nav>