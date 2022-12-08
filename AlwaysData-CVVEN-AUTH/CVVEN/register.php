<?php
$host = 'mysql-theopruski.alwaysdata.net';
$dbname = 'theopruski_bdd_cvven';
$username = '243681';
$password = 'Theo040603';

if (isset($_POST['Envoyer'])) {
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $nom = $_POST['Nom'];
        $prenom = $_POST['Prenom'];
        $telephone = $_POST['telephone'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];

        $sql = ("INSERT INTO `Client`(`Nom`, `Prenom`, `telephone`, `mail`, `password`) VALUES ('$nom','$prenom','$telephone', '$mail','$password')");
        $stmt = $conn->prepare($sql);
        $stmt->bindParam('Nom', $nom);
        $stmt->bindParam('Prenom', $prenom);
        $stmt->bindParam('telephone', $telephone);
        $stmt->bindParam('mail', $mail);
        $stmt->bindParam('password', $password);
        if ($stmt->execute()) {
            echo '<script>alert("Enregistré avec succès");</script>';
        } else {
            $error = "Erreur: " . $e->getMessage();
            echo '<script>alert("' . $error . '");</script>';
        }
    } catch (PDOException $e) {
        $error = "Erreur: " . $e->getMessage();
        echo '<script>alert("' . $error . '");</script>';
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

        <div id="menu-btn" class="fas fa-bars icons"></div>
        <?php include("nav.php") ?>
        <div class="form-container">

            <form action="" method="post">
                <h3>Formulaire d'inscription</h3>
                <input type="text" name="Nom" required placeholder="Votre Nom">
                <input type="text" name="Prenom" required placeholder="Votre Prenom">
                <input type="phone" name="telephone" required placeholder="Votre telephone">
                <input type="email" name="mail" required placeholder="Votre mail">
                <input type="password" name="password" required placeholder="Votre mot de pass">
                <input type="submit" value="Envoyer" name="Envoyer">
                <input type="reset" value="Effacer" name="Effacer">
            </form>
        </div>
</body>

</html>