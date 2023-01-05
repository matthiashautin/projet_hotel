<?php
    require_once "../Controleur/conn_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <?php include 'header.php' ?>
    <div class="title-page">
        <h1>Bonjour et bienvenue sur Cassidy Hotel</h1>
    </div>
    <section>
        <div class="Rochelle">
            <div class="title-image">
                <h3>La Rochelle (Charente-Maritime)</h3>
                <img src="../Image/Hotel La Rochelle (Charente-Maritime).jpg" alt="LaRochelle">
                <div class="link">
                    <a href="./login.php">Réserver</a>
                </div>
            </div>
            
        </div>
        <div class="Rousses">
            <div class="title-image">
                <h3>Les Rousses (Jura)</h3>
                <img src="../Image/Hotel Les Rousses (Jura).jpg" alt="LesRousses">
                <div class="link">
                    <a href="./login.php">Réserver</a>
                </div>
            </div>
        </div>
        <div class="Saint-Antheme">
            <div class="title-image">
                <h3>Saint-Anthème (Puy-de-Dôme)</h3>
                <img src="../Image/Hotel Saint-Anthème (Puy-de-Dôme).jpg" alt="SaintAntheme">
                <div class="link">
                    <a href="./login.php">Réserver</a>
                </div>
            </div>
        </div>
        <div class="Villefort">
            <div class="title-image">
                <h3>Villefort (Lozère)</h3>
                <img src="../Image/Hotel Villefort (Lozère).jpg" alt="Villefort">
                <div class="link">
                    <a href="./login.php" target="_blank">Réserver</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
</html>
