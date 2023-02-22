<?php
// include '../../Controleur/conn_db.php';
$database = new Connection();
$db = $database->open();

$animation = "SELECT Nom_Anim FROM Animation";
$logements = "SELECT Logements FROM Hebergement";
$client = "SELECT Nom FROM Client";
$restauration = "SELECT Type_Resto FROM Restauration";
$region = "SELECT Nom_Region FROM Region WHERE ID='6'";
$price_chambre_2 = "SELECT prix FROM Hebergement WHERE ID='3'";
$price_chambre_4 = "SELECT prix FROM Hebergement WHERE ID='2'";

?>
<main class="title-region">
    <h1>Hotel Saint-Anthème</h1>
</main>
<main class="title-p">
    <p>(Puy-de-Dôme)</p>
</main>
<section class="king_card">
    <div class="card">
        <img src="../Image/chambre_5.jpg" alt="Avatar" style="width:100%">
        <div class="card-header">
                <h4>Chambre 3 lits des Volcans</h4>
                <!-- <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>  -->
            </div>
        <div id="info" class="content">
             <p>La Chambre des Volcans est une chambre spacieuse et lumineuse avec trois lits confortables, décorée avec des motifs inspirés par les volcans de la région.
                Elle dispose également d'une salle de bain privative avec une douche et des articles de toilette de qualité.
                C'est une chambre parfaite pour les familles ou les groupes d'amis souhaitant découvrir les merveilles volcaniques du Puy-de-Dôme.
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
        <img src="../Image/chambre_6.jpg" alt="Avatar" style="width:100%">
        <div class="card-header">
                <h4>Chambre doubles des Etoiles</h4>
                 <!-- <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>  -->
            </div>
                <div class="content">
                <p>
                La Chambre des Etoiles est une chambre lumineuse et spacieuse située dans notre hôtel dans le Puy-de-Dôme.
                Elle est décorée avec un thème céleste, avec des motifs de constellations et des étoiles lumineuses pour une ambiance magique.
                La chambre est équipée d'un grand lit double confortable, d'une salle de bain privative avec une douche et des articles de toilette de qualité.
                Elle dispose également d'une grande fenêtre offrant une vue imprenable sur les étoiles et le ciel nocturne, offrant une expérience unique pour
                les clients qui cherchent à s'évader et se détendre.
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