<?php
    session_start();
    include_once('../../Controleur/conn_db.php');
    
    if(isset($_POST['add'])){
        //connection
        $database = new Connection();
        $db = $database->open();
        try{
            //preparer la sql injection pour la table animation
            $stmt = $db->prepare("INSERT INTO Restauration (Chambre_Doubles, Chambres_3_Lits, Chambres_4_Lits, Logement_Handi, Ménage) VALUES (:Chambre_Doubles, :Chambres_3_Lits, :Chambres_4_Lits, :Logement_Handi, :Ménage)");
            //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
            $_SESSION['message'] = ( $stmt->execute(array(':Chambre_Doubles' => $_POST['Chambre_Doubles'] , ':Chambres_3_Lits' => $_POST['Chambres_3_Lits'] , ':Chambres_4_Lits' => $_POST['Chambres_4_Lits'] , ':Logement_Handi' => $_POST['Logement_Handi'], ':Ménage' => $_POST['Ménage'])) ) ? "Hebergement ajouté avec succès" : "Une erreur s'est produite. Impossible d'ajouter cette hebergement";
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
        //close connection
        $database->close();
    }
    else{
    $_SESSION['message'] = "Remplissez d'abord le formulaire d'ajout";
    }
    header('location: ../../Vue/admin_heb.php');
?>