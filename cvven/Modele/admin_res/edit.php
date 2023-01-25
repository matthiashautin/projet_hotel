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
        $Logements = $_POST['Logements'];
        $Nom = $_POST['Nom'];
        $Type_Resto = $_POST['Type_Resto'];
        $Nom_Anim = $_POST['Nom_Anim'];
        $Nom_Region = $_POST['Nom_Region'];
        $Menage = $_POST['Menage'];
        $DateDebut = $_POST['DateDebut'];
        $DateFin = $_POST['DateFin'];

        //preparer la sql injection pour la table animation
        $sql = "UPDATE Reservation
                SET Hebergement_ID = (SELECT ID FROM Hebergement WHERE Logements = '$Logements'),
                    Client_ID = (SELECT ID FROM Client WHERE Nom = '$Nom'),
                    Restauration_ID = (SELECT ID FROM Restauration WHERE Type_Resto = '$Type_Resto'),
                    Animation_ID = (SELECT ID FROM Animation WHERE Nom_Anim =  '$Nom_Anim'),
                    Region_ID = (SELECT ID FROM Region WHERE Nom_Region = '$Nom_Region'),
                    Menage = '$Menage',
                    DateDebut = '$DateDebut',
                    DateFin = '$DateFin'
                WHERE Reservation_ID = '$id'";

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
