<?php
$host = 'mysql-cvven.alwaysdata.net';
$dbname = 'cvven_bdd_projet_hotel';
$username = 'cvven';
$password = 'G;d,Q7)=4wXj36qL';


if (isset($_POST['Connexion'])) {
    try {
        $objetPDO = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdoStat = $objetPDO->prepare('SELECT * FROM Client WHERE mail=:mail AND password=:password');
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $pdoStat->bindValue(':mail', $mail, PDO::PARAM_STR_CHAR);
        $pdoStat->bindValue(':password', $password, PDO::PARAM_STR_CHAR);
        $pdoStat->execute();

        $count = $pdoStat->rowCount();
        $rows = $pdoStat->fetch(PDO::FETCH_ASSOC);
        if ($count == 1 && !empty($rows)) {
            session_start();
            $_SESSION['mail'] = $rows["mail"];
            $message = "Connexion réussi";
            header("location: client.php");
        } else {
            $message = "Impossible de se connecter vérifier vos identifiant.";
        }
    } catch (PDOException $err) {
        echo "Une erreur c'est produite: " + $err->getMessage();
        $message = "Une erreur c'est produite.";
    }
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

</head>

<body>
    <header class="header">
        <p><?php echo $message ?></p>
        <div id="menu-btn" class="fas fa-bars icons"></div>
        <?php include("nav.php") ?>
        <div class="form-container">
            <form method="post">
                <h3>Connexion</h3>
                <input type="mail" name="mail" required placeholder="Votre mail">
                <input type="password" name="password" required placeholder="Votre Mdp">
                <input type="submit" value="Connexion" name="Connexion">
                <input type="reset" value="Effacer" name="Effacer">
            </form>
        </div>
</body>

</html>