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
                        <?php
                            $rows= $db->query('SELECT * FROM Region WHERE ID="5"');
                        //var_dump($rows);
                        foreach ( $rows as $row) {
                            echo "<tr>
                                    <td><a href='reservation.php?id=".$row["Nom_Region"]."&region=LaRochelle' class='text' <td>" .$row["Nom_Region"]. "</td></a></td>
                                </tr>";
                        }
                    ?>
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
                        <?php
                            $rows= $db->query('SELECT * FROM Region WHERE ID="4"');
                        //var_dump($rows);
                        foreach ( $rows as $row) {
                            echo "<tr>
                                <td><a href='reservation.php?id".$row["ID"]."&region=LesRousses' class='text' <td>" .$row["Nom_Region"]. "</td></a></td>
                                </tr>";
                        }
                    ?>
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
                        <?php
                            $rows= $db->query('SELECT * FROM Region WHERE ID="6"');
                        //var_dump($rows);
                        foreach ( $rows as $row) {
                            echo "<tr>
                                <td><a href='reservation.php?id=".$row["ID"]."&region=SaintAnthème' class='text' <td>" .$row["Nom_Region"]. "</td></a></td>
                                </tr>";
                        }
                    ?>
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
                        <?php
                            $rows= $db->query('SELECT * FROM Region WHERE ID="7"');
                        //var_dump($rows);
                        foreach ( $rows as $row) {
                            echo "<tr>
                                <td><a href='reservation.php?id=".$row["ID"]."&region=Villefort' class='text' <td>" .$row["Nom_Region"]. "</td></a></td>
                                </tr>";
                        }
                    ?>
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
                <?php
                if (isset($_SESSION['ID'])) { ?>
                    <div class="btn-hotel-voirplus">
                        <?php
                            $rows= $db->query('SELECT * FROM Region WHERE Nom_Region="La Rochelle (Charente-Maritime)"');
                        //var_dump($rows);
                        foreach ( $rows as $row) {
                            echo "<tr>
                                    <td><a href='reservation.php?id=".$row["ID"]."&region=LaRochelle' class='text' <td></td>Reserve</a></td>
                                </tr>";
                        }
                    ?>
                </div>
            <?php
            } else { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./login.php" class="text">Reserve</a>
                </div>
            <?php
            }
            ?>
        </div>
            </div>

        </div>
        <div class="Rousses">
        <div class="title-image">
                <h3>Les Rousses (Jura)</h3>
                <img src="../Image/Hotel Les Rousses (Jura).jpg" alt="LesRousses">
                <?php
                if (isset($_SESSION['ID'])) { ?>
                    <div class="btn-hotel-voirplus">
                        <?php
                            $rows= $db->query('SELECT * FROM Region WHERE Nom_region="Les Rousses (Jura)"');
                        //var_dump($rows);
                        foreach ( $rows as $row) {
                            echo "<tr>
                                    <td><a href='reservation.php?id=".$row["ID"]."&region=LesRousses' class='text' <td></td>Reserve</a></td>
                                </tr>";
                        }
                    ?>
                </div>
            <?php
            } else { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./login.php" class="text">Reserve</a>
                </div>
            <?php
            }
            ?>
        </div>
            </div>

            </div>
        </div>
        <div class="Saint-Antheme">
        <div class="title-image">
                <h3>Saint-Anthème (Puy-de-Dôme)</h3>
                <img src="../Image/Hotel Saint-Anthème (Puy-de-Dôme).jpg" alt="SaintAnthème">
                <?php
                if (isset($_SESSION['ID'])) { ?>
                    <div class="btn-hotel-voirplus">
                        <?php
                            $rows= $db->query('SELECT * FROM Region WHERE Nom_Region="Saint-Anthème (Puy-de-Dôme)"');
                        //var_dump($rows);
                        foreach ( $rows as $row) {
                            echo "<tr>
                                    <td><a href='reservation.php?id=".$row["ID"]."&region=SaintAnthème' class='text' <td></td>Reserve</a></td>
                                </tr>";
                        }
                    ?>
                </div>
            <?php
            } else { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./login.php" class="text">Reserve</a>
                </div>
            <?php
            }
            ?>
        </div>
            </div>

        </div>
        <div class="Villefort">
        <div class="title-image">
                <h3>Villefort (Lozère)</h3>
                <img src="../Image/Hotel Villefort (Lozère).jpg" alt="VilleFort">
                <?php
                if (isset($_SESSION['ID'])) { ?>
                    <div class="btn-hotel-voirplus">
                        <?php
                            $rows= $db->query('SELECT * FROM Region WHERE Nom_Region="Villefort (Lozère)"');
                        //var_dump($rows);
                        foreach ( $rows as $row) {
                            echo "<tr>
                                    <td><a href='reservation.php?id=".$row["ID"]."&region=Villefort' class='text' <td></td>Reserve</a></td>
                                </tr>";
                        }
                    ?>
                </div>
            <?php
            } else { ?>
                <div class="btn-hotel-voirplus">
                    <a href="./login.php" class="text">Reserve</a>
                </div>
            <?php
            }
            ?>
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