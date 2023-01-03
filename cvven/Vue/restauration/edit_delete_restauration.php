<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['ID']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Edit Restauration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
        <div class="modal-body">
        <form method="POST" action="../Modele/admin_resto/edit.php?ID=<?php echo $row['ID']; ?>">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Pension_Complete</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Pension_Complete" value="<?php echo $row['Pension_Complete']; ?>">
            </div>
        </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Demi_Pension</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Demi_Pension" value="<?php echo $row['Demi_Pension']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Repas_Bebe</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Repas_Bebe" value="<?php echo $row['Repas_Bebe']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Pique_nique</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Pique_nique" value="<?php echo $row['Pique_nique']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Reunions</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Reunions" value="<?php echo $row['Reunions']; ?>">
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
<div class="modal fade" id="delete_<?php echo $row['ID']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Supprimer Restauration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <div class="modal-body">
        <p class="text-center">Êtes-vous sur de vouloir supprimer cette Restauration?</p>
        <h2 class="text-center"><?php echo $row['ID']; ?></h2>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <a href="../Modele/admin_resto/delete.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger"> Oui</a>
        </div>
    </div>
  </div>
</div>