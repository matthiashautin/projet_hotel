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
        <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Chambre_Doubles</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Chambre_Doubles" value="<?php echo htmlspecialchars($row['Chambre_Doubles']); ?>">
            </div>
        </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Chambres_3_Lits</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Chambres_3_Lits" value="<?php echo htmlspecialchars($row['Chambres_3_Lits']); ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Chambres_4_Lits</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Chambres_4_Lits" value="<?php echo htmlspecialchars($row['Chambres_4_Lits']); ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Logement_Handi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Logement_Handi" value="<?php echo htmlspecialchars($row['Logement_Handi']); ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Ménage</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Ménage" value="<?php echo htmlspecialchars($row['Ménage']); ?>">
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
        <h2 class="text-center"><?php echo htmlspecialchars($row['ID']); ?></h2>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <a href="../Modele/admin_heb/delete.php?ID=<?php echo htmlspecialchars($row['ID']); ?>" class="btn btn-danger"> Oui</a>
        </div>
    </div>
  </div>
</div>