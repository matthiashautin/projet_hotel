<?php
include_once '../../Controleur/conn_db.php';

$database = new Connection();
$db = $database->open();

$animation = "SELECT Nom_Anim FROM Animation";
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
                        <label class="col-sm-2 col-form-label">Logement</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Hebergement">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nom_Client</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Client">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Restauration</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Restauration">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Animation</label>
                        <div class="col-sm-10">
                        <!-- <select name="selectAnimation">
                            <?php 
                            foreach ($db->query($animation) as $row) {
                            ?>
                                    <option value=<?php htmlspecialchars($row['Nom_Anim']) ?>><?php echo htmlspecialchars($row['Nom_Anim']); ?></option>
                        <?php    } ?>
                        </select> -->
                            

                            <input type="text" class="form-control" name="selectAnimation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Region</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Region">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Menage</label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="Menage">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Date de début</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="DateDebut">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Date de fin</label>
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