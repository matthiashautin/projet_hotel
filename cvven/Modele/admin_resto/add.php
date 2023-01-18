<?php
    session_start();
    include_once('../../Controleur/conn_db.php');
    
    if(isset($_POST['add'])){
        //connection
        $database = new Connection();
        $db = $database->open();
        try{
            //preparer la sql injection pour la table animation
            $stmt = $db->prepare("INSERT INTO Restauration (Type_Resto) VALUES (:Type_Resto)");
            //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
            $_SESSION['message'] = ( $stmt->execute(array(':Type_Resto' => $_POST['Type_Resto'])) ) ? "Restauration ajouté avec succès" : "Une erreur s'est produite. Impossible d'ajouter cette restauration";
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
    header('location: ../../Vue/admin_resto.php');
?>