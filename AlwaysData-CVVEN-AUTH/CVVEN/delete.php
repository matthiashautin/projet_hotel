<?php
if (session_status() != PHP_SESSION_ACTIVE)
    session_start();
if (!isset($_SESSION['mail'])) {
    header("location:accueil.php");
    exit;
}

$host = 'mysql-cvven.alwaysdata.net';
$dbname = 'cvven_bdd_projet_hotel';
$username = 'cvven';
$password = 'G;d,Q7)=4wXj36qL';


$objetPDO = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdoStat = $objetPDO->prepare('DELETE FROM Client WHERE ID=:id LIMIT 1');
$pdoStat->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$executeIsOk = $pdoStat->execute();
if ($executeIsOk) {
    $message = "Client supprimé";
} else {
    $message = "Client non supprimé";
}
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