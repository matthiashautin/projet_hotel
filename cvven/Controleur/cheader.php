<?php
require_once '../Controleur/conn_db.php';
session_start();
$database = new Connection();
$db = $database->open();

/* Affiche le nom de l'utilisateur sans être connecté. Sa affichera donc Bonjour, Erreur Erreur */
$nom = isset($_SESSION['Nom']) ? $_SESSION['Nom'] : 'Erreur';
$prenom = isset($_SESSION['Prenom']) ? $_SESSION['Prenom'] : 'Erreur';
$id = isset($_SESSION['ID']) ? $_SESSION['ID'] : 'Erreur';

include '../Vue/common/header.php';

?>