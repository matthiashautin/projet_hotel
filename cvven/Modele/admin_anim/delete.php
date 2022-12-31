<?php
    session_start();
    include('../../Controleur/conn_db.php');

    if(isset($_GET['ID'])){
        //connection
        $database = new Connection();
        $db = $database->open();
        try{
            //preparer la sql injection pour la table animation
            $sql = "DELETE FROM Animation WHERE ID = '".$_GET['ID']."'";
            //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Animation supprimé avec succès' : 'Une erreur est survenue. Impossible de supprimer cette animation';
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
        //close connection
        $database->close();
    }
    else{
    $_SESSION['message'] = 'Selectionnez annimation à supprimer en premier';
    }

    header('location: ../../Vue/admin_anim.php');

?>