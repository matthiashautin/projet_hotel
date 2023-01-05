<?php
session_start();
$user_id = $_SESSION['user_id'];

   /* Ici on dit que si le user n'est pas définie, on nous redirige vers la page login.php */
   if(!isset($user_id)){
      header('location:../Vue/login.php');
   }
?>