<?php
    session_start();   
    include_once('../../Controleur/conn_db.php');

    if(isset($_POST['edit'])){
        //connection
        $database = new Connection();
        $db = $database->open();
        try{
            //création des variables 
            $id = $_GET['ID'];
            $Nom_Anim = $_POST['Nom_Anim'];
            $Vacances_Scolaire = $_POST['Vacances_Scolaire'];
            $Hors_Vacances_Scolaire = $_POST['Hors_Vacances_Scolaire'];

            //preparer la sql injection pour la table animation
            $sql = "UPDATE Animation SET Nom_Anim = '$Nom_Anim', Vacances_Scolaire = '$Vacances_Scolaire', Hors_Vacances_Scolaire = '$Hors_Vacances_Scolaire' WHERE ID = '$id'";
            //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Animation mis à jour avec succès' : 'Une erreur est survenue. Impossible de mettre à jour cette animation';

        }
        catch(PDOException $e){
        $_SESSION['message'] = $e->getMessage();
        }
        //close connection
        $database->close();
    }
    else{
        $_SESSION['message'] = 'Remplissez en premier le formulaire de modification';
    }

    header('location: ../../Vue/admin_anim.php');
?>