<?php
if (session_status() != PHP_SESSION_ACTIVE)
    session_start();
if (!isset($_SESSION['mail'])) {
    header("location:accueil.php");
    exit;
}

require_once 'conndb.php';


$objetPDO = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$pdoStat = $objetPDO->prepare('UPDATE Client set Nom=:nom, Prenom=:prenom, telephone=:telephone,
    mail=:mail, password=:password WHERE ID=:id LIMIT 1');
$pdoStat->bindValue(':id', $_POST['ID'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['Nom'], PDO::PARAM_STR_CHAR);
$pdoStat->bindValue(':prenom', $_POST['Prenom'], PDO::PARAM_STR_CHAR);
$pdoStat->bindValue(':telephone', $_POST['telephone'], PDO::PARAM_INT);
$pdoStat->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR_CHAR);
$pdoStat->bindValue(':password', $_POST['password'], PDO::PARAM_STR_CHAR);

$executeIsOk = $pdoStat->execute();
if ($executeIsOk) {
    $message = "Client modifié";
} else {
    $message = "Client non modifié";
    print_r($pdoStat->errorInfo());
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
    <h1>Modification</h1>
    <p><?= $message ?></p>
</body>

</html>