<?php
session_start();
include_once('../../Controleur/conn_db.php');

if (isset($_POST['edit'])) {
    //connection
    $database = new Connection();
    $db = $database->open();
    try {
        //création des variables 
        $id = $_GET['ID'];
        $Hebergement_ID = $_POST['Hebergement_ID'];
        $Client_ID = $_POST['Client_ID'];
        $Restauration_ID = $_POST['Restauration_ID'];
        $Animation_ID = $_POST['Animation_ID'];
        $Region_ID = $_POST['Region_ID'];
        $Menage = $_POST['Menage'];
        $DateDebut = $_POST['DateDebut'];
        $DateFin = $_POST['DateFin'];

        //preparer la sql injection pour la table animation
        $sql = "UPDATE Reservation SET Hebergement_ID = '$Hebergement_ID', Client_ID  = '$Client_ID', Restauration_ID  = '$Restauration_ID', Animation_ID = '$Animation_ID', Region_ID = '$Region_ID ', Menage ='$Menage', DateDebut = '$DateDebut' , DateFin = '$DateFin' WHERE Reservation_ID = '$id'";
        //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
        $_SESSION['message'] = ($db->exec($sql)) ? 'Reservation mis à jour avec succès' : 'Une erreur est survenue. Impossible de mettre à jour cette réservation';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }
    //close connection
    $database->close();
} else {
    $_SESSION['message'] = 'Remplissez en premier le formulaire de modification';
}

header('location: ../../Vue/admin_res.php');
