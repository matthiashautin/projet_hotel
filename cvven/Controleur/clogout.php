<?php
require_once "../Controleur/conn_db.php";
session_start();
session_unset();
session_destroy();
header('location:../Vue/login.php');
?>