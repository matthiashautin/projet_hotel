<?php
if (session_status() != PHP_SESSION_ACTIVE)
    session_start();
if (!isset($_SESSION['mail'])) {
    header("location:accueil.php");
    exit;
}
require_once 'conndb.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CVVEN</title>
    <link rel="stylesheet" href="style.css">
    <header class="header">

        <div id="menu-btn" class="fas fa-bars icons"></div>
        <?php include("nav.php") ?>
</head>

<body>
    <h1>Suppression</h1>
    <p><?= $message ?></p>
</body>

</html>