<?php
include "../Controleur/connectadmin.php";
include "./common/menu.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Administration</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Animation</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-target="#addnew">
                    Nouvelle Animation
                </button>
                <?php
                    include('../Controleur/messageadmin.php');
                ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <th class="top-th">Id</th>
                    <th class="top-th">Nom_Anim</th>
                    <th class="top-th">vacances_scol</th>
                    <th class="top-th">hors_vacances_scol</th>
                    <th class="top-th">Action</th>
                </thead>
                <?php
                    include "../Modele/admin_anim/animation.php"; 
                ?>
            </table>
        </div>
    </div>
</div>
    <?php include('./animation/add_annimation.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>