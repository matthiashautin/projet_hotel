<?php
include "../Controleur/connectuser.php";

    if((isset($_GET['region']) && $_GET['region']=="LaRochelle")){ ?>
        <main class="title-region">
            <h1>Hotel La Rochelle</h1>
        </main>  
        <main class="title-p">
            <p>(Charente-Maritime)</p>
        </main>  
    <?php    
        } else if((isset($_GET['region']) && $_GET['region']=="LesRousses")){ ?>
            <main class="title-region">
                <h1>Hotel Les Rousses</h1>
            </main>  
            <main class="title-p">
                <p>(Jura)</p>
            </main>  
        <?php    
            } else if((isset($_GET['region']) && $_GET['region']=="SaintAnthème")){ ?>
                <main class="title-region">
                    <h1>Hotel Saint-Anthème</h1>
                </main>  
                <main class="title-p">
                    <p>(Puy-de-Dôme)</p>
                </main>  
            <?php    

                } else if((isset($_GET['region']) && $_GET['region']=="Villefort")){ ?>
                    <main class="title-region">
                        <h1>Hotel Villefort</h1>
                    </main>  
                    <main class="title-p">
                        <p>(Lozère)</p>
                    </main>  
                <?php    

                    } else if((isset($_GET['region']) && $_GET['region']=="reservation")) { ?>
                        <main class="title-region">
                            <h1>Vos réservation</h1>
                        </main>
                    <?php
                    include_once('../Controleur/conn_db.php');  
                    $database = new Connection();
                    $db = $database->open();
                    $id = $_SESSION['user_id'];
                    $reservation = "SELECT * FROM `Reservation` WHERE Client_ID='$id'";
                    var_dump($reservation);

                    if (!$reservation == null) {
                        try{    
                            $sql = "SELECT * FROM `Reservation` WHERE Client_ID='$id'";
                            foreach ($db->query($sql) as $row) {
                            ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['Hebergement_ID']); ?></td>
                                    <td><?php echo htmlspecialchars($row['Client_ID']); ?></td>
                                    <td><?php echo htmlspecialchars($row['Restauration_ID']); ?></td>
                                    <td><?php echo htmlspecialchars($row['Animation_ID']); ?></td>
                                    <td><?php echo htmlspecialchars($row['Region_ID']); ?></td>
                                    <td><?php echo htmlspecialchars($row['DateDebut']); ?></td>
                                    <td><?php echo htmlspecialchars($row['DateFin']); ?></td>
                                </tr>
                            <?php
                            }
                        }
                        catch(PDOException $e){
                            echo 'Il y a un problème de connexion :' . $e->getMessage();
                        }
                            //close connection
                        $database->close();
                    } else {
                      echo "Vous n'avez pas de réservation";  
                }
                        
                        


                } else { 
                    header('location:./home.php');
                }
?>