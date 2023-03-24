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
                    <h2 class="text-center"><p>Logement:</p> <?php echo htmlspecialchars($row['Logements']); ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="../Modele/user_res/delete.php?ID=<?php echo htmlspecialchars($row['Reservation_ID']); ?>" class="btn btn-danger"> Oui</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirme -->
<div class="modal fade" id="confirme_<?php echo htmlspecialchars($row['Reservation_ID']); ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Confirmation de Reservation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">Êtes-vous sur de vouloir confirmer la reservation suivante ?</p>
                    <h2 class="text-center"><p>Logement:</p> <?php echo htmlspecialchars($row['Logements']); ?></h2>
                    <h2 class="text-center"><p>Restauration:</p> <?php echo htmlspecialchars($row['Type_Resto']); ?></h2>
                    <h2 class="text-center"><p>Animation:</p> <?php echo htmlspecialchars($row['Nom_Anim']); ?></h2>
                    <h2 class="text-center"><p>Region:</p> <?php echo htmlspecialchars($row['Nom_Region']); ?></h2>
                    <h2 class="text-center"><p>Menage:</p> <?php echo htmlspecialchars($row['Menage']); ?></h2>
                    <h2 class="text-center"><p>DateDebut:</p> <?php echo htmlspecialchars($row['DateDebut']); ?></h2>
                    <h2 class="text-center"><p>DateFin:</p> <?php echo htmlspecialchars($row['DateFin']); ?></h2>
                    <h2 class="text-center"><p>Prix:</p> <?php echo htmlspecialchars($row['prix']); ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <form method="post" action="../Modele/user_res/confirme.php?ID=<?php echo htmlspecialchars($row['Reservation_ID']); ?>">
                    <input type="submit" name="envoyer" value="Payer" class="btn btn-danger">
                </form>
            </div>
            <?php
                $to = "greghautin@gmail.com";
                $subject = "TEST Mail";
                $message = "Salut, ca fonctionne ! ";
                $headers = "Content-Type: text/plain; charset=etf-8\r\n";
                $headers .= "From: matthiashautin@gmail.com\r\n";

                if(isset($_POST['envoyer'])) {
                    if (mail($to, $subject, $message, $headers)) {
                        echo 'Email sent successfully!';
                    } else {
                        echo 'An error occurred while sending the email.';
                    }
                }
            ?>
        </div>
    </div>
</div>