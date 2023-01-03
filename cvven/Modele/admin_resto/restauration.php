<?php
    include_once('../Controleur/conn_db.php');  

    $database = new Connection();
    $db = $database->open();
    try{    
        $sql = 'SELECT * FROM Restauration';
        foreach ($db->query($sql) as $row) {
        ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Pension_Complete']; ?></td>
                <td><?php echo $row['Demi_Pension']; ?></td>
                <td><?php echo $row['Repas_Bebe']; ?></td>
                <td><?php echo $row['Pique_nique']; ?></td>
                <td><?php echo $row['Reunions']; ?></td>
                <td class="td-edit-delete">
                    <a href="#edit_<?php echo $row['ID']; ?>" class="btn-edit" data-bs-toggle="modal"> Modifier</a>
                    <a href="#delete_<?php echo $row['ID']; ?>" class="btn-delete" data-bs-toggle="modal"> Supprimer</a>
                </td>
                <?php include('../Vue/restauration/edit_delete_restauration.php'); ?>
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