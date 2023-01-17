<header>
    <ul class="ul-header">
        <li class="header-logo"><a href="../Vue/home.php"><img src="../Image/hotel.png" alt="logo"></a></li>
        <li class="header-menu"><a href="../Vue/home.php">Menu</a></li>
        <?php
            if (isset($_SESSION['ID'])) {?>
                <li class="header-menu"><a href="reservation.php?id&region=reservation">Vos réservation</a></li>
        <?php } 
        ?>
    </ul>
    <div class="header-right">    
        <h4 class="name-user">
            <div class="title-page">
                <h1>Bienvenue sur nos hotels cassidy</h1>
            </div>
                <p>Bonjour, 
                    <?php
                        if (isset($_SESSION['ID'])) {
                            echo $nom . " " . $prenom;?>
                            <div class=btn-deco-co> 
                                <a class="btn-deco" href='../Controleur/clogout_user.php'>Déconnexion</a>
                            </div>
                    <?php
                        } else {
                            echo "Vous n'êtes pas connecté";?>
                            <div class=btn-deco-co> 
                                <a class="btn-co" href='login.php'>Connectez-vous</a>
                            </div>
                    <?php
                    }
                ?>
            </p>
        </h4>
    </div>
</header>