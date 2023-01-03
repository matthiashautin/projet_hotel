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
            $Pension_Complete = $_POST['Pension_Complete'];
            $Demi_Pension = $_POST['Demi_Pension'];
            $Repas_Bebe = $_POST['Repas_Bebe'];
            $Pique_nique = $_POSR['Pique_nique'];
            $Reunions = $_POST['Reunions'];

            //preparer la sql injection pour la table animation
            $sql = "UPDATE Restauration SET Pension_Complete = '$Pension_Complete', Demi_Pension = '$Demi_Pension', Repas_Bebe = '$Repas_Bebe', Pique_nique = '$Pique_nique', Reunions = '$Reunions'  WHERE ID = '$id'";
            //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Restauration mis à jour avec succès' : 'Une erreur est survenue. Impossible de mettre à jour cette restauration';

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

    header('location: ../../Vue/admin_resto.php');
?>