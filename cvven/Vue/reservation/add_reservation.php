<?php
// include '../../Controleur/conn_db.php';
$database = new Connection();
$db = $database->open();

$animation = "SELECT Nom_Anim FROM Animation";
$logements = "SELECT Logements FROM Hebergement";
$client = "SELECT Nom FROM Client";
$restauration = "SELECT Type_Resto FROM Restauration";
$region = "SELECT Nom_Region FROM Region";
?>

<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Add Réservation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../Modele/admin_res/add.php">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Logement :</label>
                        <div class="col-sm-10">
                            <select name="Logements">
                                <option value="">Selectionnez une données</option>
                                <?php
                                foreach ($db->query($logements) as $row) {
                                ?>
                                    <option value="<?php echo $row['Logements'] ?>"><?php echo htmlspecialchars($row['Logements']); ?></option>
                                <?php    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nom_Client :</label>
                        <div class="col-sm-10">
                            <select name="Nom">
                                <option value="">Selectionnez un Nom</option>
                                <?php
                                foreach ($db->query($client) as $row) {
                                ?>
                                    <option value="<?php echo $row['Nom'] ?>"><?php echo htmlspecialchars($row['Nom']); ?></option>
                                <?php    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Restauration :</label>
                        <div class="col-sm-10">
                            <select name="Type_Resto">
                                <option value="">Selectionnez un Type_Resto</option>
                                <?php
                                foreach ($db->query($restauration) as $row) {
                                ?>
                                    <option value="<?php echo $row['Type_Resto'] ?>"><?php echo htmlspecialchars($row['Type_Resto']); ?></option>
                                <?php    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Animation :</label>
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
                        <label class="col-sm-2 col-form-label">Region :</label>
                        <div class="col-sm-10">
                            <select name="Nom_Region">
                                <option value="">Selectionnez une Region</option>
                                <?php
                                foreach ($db->query($region) as $row) {
                                ?>
                                    <option value="<?php echo $row['Nom_Region'] ?>"><?php echo htmlspecialchars($row['Nom_Region']); ?></option>
                                <?php    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Menage :</label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="Menage">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Date de début :</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="DateDebut">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Date de fin :</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="DateFin">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Sauvegarder</a>
                    </form>
            </div>
        </div>
    </div>
</div>