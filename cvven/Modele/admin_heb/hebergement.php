<?php
include_once('../Controleur/conn_db.php');

$database = new Connection();
$db = $database->open();
try {
    $sql = 'SELECT * FROM Hebergement';
    foreach ($db->query($sql) as $row) {
?>
        <tr>
            <td><?php echo htmlspecialchars($row['ID']); ?></td>
            <td><?php echo htmlspecialchars($row['Logements']); ?></td>
            <td class="td-edit-delete">
                <a href="#edit_<?php echo htmlspecialchars($row['ID']); ?>" class="btn-edit" data-bs-toggle="modal"> Modifier</a>
                <a href="#delete_<?php echo htmlspecialchars($row['ID']); ?>" class="btn-delete" data-bs-toggle="modal"> Supprimer</a>
            </td>
            <?php include('../Vue/hebergement/edit_delete_hebergement.php'); ?>
        </tr>
<?php
    }
} catch (PDOException $e) {
    echo 'Il y a un problème de connexion :' . $e->getMessage();
}
//close connection
$database->close();
?>