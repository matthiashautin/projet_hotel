<?php
// include '../../Controleur/conn_db.php';
$database = new Connection();
$db = $database->open();

$animation = "SELECT Nom_Anim FROM Animation";
$logements = "SELECT Logements FROM Hebergement";
$client = "SELECT Nom FROM Client";
$restauration = "SELECT Type_Resto FROM Restauration";
$region = "SELECT Nom_Region FROM Region WHERE ID='7'";
$price_chambre_2 = "SELECT prix FROM Hebergement WHERE ID='3'";
$price_chambre_4 = "SELECT prix FROM Hebergement WHERE ID='1'";

?>
<main class="title-region">
    <h1>Hotel Villefort</h1>
</main>
<main class="title-p">
    <p>(Lozère)</p>
</main>
<section class="king_card">
    <div class="card">
        <img src="../Image/23666754.avif" alt="Avatar" style="width:100%">
        <div class="card-header">
                <h4>Chambre 3Lits des Dolmens</h4>
                <!-- <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>  -->
            </div>
        <div id="info" class="content">
            <p>
            La Chambre des Dolmens est une chambre unique et mystérieuse située dans notre hôtel en Lozère. Cette chambre spacieuse est décorée avec des motifs inspirés 
            par les dolmens de la région, ce qui crée une atmosphère énigmatique et fascinante. Les murs de la chambre sont recouverts de pierres apparentes, 
            ce qui rappelle l'architecture antique des dolmens. La chambre dispose d'un lit double confortable et de deux lits simples, 
            ce qui en fait un choix idéal pour les familles ou les groupes d'amis. Elle dispose également d'une salle de bain privative avec une douche 
            et des articles de toilette de qualité. Des éléments de design innovants ont été intégrés à la chambre, tels qu'un éclairage tamisé et des
            meubles en bois rustique pour compléter l'ambiance mystique de la chambre.
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
        <img src="../Image/9 almieres retreatsuite-retraite-france-yoga.jpg" alt="Avatar" style="width:100%">
        <div class="card-header">
                <h4>Chambre simple des Sources Sacrées</h4>
                 <!-- <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>  -->
            </div>
                <div class="content">
                <p>
                La Chambre des Sources Sacrées est une chambre paisible et sereine située dans notre hôtel en Lozère.
                Cette chambre unique est décorée avec des couleurs douces et des motifs inspirés par les sources et les rivières sacrées de la région,
                créant une ambiance apaisante et relaxante. Elle contient un lit simple confortable et une salle de bain privative avec une douche,
                des serviettes de qualité et des produits de bain respectueux de l'environnement. Des éléments de design innovants ont été intégrés pour compléter
                l'ambiance zen de la chambre.
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