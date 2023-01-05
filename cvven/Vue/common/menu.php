<link rel="stylesheet" href="../css/menu.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<?php
     $url = $_SERVER['REQUEST_URI'];    
    //var_dump($url);
    $reservation="";
    $hebergement="";
    $restauration="";
    $animation="";
    $region="";
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
     if(strpos($url,"admin_region.php")>0){
        $region="active";
     }
?>

<header id="sidebar">
    <div class="hamburger" onclick="myFunction()">
        <div class="top"></div>
        <div class="mid"></div>
        <div class="bottom"></div>
    </div>
    <div class="content">
        <div class="top">
            <div class="logo">
                <img src="../Image/hotel.png">
            </div>
            <h2><span>admin</span><h2>
        </div>
            <div class="sidebar1">
            <ul1>
                <li1>
                    <a href="admin_res.php" class='<?=$reservation?>'>
                        <h4 class="reservation <?=$reservation?>">Reservation</h4>
                    </a>
                </li1>
                <li1>
                    <a href="admin_heb.php" class='<?=$hebergement?>'>
                        <h4 class="annonce <?=$hebergement?>">Hebergement</h4>
                    </a>
                </li1>
                <li1>
                    <a href="admin_resto.php" class='<?=$restauration?>'>
                        <h4 class="piece <?=$restauration?>">Restauration</h4>
                    </a>
                </li1>
                <li1>
                    <a href="admin_anim.php" class='<?=$animation?>'>
                        <h4 class="services <?=$animation?>">Animation</h4>
                    </a>
                </li1>
                <li1>
                    <a href="admin_region.php" class='<?=$region?>'>
                        <h4 class="photo <?=$region?>">Region</h4>
                    </a>
                </li1>
                <li1>
                    <a href="../Controleur/clogout_admin.php" class='<?=$logout?>'>
                        <h4>Logout</h4>
                    </a>
                </li1>   
            </ul1>
        </div>
    </div>
    <script>
        function myFunction() {
        document.getElementById('sidebar').classList.toggle("open-sidebar");
        }
    </script>
</header>
