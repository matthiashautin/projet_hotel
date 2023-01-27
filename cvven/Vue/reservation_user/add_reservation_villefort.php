<?php
// include '../../Controleur/conn_db.php';
$database = new Connection();
$db = $database->open();

$animation = "SELECT Nom_Anim FROM Animation";
$logements = "SELECT Logements FROM Hebergement";
$client = "SELECT Nom FROM Client";
$restauration = "SELECT Type_Resto FROM Restauration";
$region = "SELECT Nom_Region FROM Region  WHERE ID='7'";

?>
<main class="title-region">
    <h1>Hotel Villefort</h1>
</main>
<main class="title-p">
    <p>(Lozère)</p>
</main>
<section class="king_card">
    <div class="card">
        <img src="../Image/chambre-parentale-couleurs-et-deco-img_f2919f850e836ba8_14-2403-1-78ef3ac.jpg" alt="Avatar" style="width:100%">
        <div class="image-galerie">
            <div class="test">
                <h4><b>Chambre doubles Beluga</b></h4>
                <p>Voici une de nos chambres d'hôtel spacieuses et lumineuses, avec des équipements modernes pour assurer un séjour confortable.<br>
                    Vous pourrez vous détendre sur un lit moelleux. Nous proposons également différentes animations qui vous conviendront certainement.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="../Image/gvalc-penthouse-suite-6918-hor-clsc.jpg" alt="Avatar" style="width:100%">
        <div class="image-galerie">
            <div class="test">
                <h4><b>Chambre doubles du Lion d'Or</b></h4>
                <p>La Chambre Lion d'Or est un véritable joyau de notre hôtel. <br>
                    Conçue pour offrir un séjour de luxe et de confort, elle est décorée dans des tons chauds et élégants qui rappellent la noblesse.
                    La chambre est spacieuse et lumineuse, elle est équipée d'un lit king-size confortable avec une literie haut de gamme.</p>
            </div>
        </div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Créer Votre Réservation</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="../Modele/user_res/add.php">
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
    </div>