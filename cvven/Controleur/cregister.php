<?php
require_once "../Controleur/conn_db.php";

/* Ouvre une nouvelle session de l'utilisateur et une nouvelle connection à la database */
$database = new Connection();
$db = $database->open();

/* verifie aprés appui sur 'Envoyer' : $nom, $prenom, $telephone, $mail, $password */
if (isset($_POST['Envoyer'])) {
    try {
        // $database = new Connection();
        // $db = $database->open();

/** récupere les données envoyées dans le formulaire **/
        $nom = $_POST['Nom'];
        $prenom = $_POST['Prenom'];
        $telephone = $_POST['telephone'];
        $mail = $_POST['mail'];

/* ajouter password_hash() pour mieux sécuriser les clients */
/* récupere des 2 variables de password : password[$password] et password de confirmation[$cpassword] */
        $password=md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

/* selectionne tout les téléphones de la bdd dans la variables $vtelephone */
        $vtelephone = $db->prepare("SELECT * FROM `Client` WHERE telephone = ?");
        $vtelephone->execute([$telephone]);

/* selectionne tout les mails de la bdd dans la variables $vmail */
        $vmail = $db->prepare("SELECT * FROM `Client` WHERE mail = ?");
        $vmail->execute([$mail]);
     
/* vérifie si le telephone existe déjà dans la bdd grace à la variable $vtelephone*/
/* Si le telephone existe déjà alors affichage du message d'errreur */
        if($vtelephone->rowCount() > 0){
            $message = 'Le telephone a déjà était enregistré ! ❌';
/* vérifie si le mail existe déjà dans la bdd grace à la variable $vmail*/
/* Si le mail existe déjà alors affichage du message d'errreur */
         }elseif ($vmail->rowCount() > 0){
            $message = 'Le mail a déjà était enregistré ! ❌';
/* Si tout est correct alors on vérifie que le password et le password de confirmation soit identiques*/
            }else {
/* Si les 2 passwords sont différents alors message d'erreur */
                if($password != $cpassword){
                $message = 'Les 2 mots de passe sont différents ! ❌';
                }else {
/* sinon création du client et execution de l'INSERT SQL dans la bdd */
                    $sql = ("INSERT INTO `Client`(`Nom`, `Prenom`, `telephone`, `mail`, `password`) VALUES ('$nom','$prenom','$telephone', '$mail','$password')");
                    $stmt = $db->prepare($sql);
                    $stmt->bindParam('Nom', $nom);
                    $stmt->bindParam('Prenom', $prenom);
                    $stmt->bindParam('telephone', $telephone);
                    $stmt->bindParam('mail', $mail);
                    $stmt->bindParam('password', $password);
/* Si la requete à fonctionnée alors message de confirmation de création de client */
                    if ($stmt->execute()) {
                        $message1 = 'Nouveau client Enregistré. Merci ! ✅';
                        echo '<script>alert("Enregistré avec succès");</script>';
/* Sinon affiche des différents message d'erreur soit server soit des conditions non valide */
                    } else {
                        $error = "Erreur: " . $e->getMessage();
                    }
                }
            }
        }catch (PDOException $e) {
            echo "Une erreur c'est produite: " . $e->getMessage();
            $message = "Une erreur c'est produite.";
        }           
    }

?>