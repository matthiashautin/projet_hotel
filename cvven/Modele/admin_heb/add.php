<?php
session_start();
include_once('../../Controleur/conn_db.php');

if (isset($_POST['add'])) {
    //connection
    $database = new Connection();
    $db = $database->open();
    try {
        //preparer la sql injection pour la table animation
        $stmt = $db->prepare("INSERT INTO Hebergement (Chambre_Doubles, Chambres_3_Lits, Chambres_4_Lits, Logement_Handi, Menage) VALUES (:Chambre_Doubles, :Chambres_3_Lits, :Chambres_4_Lits, :Logement_Handi, :Menage)");
        //excecuter l'injection sql instruction if-else dans l'exécution de notre requête
        $_SESSION['message'] = ($stmt->execute(array(':Chambres_doubles' => $_POST['Chambres_doubles'], ':Chambres_3_Lits' => $_POST['Chambres_3_Lits'], ':Chambres_4_Lits' => $_POST['Chambres_4_Lits'], ':Logement_Handi' => $_POST['Logement_Handi'], ':Menage' => $_POST['Menage']))) ? "Hebergement ajouté avec succès" : "Une erreur s'est produite. Impossible d'ajouter cette hebergement";
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }
    //close connection
    $database->close();
}
