<?php
include "../Controleur/connectuser.php";

if ((isset($_GET['region']) && $_GET['region'] == "LaRochelle")) { ?>
    <div class="add_reservation_user">
        <?php include('../Vue/reservation_user/add_reservation_rochelle.php'); ?>
    </div>

<?php
} else if ((isset($_GET['region']) && $_GET['region'] == "LesRousses")) { ?>
    <div class="add_reservation_user">
        <?php include('../Vue/reservation_user/add_reservation_rousses.php'); ?>
    </div>

<?php
} else if ((isset($_GET['region']) && $_GET['region'] == "SaintAnthème")) { ?>
    <div class="add_reservation_user">
        <?php include('../Vue/reservation_user/add_reservation_antheme.php'); ?>
    </div>

<?php
} else if ((isset($_GET['region']) && $_GET['region'] == "Villefort")) { ?>
    <div class="add_reservation_user">
        <?php include('../Vue/reservation_user/add_reservation_villefort.php'); ?>
    </div>

<?php
} else if ((isset($_GET['region']) && $_GET['region'] == "reservation")) { ?>
    <main class="title-region">
        <h1>Vos réservation</h1>
    </main>
    <div class="container">
        <div class="rows">
            <?php
            include('../Controleur/messageadmin.php');
            ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <th class="top-th">Logements</th>
                    <th class="top-th">Restauration</th>
                    <th class="top-th">Animation</th>
                    <th class="top-th">Region</th>
                    <th class="top-th">Menage</th>
                    <th class="top-th">datedebut</th>
                    <th class="top-th">datefin</th>
                    <th class="top-th">Action</th>
                </thead>
                <?php
                include '../Modele/user_res/vos_reservation.php';
                ?>
            </table>
        </div>
    </div>
<?php

} else {
    header('location:./home.php');
}
?>