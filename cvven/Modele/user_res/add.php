<?php
session_start();
include_once('../../Controleur/conn_db.php');

if (isset($_POST['add'])) {
    //connection
    $database = new Connection();
    $db = $database->open();
    try {
        //preparer la sql injection pour la table animation
        $stmt = $db->prepare("INSERT INTO Reservation (Hebergement_ID, Client_ID, Restauration_ID, Animation_ID, Region_ID, Menage, DateDebut, DateFin)
        SELECT (SELECT ID FROM Hebergement WHERE Logements = :Logements),
            (SELECT ID FROM Client WHERE ID = :ID),
            (SELECT ID FROM Restauration WHERE Type_Resto = :Type_Resto),
            (SELECT ID FROM Animation WHERE Nom_Anim = :Nom_Anim),
            (SELECT ID FROM Region WHERE Nom_Region = :Nom_Region),
            :Menage, :DateDebut, :DateFin");

        //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
        $_SESSION['message'] = ($stmt->execute(array(':Logements' => $_POST['Logements'], ':ID' => $_SESSION['ID'], ':Type_Resto' => $_POST['Type_Resto'], ':Nom_Anim' => $_POST['Nom_Anim'], ':Nom_Region' => $_POST['Nom_Region'], ':Menage' => $_POST['Menage'], ':DateDebut' => $_POST['DateDebut'], ':DateFin' => $_POST['DateFin'],))) ? "Nouvelle Réservation ajouté avec succès" : "Une erreur s'est produite. Impossible d'ajouter cette Réservation";
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }
    //close connection
    $database->close();
} else {
    $_SESSION['message'] = "Remplissez d'abord le formulaire d'ajout";
}
header('location: ../../Vue/home.php');