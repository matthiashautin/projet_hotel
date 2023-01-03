<?php

require_once "../Controleur/conn_db.php";

$database = new Connection();
$db = $database->open();

if (isset($_POST['Envoyer'])) {
    try {
        $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $nom = $_POST['Nom'];
        $prenom = $_POST['Prenom'];
        $telephone = $_POST['telephone'];
        $mail = $_POST['mail'];
        $password=md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        
        $vtelephone = $conn->prepare("SELECT * FROM `Client` WHERE telephone = ?");
        $vtelephone->execute([$telephone]);

        $vmail = $conn->prepare("SELECT * FROM `Client` WHERE mail = ?");
        $vmail->execute([$mail]);
     
        if($vtelephone->rowCount() > 0){
            $message = 'Le telephone a déjà était enregistré ! ❌';
         }elseif ($vmail->rowCount() > 0){
            $message = 'Le mail a déjà était enregistré ! ❌';
            }else {
                if($password != $cpassword){
                $message = 'Les 2 mots de passe sont différents ! ❌';
                }else {
                    $sql = ("INSERT INTO `Client`(`Nom`, `Prenom`, `telephone`, `mail`, `password`) VALUES ('$nom','$prenom','$telephone', '$mail','$password')");
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam('Nom', $nom);
                    $stmt->bindParam('Prenom', $prenom);
                    $stmt->bindParam('telephone', $telephone);
                    $stmt->bindParam('mail', $mail);
                    $stmt->bindParam('password', $password);

                    if ($stmt->execute()) {
                        $message1 = 'Nouveau client Enregistré. Merci ! ✅';
                        echo '<script>alert("Enregistré avec succès");</script>';
                    } else {
                        $error = "Erreur: " . $e->getMessage();
                        echo '<script>alert("' . $error . '");</script>';
                    }
                }
            }
        }catch (PDOException $e) {
            echo "Une erreur c'est produite: " + $e->getMessage();
            $message = "Une erreur c'est produite.";
        }           
    }

?>