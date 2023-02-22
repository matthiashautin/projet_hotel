<?php
/* Déconnexion à la database et déstruction de session du côté user */
session_start();
session_unset();
session_destroy();
header("location:../Vue/home.php");
?>