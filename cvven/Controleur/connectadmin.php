<?php
/* Ouvre une nouvelle session de l'utilisateur et une nouvelle connection à la database */
session_start();

/* Vérification de session pour la partie adm */
$admin_id = $_SESSION['admin_id'];

    if(!isset($admin_id)){
        header('location:../Vue/login.php');
    }
?>l