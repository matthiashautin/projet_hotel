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
            (SELECT ID FROM Client WHERE Nom = :Nom),
            (SELECT ID FROM Restauration WHERE Type_Resto = :Type_Resto),
            (SELECT ID FROM Animation WHERE Nom_Anim = :Nom_Anim),
            (SELECT ID FROM Region WHERE Nom_Region = :Nom_Region),
            :Menage, :DateDebut, :DateFin");

        //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
        $_SESSION['message'] = ($stmt->execute(array(':Logements' => $_POST['Logements'], ':Nom' => $_POST['Nom'], ':Type_Resto' => $_POST['Type_Resto'], ':Nom_Anim' => $_POST['Nom_Anim'], ':Nom_Region' => $_POST['Nom_Region'], ':Menage' => $_POST['Menage'], ':DateDebut' => $_POST['DateDebut'], ':DateFin' => $_POST['DateFin'],))) ? "Nouvelle Réservation ajouté avec succès" : "Une erreur s'est produite. Impossible d'ajouter cette Réservation";
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }
    //close connection
    $database->close();
} else {
    $_SESSION['message'] = "Remplissez d'abord le formulaire d'ajout";
}
header('location: ../../Vue/admin_res.php');


// "INSERT INTO Reservation (Reservation_ID, Hebergement_ID, Client_ID, Restauration_ID, Animation_ID, Region_ID, Menage, DateDebut, DateFin)
//         SELECT :Reservation_ID, Hebergement.ID, Client.ID, Restauration.ID, Animation.ID, Region.ID, :Menage, :DateDebut, :DateFin
//         FROM Reservation AS Res
//         JOIN Hebergement ON Hebergement.ID = Res.Hebergement_ID 
//         JOIN Client ON Client.ID = Res.Client_ID
//         JOIN Restauration ON Restauration.ID = Res.Restauration_ID
//         JOIN Animation ON Animation.ID = Res.Animation_ID
//         JOIN Region ON Region.ID = Res.Region_ID
//         WHERE Hebergement.Logements = :Logements AND Client.Nom = :Nom AND Restauration.Type_Resto = :Type_Resto AND Animation.Nom_Anim = :Nom_Anim AND Region.Nom_Region = :Nom_Region "