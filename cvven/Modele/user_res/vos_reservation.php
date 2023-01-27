<?php
    include_once('../Controleur/conn_db.php');
    $database = new Connection();
    $db = $database->open();

    $id = $_SESSION['user_id'];
    $reservation = $db->prepare("SELECT * FROM `Reservation` WHERE Client_ID='$id'");
    $reservation->execute();
    $client_ID = $reservation->fetch(PDO::FETCH_ASSOC);
    error_reporting(E_ERROR | E_PARSE);

    //var_dump($client_ID);

    if ($client_ID['Client_ID'] == $_SESSION['user_id']) {
        try {
            //$sql = "SELECT * FROM `Reservation`,`Client` WHERE ID='$id'";
            $sql = "SELECT *,Hebergement.Logements, Restauration.Type_Resto, Animation.Nom_Anim, Region.Nom_Region
            FROM Reservation AS Res
            INNER JOIN Hebergement ON Hebergement.ID = Res.Hebergement_ID
            INNER JOIN Restauration ON Restauration.ID = Res.Restauration_ID
            INNER JOIN Animation ON Animation.ID = Res.Animation_ID
            INNER JOIN Region ON Region.ID = Res.Region_ID
            INNER JOIN Client ON Client.ID = Res.Client_ID WHERE Client_ID='$id'";

            foreach ($db->query($sql) as $row) {
    ?>        
            <tr>
                <td><?php echo htmlspecialchars($row['Logements']); ?></td>
                <td><?php echo htmlspecialchars($row['Type_Resto']); ?></td>
                <td><?php echo htmlspecialchars($row['Nom_Anim']); ?></td>
                <td><?php echo htmlspecialchars($row['Nom_Region']); ?></td>
                <td type="checkbox"><?php echo htmlspecialchars($row['Menage']); ?></td>
                <td><?php echo htmlspecialchars($row['DateDebut']); ?></td>
                <td><?php echo htmlspecialchars($row['DateFin']); ?></td>
                <td class="td-edit-delete">
                    <a href="#delete_<?php echo htmlspecialchars($row['Reservation_ID']); ?>" class="btn-delete" data-bs-toggle="modal">Supprimer</a> 
                </td>
                <?php include('../Vue/reservation_user/edit_delete_reservation.php'); ?>
            </tr>

        
        <?php
            }
        } catch (PDOException $e) {
            echo 'Il y a un problème de connexion :' . $e->getMessage();
        }
        //close connection
        $database->close();
    } else { ?>
        <!-- lorsque qu'il n'y a pas de réservation -->
        <div class="message">
            <p>Vous n'avez pas de réservation</p>
        </div>
<?php
    }
?>