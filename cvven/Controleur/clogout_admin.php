<?php
/* Déconnexion à la database du côté adm et déstruction de session */
session_start();
session_unset();
session_destroy();
header("location:../Vue/login.php");
?>