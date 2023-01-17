<?php
require_once "../Controleur/conn_db.php";
include '../Controleur/cheader.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user.css">
    <title>Reservation</title>
</head>

<body>

    <table class="table table-bordered table-striped">
        <thead>
            <th class="top-th">ID</th>
            <th class="top-th">Id_hebergement</th>
            <th class="top-th">Id_client</th>
            <th class="top-th">Id_restauration</th>
            <th class="top-th">Id_animation</th>
            <th class="top-th">Id_region</th>
            <th class="top-th">datedebut</th>
            <th class="top-th">datefin</th>
            <th class="top-th">Action</th>
        </thead>
        <?php
        include '../Controleur/creservation.php';
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>