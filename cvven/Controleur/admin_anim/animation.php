<?php
    include_once('../Controleur/conn_db.php');  

    $database = new Connection();
    $db = $database->open();
    try{    
        $sql = 'SELECT * FROM Animation';
        foreach ($db->query($sql) as $row) {
        ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['nomanim']; ?></td>
                <td><?php echo $row['Vacances_Scolaire']; ?></td>
                <td><?php echo $row['Hors_Vacances_Scolaire']; ?></td>
                <td>
                    <a href="#edit_<?php echo $row['ID']; ?>" class="btn-edit" data-bs-toggle="modal"> Edit</a>
                    <a href="#delete_<?php echo $row['ID']; ?>" class="btn-delete" data-bs-toggle="modal"> Delete</a>
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