<?php
include "../Controleur/connectuser.php";

if ((isset($_GET['region']) && $_GET['region'] == "LaRochelle")) { ?>
    <main class="title-region">
        <h1>Hotel La Rochelle</h1>
    </main>
    <main class="title-p">
        <p>(Charente-Maritime)</p>
    </main>



    <section class="king_card">
        <div class="card">
            <img src="../Image/chambre-parentale-couleurs-et-deco-img_f2919f850e836ba8_14-2403-1-78ef3ac.jpg" alt="Avatar" style="width:100%">
        <div class="image-galerie">
            <div class="test">
                <h4><b>Chambre doubles Beluga</b></h4>
                <p>Voici une de nos chambres d'hôtel spacieuses et lumineuses, avec des équipements modernes pour assurer un séjour confortable.<br>
                    Vous pourrez vous détendre sur un lit moelleux. Nous proposons également différentes animations qui vous conviendront certainement.</p>
            </div>
        </div>
        </div>
        <div class="card">
            <img src="../Image/gvalc-penthouse-suite-6918-hor-clsc.jpg" alt="Avatar" style="width:100%">
        <div class="image-galerie">
            <div class="test">
                <h4><b>Chambre doubles du Lion d'Or</b></h4>
                <p>La Chambre Lion d'Or est un véritable joyau de notre hôtel. <br>
                    Conçue pour offrir un séjour de luxe et de confort, elle est décorée dans des tons chauds et élégants qui rappellent la noblesse.
                    La chambre est spacieuse et lumineuse, elle est équipée d'un lit king-size confortable avec une literie haut de gamme.</p>
            </div>
        </div>
        </div>
        <div class="add_reservation_user">
        <?php include('../Vue/reservation_user/add_reservation_rochelle.php'); ?>
        </div>
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