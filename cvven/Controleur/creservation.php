<?php
include "../Controleur/connectuser.php";

if ((isset($_GET['region']) && $_GET['region'] == "LaRochelle")) { ?>
    <main class="title-region">
        <h1>Hotel La Rochelle</h1>
    </main>
    <main class="title-p">
        <p>(Charente-Maritime)</p>
    </main>


    <section class="add_reservation_user">
        <?php include('../Vue/reservation_user/add_reservation_rochelle.php'); ?>
    </section>



    <!-- <img src="../Image/hotel-R.jpeg" alt=""> -->
<?php
} else if ((isset($_GET['region']) && $_GET['region'] == "LesRousses")) { ?>
    <main class="title-region">
        <h1>Hotel Les Rousses</h1>
    </main>
    <main class="title-p">
        <p>(Jura)</p>
    </main>
    <section class="add_reservation_user">
        <?php include('../Vue/reservation_user/add_reservation_rousses.php'); ?>
    </section>

<?php
} else if ((isset($_GET['region']) && $_GET['region'] == "SaintAnthème")) { ?>
    <main class="title-region">
        <h1>Hotel Saint-Anthème</h1>
    </main>
    <main class="title-p">
        <p>(Puy-de-Dôme)</p>
    </main>
    <section class="add_reservation_user">
        <?php include('../Vue/reservation_user/add_reservation_antheme.php'); ?>
    </section>
<?php

} else if ((isset($_GET['region']) && $_GET['region'] == "Villefort")) { ?>
    <main class="title-region">
        <h1>Hotel Villefort</h1>
    </main>
    <main class="title-p">
        <p>(Lozère)</p>
    </main>
    <section class="add_reservation_user">
        <?php include('../Vue/reservation_user/add_reservation_villefort.php'); ?>
    </section>
<?php

} else if ((isset($_GET['region']) && $_GET['region'] == "reservation")) { ?>
    <main class="title-region">
        <h1>Vos réservation</h1>
    </main>
    <div class="container">
        <div class="row">
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