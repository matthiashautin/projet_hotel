<?php
if (session_status() != PHP_SESSION_ACTIVE)
    session_start();
if (!isset($_SESSION['mail'])) {
    header("location:accueil.php");
    exit;
}
require_once 'conndb.php';


$objetPDO = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdoStat = $objetPDO->prepare('SELECT*FROM Client WHERE ID=:id');
$pdoStat->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$executeIsOk = $pdoStat->execute();
$client = $pdoStat->fetch();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CVVEN</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header class="header">

        <div id="menu-btn" class="fas fa-bars icons"></div>
        <?php include("nav.php") ?>
        <div class="form-container">

            <form action="form-update.php" method="post">
                <h3>Modification</h3>
                <input type="hidden" name="ID" value="<?= $client['ID']; ?>">
                <input type="text" name="Nom" value="<?= $client['Nom']; ?>">
                <input type="text" name="Prenom" value="<?= $client['Prenom']; ?>">
                <input type="email" name="mail" value="<?= $client['mail']; ?>">
                <input type="phone" name="telephone" value="<?= $client['telephone']; ?>">
                <input type="password" name="password" value="<?= $client['password']; ?>">
                <input type="submit" value="Envoyer" name="Envoyer">
                <input type="reset" value="Effacer" name="Effacer">
            </form>
        </div>
</body>

</html>