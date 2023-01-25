<!-- Edit -->
<div class="modal fade" id="edit_<?php echo htmlspecialchars($row['Reservation_ID']); ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Edit Reservation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../Modele/admin_res/edit.php?ID=<?php echo htmlspecialchars($row['Reservation_ID']); ?>">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Logements</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Logements" value="<?php echo htmlspecialchars($row['Logements']); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nom_Client</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Nom" value="<?php echo htmlspecialchars($row['Nom']); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Restauration</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Type_Resto" value="<?php echo htmlspecialchars($row['Type_Resto']); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Animation</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Nom_Anim" value="<?php echo htmlspecialchars($row['Nom_Anim']); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Region</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Nom_Region" value="<?php echo htmlspecialchars($row['Nom_Region']); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Menage</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Menage" value="<?php echo htmlspecialchars($row['Menage']); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Début</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="DateDebut" value="<?php echo htmlspecialchars($row['DateDebut']); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Fin</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="DateFin" value="<?php echo htmlspecialchars($row['DateFin']); ?>">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" name="edit" class="btn btn-primary">Modifier</a>
                    </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo htmlspecialchars($row['Reservation_ID']); ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Supprimer Reservation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">Êtes-vous sur de vouloir supprimer la reservation suivante ?</p>
                    <h2 class="text-center"><p>Reservation_ID:</p> <?php echo htmlspecialchars($row['Reservation_ID']); ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="../Modele/admin_res/delete.php?ID=<?php echo htmlspecialchars($row['Reservation_ID']); ?>" class="btn btn-danger"> Oui</a>
            </div>
        </div>
    </div>
</div>
