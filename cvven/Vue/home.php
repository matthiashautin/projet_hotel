<?php
require_once "../Controleur/conn_db.php";
include '../Controleur/cheader.php';

$id = isset($_SESSION['ID']) ? $_SESSION['ID'] : 'Erreur';

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
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="../Image/Hotel La Rochelle (Charente-Maritime).jpg" style="width:100%">
            <?php
            if (isset($_SESSION['ID'])) { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./reservation.php" class="text">La Rochelle (Charente Maritime)</a>
                </div>
            <?php
            } else { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./login.php" class="text">La Rochelle (Charente Maritime)</a>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="../Image/Hotel Les Rousses (Jura).jpg" style="width:100%">
            <?php
            if (isset($_SESSION['ID'])) { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./reservation.php" class="text">Les Rousses (Jura)</a>
                </div>
            <?php
            } else { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./login.php" class="text">Les Rousses (Jura)</a>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="../Image/Hotel Saint-Anthème (Puy-de-Dôme).jpg" style="width:100%">
            <?php
            if (isset($_SESSION['ID'])) { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./reservation.php" class="text">Saint-Anthème (Puy de Dôme)</a>
                </div>
            <?php
            } else { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./login.php" class="text">Saint-Anthème (Puy de Dôme)</a>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="../Image/Hotel Villefort (Lozère).jpg" style="width:100%">
            <?php
            if (isset($_SESSION['ID'])) { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./reservation.php" class="text">Villefort (Lozère)</a>
                </div>
            <?php
            } else { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./login.php" class="text">Villefort (Lozère)</a>
                </div>
            <?php
            }
            ?>
        </div>

        <a class="prev" onclick="plusSlides(-1)"><</a>
        <a class="next" onclick="plusSlides(1)">></a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <section>
        <div class="Rochelle">
            <div class="title-image">
                <h3>La Rochelle (Charente Maritime)</h3>
                <img src="../Image/Hotel La Rochelle (Charente-Maritime).jpg" alt="LaRochelle">
                <?php require '../Controleur/cmain.php'; ?>
            </div>

        </div>
        <div class="Rousses">
            <div class="title-image">
                <h3>Les Rousses (Jura)</h3>
                <img src="../Image/Hotel Les Rousses (Jura).jpg" alt="LesRousses">
                <?php require '../Controleur/cmain.php'; ?>
            </div>
        </div>
        <div class="Saint-Antheme">
            <div class="title-image">
                <h3>Saint-Anthème (Puy de Dôme)</h3>
                <img src="../Image/Hotel Saint-Anthème (Puy-de-Dôme).jpg" alt="SaintAntheme">
                <?php require '../Controleur/cmain.php'; ?>
            </div>
        </div>
        <div class="Villefort">
            <div class="title-image">
                <h3>Villefort (Lozère)</h3>
                <img src="../Image/Hotel Villefort (Lozère).jpg" alt="Villefort">
                <?php require '../Controleur/cmain.php'; ?>
            </div>
        </div>
    </section>


    <script>
        <?php
        include "../js/image_slide.js"
        ?>
    </script>
</body>

</html>