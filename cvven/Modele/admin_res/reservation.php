<?php
include_once('../Controleur/conn_db.php');

$database = new Connection();
$db = $database->open();
try {
    //$sql = 'SELECT * FROM Reservation';
    $sql = "SELECT *,Hebergement.*, Restauration.Type_Resto, Animation.Nom_Anim, Region.Nom_Region
                FROM Reservation AS Res
            INNER JOIN Hebergement ON Hebergement.ID = Res.Hebergement_ID
            INNER JOIN Restauration ON Restauration.ID = Res.Restauration_ID
            INNER JOIN Animation ON Animation.ID = Res.Animation_ID
            INNER JOIN Region ON Region.ID = Res.Region_ID
            INNER JOIN Client ON Client.ID = Res.Client_ID";
    foreach ($db->query($sql) as $row) {
?>
        <tr>
            <td><?php echo htmlspecialchars($row['Reservation_ID']); ?></td>
            <td><?php echo htmlspecialchars($row['Logements']); ?></td>
            <td><?php echo htmlspecialchars($row['Nom']); ?></td>
            <td><?php echo htmlspecialchars($row['Type_Resto']); ?></td>
            <td><?php echo htmlspecialchars($row['Nom_Anim']); ?></td>
            <td><?php echo htmlspecialchars($row['Nom_Region']); ?></td>
            <td><?php echo htmlspecialchars($row['Menage']); ?></td>
            <td><?php echo htmlspecialchars($row['DateDebut']); ?></td>
            <td><?php echo htmlspecialchars($row['DateFin']); ?></td>
            <td><?php echo htmlspecialchars($row['Etat']); ?></td>
            <td class="td-edit-delete">
                <a href="#edit_<?php echo htmlspecialchars($row['Reservation_ID']); ?>" class="btn-edit" data-bs-toggle="modal"> Modifier</a>
                <a href="#delete_<?php echo htmlspecialchars($row['Reservation_ID']); ?>" class="btn-delete" data-bs-toggle="modal"> Supprimer</a>
            </td>
            <?php include('../Vue/reservation/edit_delete_reservation.php'); ?>
        </tr>
<?php
    }
} catch (PDOException $e) {
    echo 'Il y a un problème de connexion :' . $e->getMessage();
}
//close connection
$database->close();
?>