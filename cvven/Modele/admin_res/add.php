<?php
session_start();
include_once('../../Controleur/conn_db.php');

if (isset($_POST['add'])) {
    //connection
    $database = new Connection();
    $db = $database->open();
    try {
        //preparer la sql injection pour la table animation
        $stmt = $db->prepare("INSERT INTO Reservation (Reservation_ID, Hebergement_ID, Client_ID, Restauration_ID, Animation_ID, Region_ID, Menage, DateDebut, DateFin) VALUES (:Reservation_ID, :Hebergement_ID, :Client_ID, :Restauration_ID, :Animation_ID, :Region_ID, :Menage, :DateDebut, :DateFin)");
        //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
        $_SESSION['message'] = ($stmt->execute(array(':Reservation_ID' => $_POST['Reservation_ID'], ':Hebergement_ID' => $_POST['Hebergement_ID'], ':Client_ID' => $_POST['Client_ID'], ':Restauration_ID' => $_POST['Restauration_ID'], ':Animation_ID' => $_POST['Animation_ID'], ':Region_ID' => $_POST['Region_ID'], ':Menage' => $_POST['Menage'], ':DateDebut' => $_POST['DateDebut'], ':DateFin' => $_POST['DateFin'],))) ? "Nouvelle Réservation ajouté avec succès" : "Une erreur s'est produite. Impossible d'ajouter cette Réservation";
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }
    //close connection
    $database->close();
} else {
    $_SESSION['message'] = "Remplissez d'abord le formulaire d'ajout";
}
header('location: ../../Vue/admin_res.php');
