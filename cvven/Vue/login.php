<?php
include "../Controleur/clogin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

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

    <section class="image" >
        <img src="../Image/hotel.png" alt="" >
    </section>

    <section class="form-container">

        <form action="" method="POST">
            <h3>Connectez-vous</h3>
            <input type="mail" name="mail" class="box" placeholder="mail" required>
            <input type="password" name="password" class="box" placeholder="mot de passe" required>
            <input type="submit" value="Connexion" class="btn" name="Connexion">
            <p>Vous n'avez pas de compte? <a href="register.php">S'inscrire</a></p>
        </form>

    </section>

</body>
</html>

