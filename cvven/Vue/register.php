<?php
include "../Controleur/cregister.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/components.css">
</head>
<body>
    <h2 class="message">
        <span>
            <?php
                if (isset($message)) {
                    echo $message;
                }
            ?>
        </span>
    </h2>
    <h2 class="message1">
        <span>
            <?php
                if (isset($message1)) {
                    echo $message1;
                }
            ?>
        </span>
    </h2>
    <section class="image" >
        <img src="../Image/hotel.png" alt="" >
    </section>

<section class="form-container">

   <form action="" enctype="multipart/form-data" method="POST">
      <h3>S'inscrire</h3>
      <input type="text" name="Nom" class="box" placeholder="nom" required>
      <input type="text" name="Prenom" class="box" placeholder="prenom" required>
      <input type="number" name="telephone" class="box" placeholder="telephone" required>
      <input type="email" name="mail" class="box" placeholder="mail" required>
      <input type="password" name="password" class="box" placeholder="mot de passe " required>
      <input type="password" name="cpassword" class="box" placeholder="confirmer mot de passe" required>
      <input type="submit" value="Envoyer" class="btn" name="Envoyer">
      <p>Vous avez déjà un compte? <a href="login.php">Connectez-vous</a></p> 
   </form>

</section>

</body>
</html>