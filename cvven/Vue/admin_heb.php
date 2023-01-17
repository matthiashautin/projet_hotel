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
            <h1>Hebergement</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-target="#addnew">
                    Nouvelle Hebergement
                </button><!--test-->
                <?php
                    include('../Controleur/messageadmin.php');
                ?>
            <table class="table table-bordered table-striped">
                <thead>Z
                    <th class="top-th">Id</th>
                    <th class="top-th">Chambre_Doubles</th>
                    <th class="top-th">Chambres_3_Lits</th>
                    <th class="top-th">Chambres_4_Lits</th>
                    <th class="top-th">Logement_Handi</th>
                    <th class="top-th">Menage</th>
                    <th class="top-th">Action</th>
                </thead>
                <?php
                    include "../Modele/admin_heb/hebergement.php"; 
                ?>  
            </table>
        </div>
    </div>
</div>
    <?php include('./Hebergement/add_Hebergement.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>