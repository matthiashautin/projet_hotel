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
            $Nom_Region = $_POST['Nom_Region'];

            //preparer la sql injection pour la table animation
            $sql = "UPDATE Region SET Nom_Region = '$Nom_Region'  WHERE ID = '$id'";
            //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Region mis à jour avec succès' : 'Une erreur est survenue. Impossible de mettre à jour cette region';

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

    header('location: ../../Vue/admin_region.php');
?>