<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['ID']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Edit Animation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
        <div class="modal-body">
        <form method="POST" action="../Controleur/admin_anim/edit.php?ID=<?php echo $row['ID']; ?>">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nom_Anim</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nomanim" value="<?php echo $row['nomanim']; ?>">
            </div>
        </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Vacances_Scolaire_Bool</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Vacances_Scolaire" value="<?php echo $row['Vacances_Scolaire']; ?>">
            </div>
        </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Hors_Vacances_Scolaire_Bool</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Hors_Vacances_Scolaire" value="<?php echo $row['Hors_Vacances_Scolaire']; ?>">
                </div>
            </div>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" name="edit" class="btn btn-primary"> Update</a>
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
            <h5 class="modal-title" id="ModalLabel">Supprimer Animation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <div class="modal-body">
        <p class="text-center">Êtes-vous sur de vouloir supprimer cette animation?</p>
        <h2 class="text-center"><?php echo $row['nomanim']; ?></h2>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <a href="../Controleur/admin_anim/delete.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger"> Oui</a>
        </div>
    </div>
  </div>
</div>