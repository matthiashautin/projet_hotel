<?php
    session_start();
    include_once('../../Controleur/conn_db.php');
    
    if(isset($_POST['add'])){
        //connection
        $database = new Connection();
        $db = $database->open();
        try{
            //preparer la sql injection pour la table animation
            $stmt = $db->prepare("INSERT INTO Animation (Nom_Anim, Vacances_Scolaire, Hors_Vacances_Scolaire) VALUES (:Nom_Anim, :Vacances_Scolaire, :Hors_Vacances_Scolaire)");
            //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
            $_SESSION['message'] = ( $stmt->execute(array(':Nom_Anim' => $_POST['Nom_Anim'] , ':Vacances_Scolaire' => $_POST['Vacances_Scolaire'] , ':Hors_Vacances_Scolaire' => $_POST['Hors_Vacances_Scolaire'])) ) ? "Animation ajouté avec succès" : "Une erreur s'est produite. Impossible d'ajouter cette animation";
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
    header('location: ../../Vue/admin_anim.php');
?>