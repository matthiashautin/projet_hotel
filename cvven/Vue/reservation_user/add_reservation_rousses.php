<?php
// include '../../Controleur/conn_db.php';
$database = new Connection();
$db = $database->open();

$animation = "SELECT Nom_Anim FROM Animation";
$logements = "SELECT Logements FROM Hebergement";
$client = "SELECT Nom FROM Client";
$restauration = "SELECT Type_Resto FROM Restauration";
$region = "SELECT Nom_Region FROM Region WHERE ID='4'";
$price_chambre_2 = "SELECT prix FROM Hebergement WHERE ID='1'";
$price_chambre_4 = "SELECT prix FROM Hebergement WHERE ID='5'";

?>
<main class="title-region">
    <h1>Hotel Les Rousses</h1>
</main>
<main class="title-p">
    <p>(Jura)</p>
</main>
<section class="king_card">
    <div class="card">
        <img src="../Image/chambre_3.jpg" alt="Avatar" style="width:100%">
        <div class="card-header">
                <h4>Chambre simple des Sommets</h4>
                <!-- <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>  -->
            </div>
        <div id="info" class="content">
            <p>La Chambre des Sommets est une chambre spacieuse située au dernier étage de l'hôtel, offrant une vue panoramique sur les montagnes du Jura.
                La chambre est équipée d'un grand lit double, de deux fauteuils confortables, d'un petit coin bureau, d'une salle de bain privative et d'une
                petite terrasse privée avec des chaises longues. La décoration est chaleureuse et subtile, avec des touches de bois naturel et des couleurs
                rappelant les paysages environnants. C'est la chambre idéale pour le client qui recherche une expérience mémorable dans le Jura.
            </p>
            <div class="ruban-prix">
                    <div class="prix">
                        <h5>    
                            <?php
                                foreach ($db->query($price_chambre_2) as $row) {
                            ?>
                                <div value="<?php echo $row['prix'] ?>"><?php echo htmlspecialchars($row['prix']);?>
                            <?php } ?>€ /nuit
                        </h5>
                    </div>
                </div>
        </div>
    </div>
    <div class="card">
        <img src="../Image/chambre_4.jpg" alt="Avatar" style="width:100%">
        <div class="card-header">
                <h4>Chambre Handi du Temps</h4>
                 <!-- <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>  -->
            </div>
                <div class="content">
                <p>
                La Chambre du Temps est une chambre d'andi spacieuse et originale située au rez-de-chaussée de l'hôtel. 
                La chambre est équipée d'un grand lit double, d'une décoration inspirée du temps qui passe,
                d'une fenêtre donnant sur une cour intérieure et d'une salle de bain privative avec une baignoire vintage. 
                La chambre est également équipée d'un projecteur de ciel étoilé pour une ambiance magique. 
                C'est une chambre atypique et inspirante pour les clients qui recherchent une expérience unique dans le Jura.
                </p>
                </p>
                <div class="ruban-prix">
                    <div class="prix">
                    <h5>    
                            <?php
                                foreach ($db->query($price_chambre_4) as $row) {
                            ?>
                                <div value="<?php echo $row['prix'] ?>"><?php echo htmlspecialchars($row['prix']);?>
                            <?php } ?>€ /nuit
                        </h5>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="modal-dialog">
        <div class="modal-content-res">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Créer Votre Réservation</h5>
            </div>
            <div class="modal-body">
                <form method="POST" name="test" action="../Modele/user_res/add.php">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Logement</label>
                        <div class="col-sm-10">
                            <select name="Logements">
                                <option value="">Selectionnez un Logement</option>
                                <?php
                                foreach ($db->query($logements) as $row) {
                                ?>
                                    <option value="<?php echo $row['Logements'] ?>"><?php echo htmlspecialchars($row['Logements']); ?></option>
                                <?php    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Restauration</label>
                        <div class="col-sm-10">
                            <select name="Type_Resto">
                                <option value="">Selectionnez une Restauration</option>
                                <?php
                                foreach ($db->query($restauration) as $row) {
                                ?>
                                    <option value="<?php echo $row['Type_Resto'] ?>"><?php echo htmlspecialchars($row['Type_Resto']); ?></option>
                                <?php    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Animation</label>
                        <div class="col-sm-10">
                            <select name="Nom_Anim">
                                <option value="">Selectionnez une Animation</option>
                                <?php
                                foreach ($db->query($animation) as $row) {
                                ?>
                                    <option value="<?php echo $row['Nom_Anim'] ?>"><?php echo htmlspecialchars($row['Nom_Anim']); ?></option>
                                <?php    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Region</label>
                        <div class="col-sm-10">
                            <select name="Nom_Region">
                                <?php
                                foreach ($db->query($region) as $row) {
                                ?>
                                    <option value="<?php echo $row['Nom_Region'] ?>"><?php echo htmlspecialchars($row['Nom_Region']); ?></option>
                                <?php    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Menage</label>
                        <div class="col-sm-10">
                            <input type="radio" class="switch" value="Oui" name="Menage">&nbsp; Oui</option>
                            <input type="radio" class="switch" value="Non" name="Menage">&nbsp; Non</option>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">DateDebut</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="DateDebut">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">DateFin</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="DateFin">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Réserver</a>
                    </form>
            </div>
        </div>
    </div>
    
    <script>
function myFunction() {
    const winScroll = document.getElementById("info").scrollTop;
    const height = document.getElementById("info").scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
  }

 document.getElementById("info").onscroll = function() {myFunction()};
        </script>
</section>