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
            $Pension_Complete = $_POST['Chambre_Doubles'];
            $Demi_Pension = $_POST['Chambres_3_Lits'];
            $Repas_Bebe = $_POST['Chambres_4_Lits'];
            $Pique_nique = $_POSR['Logement_Handi'];
            $Reunions = $_POST['Ménage'];

            //preparer la sql injection pour la table animation
            $sql = "UPDATE Hebergement SET Chambre_Doubles = '$Chambre_Doubles', Chambres_3_Lits = '$Chambres_3_Lits', Chambres_4_Lits = '$Chambres_4_Lits', Logement_Handi = '$Logement_Handi', Ménage = '$Ménage'  WHERE ID = '$id'";
            //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Hebergement mis à jour avec succès' : 'Une erreur est survenue. Impossible de mettre à jour cette Hebergement';

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

    header('location: ../../Vue/admin_heb.php');
?>