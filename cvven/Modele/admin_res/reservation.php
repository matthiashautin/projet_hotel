<?php
include_once('../Controleur/conn_db.php');

$database = new Connection();
$db = $database->open();
try {
    $sql = 'SELECT * FROM Reservation';
    foreach ($db->query($sql) as $row) {
?>
        <tr>
            <td><?php echo htmlspecialchars($row['Reservation_ID']); ?></td>
            <td><?php echo htmlspecialchars($row['Hebergement_ID']); ?></td>
            <td><?php echo htmlspecialchars($row['Client_ID']); ?></td>
            <td><?php echo htmlspecialchars($row['Restauration_ID']); ?></td>
            <td><?php echo htmlspecialchars($row['Animation_ID']); ?></td>
            <td><?php echo htmlspecialchars($row['Region_ID']); ?></td>
            <td><?php echo htmlspecialchars($row['Menage']); ?></td>
            <td><?php echo htmlspecialchars($row['DateDebut']); ?></td>
            <td><?php echo htmlspecialchars($row['DateFin']); ?></td>
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