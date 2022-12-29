<link rel="stylesheet" href="../css/menu.css">
<?php
     $url = $_SERVER['REQUEST_URI'];    
    //var_dump($url);
    $reservation="";
    $hebergement="";
    $restauration="";
    $animation="";
    $photo="";
    $logout="logout";

    if(strpos($url,"admin_res.php")>0){
        $reservation="active";
    }
    if(strpos($url,"admin_heb.php")>0){
       $hebergement="active";
    }
    if(strpos($url,"admin_resto.php")>0){
       $restauration="active";
    }
    if(strpos($url,"admin_anim.php")>0){
        $animation="active";
     }
     if(strpos($url,"admin_photo.php")>0){
        $photo="active";
     }
?>

<div class="container">
    <div class="navigation">
        <div class="top">
            <div class="logo">
                <img src="../Image/hotel.png">
            </div>
                <h2><span>admin</span><h2>
            </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="admin_res.php" class='<?=$reservation?>'>
                        <h3 class="reservation <?=$reservation?>">Reservation</h3>
                    </a>
                </li>
                <li>
                    <a href="admin_heb.php" class='<?=$hebergement?>'>
                        <h3 class="annonce <?=$hebergement?>">Hebergement</h3>
                    </a>
                </li>
                <li>
                    <a href="admin_resto.php" class='<?=$restauration?>'>
                        <h3 class="piece <?=$restauration?>">Restauration</h3>
                    </a>
                </li>
                <li>
                    <a href="admin_anim.php" class='<?=$animation?>'>
                        <h3 class="services <?=$animation?>">Animation</h3>
                    </a>
                </li>
                <li>
                    <a href="admin_photo.php" class='<?=$photo?>'>
                        <h3 class="photo <?=$photo?>">Photo</h3>
                    </a>
                </li>
                <li>
                    <a href="../Controleur/clogout.php" class='<?=$logout?>'>
                        <h3>Logout</h3>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>