<?php
include_once('../Controleur/conn_db.php');  

session_start();

if (isset($_POST['Connexion'])) {
        $database = new Connection();
        $db = $database->open();
        
        $pdoStat = $db->prepare('SELECT * FROM Client WHERE mail=:mail AND password=:password');
       
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $password=md5($password);

        $pdoStat->bindValue(':mail', $mail, PDO::PARAM_STR_CHAR);
        $pdoStat->bindValue(':password', $password, PDO::PARAM_STR_CHAR);
        $pdoStat->execute();

        $count = $pdoStat->rowCount();
        $rows = $pdoStat->fetch(PDO::FETCH_ASSOC);

        if($count > 0){
            if($rows['users_type'] == 'admin'){

                session_start();
                $_SESSION['admin_id'] = $rows['ID'];
                $message = 'Connexion réussi admin';
                header('location:../Vue/admin_res.php');
    
            } else if($rows['users_type'] == 'user'){

                session_start();
                $_SESSION['user_id'] = $rows['ID'];
                $message = 'Connexion réussi user';
                header('location:../Vue/home.php');

        } else {
            $message = "Impossible de se connecter vérifier vos identifiant. ❌";
    }
} else{
    $message = 'incorrect email or password!';
}
}


