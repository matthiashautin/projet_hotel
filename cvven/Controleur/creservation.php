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
                } else { 
                    header('location:./home.php');
                }
?>