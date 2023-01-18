<?php
include "../Controleur/connectuser.php";

if ((isset($_GET['region']) && $_GET['region'] == "LaRochelle")) { ?>
    <main class="title-region">
        <h1>Hotel La Rochelle</h1>
    </main>
    <main class="title-p">
        <p>(Charente-Maritime)</p>
    </main>
<?php
} else if ((isset($_GET['region']) && $_GET['region'] == "LesRousses")) { ?>
    <main class="title-region">
        <h1>Hotel Les Rousses</h1>
    </main>
    <main class="title-p">
        <p>(Jura)</p>
    </main>
<?php
} else if ((isset($_GET['region']) && $_GET['region'] == "SaintAnthème")) { ?>
    <main class="title-region">
        <h1>Hotel Saint-Anthème</h1>
    </main>
    <main class="title-p">
        <p>(Puy-de-Dôme)</p>
    </main>
<?php

} else if ((isset($_GET['region']) && $_GET['region'] == "Villefort")) { ?>
    <main class="title-region">
        <h1>Hotel Villefort</h1>
    </main>
    <main class="title-p">
        <p>(Lozère)</p>
    </main>
<?php

} else if ((isset($_GET['region']) && $_GET['region'] == "reservation")) { ?>
    <main class="title-region">
        <h1>Vos réservation</h1>
    </main>
    <?php
    include_once('../Controleur/conn_db.php');
    $database = new Connection();
    $db = $database->open();

    $id = $_SESSION['user_id'];
    $reservation = $db->prepare("SELECT * FROM `Reservation` WHERE Client_ID='$id'");
    $reservation->execute();
    $client_ID = $reservation->fetch(PDO::FETCH_ASSOC);

    //var_dump($client_ID);

    if ($client_ID['Client_ID'] == $_SESSION['user_id']) {
        try {
            //$sql = "SELECT * FROM `Reservation`,`Client` WHERE ID='$id'";
            $sql = "SELECT Hebergement.Logements, Client.Nom, Restauration.Type_Resto, Animation.Nom_Anim, Region.Nom_Region FROM Reservation AS Res
            INNER JOIN Hebergement ON Hebergement.ID = Res.Hebergement_ID
            INNER JOIN Restauration ON Restauration.ID = Res.Restauration_ID
            INNER JOIN Animation ON Animation.ID = Res.Animation_ID
            INNER JOIN Region ON Region.ID = Res.Region_ID
            INNER JOIN Client ON Client.ID = Res.Client_ID WHERE Client_ID='$id'";

            foreach ($db->query($sql) as $row) {
    ?>        
        <thead>
            <th class="top-th">Id_client</th>
            <th class="top-th">Id_Hebergement</th>
            <th class="top-th">Id_restauration</th>
            <th class="top-th">Id_animation</th>
            <th class="top-th">Id_region</th>
            <th class="top-th">datedebut</th>
            <th class="top-th">datefin</th>
            <th class="top-th">Action</th>
        </thead>
            <tr>
                <td class="reservation-id"><?php echo htmlspecialchars($row['Nom']); ?></td>
                <td class="reservation-id"><?php echo htmlspecialchars($row['Logements']); ?></td>
                <td class="reservation-id"><?php echo htmlspecialchars($row['Type_Resto']); ?></td>
                <td class="reservation-id"><?php echo htmlspecialchars($row['Nom_Anim']); ?></td>
                <td class="reservation-id"><?php echo htmlspecialchars($row['Nom_Region']); ?></td>
                <td class="reservation-id"><?php echo htmlspecialchars($row['DateDebut']); ?></td>
                <td class="reservation-id"><?php echo htmlspecialchars($row['DateFin']); ?></td>
                <td class="td-edit-delete">
                    <a href="#delete_<?php echo htmlspecialchars($row['ID']); ?>" class="btn-delete" data-bs-toggle="modal"> Supprimer</a> 
                </td>
            </tr>
        <?php
            }
        } catch (PDOException $e) {
            echo 'Il y a un problème de connexion :' . $e->getMessage();
        }
        //close connection
        $database->close();
    } else { ?>
        <!-- lorsque qu'il n'y a pas de réservation -->
        <div class="message">
            <p>Vous n'avez pas de réservation</p>
        </div>
<?php
    }
} else {
    header('location:./home.php');
}
?>