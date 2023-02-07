<?php
    session_start();
    include('../../Controleur/conn_db.php');

    if(isset($_GET['ID'])){
        //connection
        $database = new Connection();
        $db = $database->open();
        try{
            //preparer la sql injection pour la table animation
            $sql = "UPDATE `Reservation` SET `Etat`='Payer' WHERE Reservation_ID = '".$_GET['ID']."'";
            //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Réservation confirmée avec succès' : 'Une erreur est survenue. Impossible de confirmer cette réservation';
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
        //close connection
        $database->close();
    }
    else{
    $_SESSION['message'] = 'Selectionnez réservation à confirmer en premier';
    }

    header('location: ../../Vue/reservation.php?id&region=reservation');

    ?>
