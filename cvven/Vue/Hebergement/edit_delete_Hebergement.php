<!-- Edit -->
<div class="modal fade" id="edit_<?php echo htmlspecialchars($row['ID']); ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Edit Hebergement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../Modele/admin_heb/edit.php?ID=<?php echo htmlspecialchars($row['ID']); ?>">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Logements</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Logements" value="<?php echo htmlspecialchars($row['Logements']); ?>">
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
<div class="modal fade" id="delete_<?php echo htmlspecialchars($row['ID']); ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Supprimer Hebergement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">Êtes-vous sur de vouloir supprimer cette Hebergement?</p>
                <h2 class="text-center"><?php echo htmlspecialchars($row['Logements']); ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="../Modele/admin_heb/delete.php?ID=<?php echo htmlspecialchars($row['ID']); ?>" class="btn btn-danger"> Oui</a>
            </div>
        </div>
    </div>
</div>