<?php
    include_once('../Controleur/conn_db.php');  

    $database = new Connection();
    $db = $database->open();
    try{    
        $sql = 'SELECT * FROM Animation';
        foreach ($db->query($sql) as $row) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars($row['ID']); ?></td>
                <td><?php echo htmlspecialchars($row['Nom_Anim']); ?></td>
                <td><?php echo htmlspecialchars($row['Vacances_Scolaire']); ?></td>
                <td><?php echo htmlspecialchars($row['Hors_Vacances_Scolaire']); ?></td>
                <td class="td-edit-delete">
                    <a href="#edit_<?php echo htmlspecialchars($row['ID']); ?>" class="btn-edit" data-bs-toggle="modal"> Modifier</a>
                    <a href="#delete_<?php echo htmlspecialchars($row['ID']); ?>" class="btn-delete" data-bs-toggle="modal"> Supprimer</a>
                </td>
                <?php include('../Vue/animation/edit_delete_animation.php'); ?>
            </tr>
        <?php
        }
    }
    catch(PDOException $e){
        echo 'Il y a un problème de connexion :' . $e->getMessage();
    }
        //close connection
    $database->close();
?>