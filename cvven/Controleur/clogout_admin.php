<?php
/* Déconnexion à la database et déstruction de session du côté adm */
session_start();
session_unset();
session_destroy();
header("location:../Vue/login.php");
?>