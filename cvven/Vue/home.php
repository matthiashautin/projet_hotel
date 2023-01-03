<?php
    require_once "../Controleur/conn_db.php";
    include "../Controleur/connectuser.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <div class="title-page">
        <h1>Bonjour et bienvenue sur Cassidy Hotel</h1>
    </div>
    <section>
        <div class="Rochelle">
            <div class="title-image">
                <h3>La Rochelle (Charente-Maritime)</h3>
                <img src="../Image/Hotel La Rochelle (Charente-Maritime).jpg" alt="LaRochelle">
                <a href="*">Réserver</a>
            </div>
            
        </div>
        <div class="Rousses">
            <div class="title-image">
                <h3>Les Rousses (Jura)</h3>
                <img src="../Image/Hotel Les Rousses (Jura).jpg" alt="LesRousses">
                <a href="*">Réserver</a>
            </div>
        </div>
        <div class="Saint-Antheme">
            <div class="title-image">
                <h3>Saint-Anthème (Puy-de-Dôme)</h3>
                <img src="../Image/Hotel Saint-Anthème (Puy-de-Dôme).jpg" alt="SaintAntheme">
                <a href="*">Réserver</a>
            </div>
        </div>
        <div class="Villefort">
            <div class="title-image">
                <h3>Villefort (Lozère)</h3>
                <img src="../Image/Hotel Villefort (Lozère).jpg" alt="Villefort">
                <a href="*">Réserver</a>
            </div>
        </div>
    </section>
</body>
</html>
</html>



<section class="projets" id="projets">

   <h1 class="heading" data-aos="fade-up"> <span>Projets / tps</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <div class="content">
            <div class="image">
                  <a href="https://hautin.alwaysdata.net/Airbnb/PageMain.php" target="_blank"> <img src="images/airbnb-logo.jpg" alt=""></a>
            </div>
            <div class="text">cliquer pour voir plus</div>
         </div>
         <h3>Airbnb</h3>
         <span>( 2021 )</span>
         <div class="code">
            <a href="https://github.com/matthiashautin/Airbnb/tree/master" target="_blank"><h2>Code Source</h2></a>
         </div>
      </div>



<!-- Code css


.projets .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:1.5rem;
   align-items: flex-start;
}

.projets .box-container .box img{
   height: 30rem;
   width: 100%;
   object-fit: cover;
   transition-duration: 0.4s;
}

.projets .box-container .image {
   position: absolute;
   z-index: 500;
}

.projets .box-container .content {
   position: relative;
}

.projets .box-container .content .text {
   opacity: 0;
   text-align: center;
   font-size: 2rem;
   height: 30rem;
   width: 100%;
   display: flex;
   align-items: center;
   justify-content: center;
   text-transform: uppercase;
   transition-duration: 0.4s;
}

.projets .box-container .content:hover .image{
   opacity: 0.1;
}

.projets .box-container .content:hover .text {
   opacity: 1;
   text-transform: uppercase;
   font-size: 3rem;
   font-weight: 500;
}  

.projets .box-container .box h3{
   margin:0.5rem 0;
   font-size: 2rem;
   font-weight: normal;
}

.projets .box-container .box h2{
   margin:0.5rem 0;
   font-size: 1.7rem;
   border: 3px solid black;
   background-color: white;
   padding: 0.5rem;
}

.projets .box-container .code:hover h2 {
   background-color: black;
   color: white;
}

.projets .box-container .box span{
   font-size: 1.5rem;
}
 
!-->