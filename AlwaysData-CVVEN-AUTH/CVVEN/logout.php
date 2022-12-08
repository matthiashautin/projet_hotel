<?php

session_start();
unset($_SESSION['mail']);
header("location:session.php");
