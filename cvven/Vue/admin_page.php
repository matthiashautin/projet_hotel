<?php
    require_once "../Controleur/conn_db.php";
    include "../Controleur/connectadmin.php";
?>
<?php>
if((isset($_GET['action']) && $_GET['action']=="create")){
        $isErr=false;
        $action="c";
        
        $nomanim = $vacances_scol = $hors_vacances_scol ="";
        if((isset($_POST['Valider']))){
//var_dump($_POST);
            if (empty($_POST["nomanim"])){
                $nnomanimE = "*";
                $isErr=true;
            }
            else{
                $nomanim = test_input($_POST["nomanim"]);
            }
        
            if (empty($_POST["Vacances_Scolaire"])){
                $vacances_scolE = "*";
                $isErr=true;
            }
            else{
                $vacances_scol = test_input($_POST["Vacances_Scolaire"]);
            }
        
            if (empty($_POST["Hors_Vacances_Scolaire"])){
                $hors_vacances_scolE = "*";
                $isErr=true;
            }
            else{
                $hors_vacances_scol = test_input($_POST["Hors_Vacances_Scolaire"]);
            }
    
        
            $d = new DateTime();
            $date = $d->format('Y-m-d');
            $pdo=null;

        require_once "../Controleur/conn_db.php";    
            try{
                $sql = "INSERT INTO Animation (ID, nomanim, Vacances_Scolaire, Hors_Vacances_Scolaire ) VALUES
                (:ID, :nomanim, :Vacances_Scolaire, :Hors_Vacances_Scolaire)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':ID', $id);
                $stmt->bindParam(':nomanim', $nomanim);
                $stmt->bindParam(':Vacances_Scolaire', $vacances_scol);
                $stmt->bindParam(':Hors_Vacances_Scolaire', $hors_vacances_scol);

                $stmt->execute();
                echo "L'animation à bien été Créé ✅";
            } catch(PDOException $e){
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }
        }
    }
//echo($message);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
</head>
<body>
    <section id= "main">
    <?php
     if (isset($message)) {
        echo $message;
    }
    ?>
    <h1>Table Animation</h1>
        <table class="tableau-style">
        <a href="https://hautin.alwaysdata.net/Airbnb/newclient.php" class="NouveauClient">🆕 New Animation 🆕</a>
        <thead>
            <tr>
                <th>Id</th>
                <th>nomanim</th>
                <th>vacances_scol</th>
                <th>hors_vacances_scol</th>
                <th>Action</th>
            </tr>   
        </thead>
        <tbody>
            <?php
            $result= $db->query('SELECT * FROM Animation');
            $rows=$result->fetchAll();
var_dump($rows);
            foreach ( $rows as $row){
            echo "<tr>
                    <td>" .$row["ID"]. "</td>
                    <td>" .$row["nomanim"]. "</td>
                    <td>" .$row["Vacances_Scolaire"]. "</td>
                    <td>" .$row["Hors_Vacances_Scolaire"]. "</td>
                    <td><a href='PageClient.php?id=".$row["ID"]."&action=delete'>Delete 🚫</a> <a href='updateclient.php?id=".$row["ID"]."&action=update'>Update 🔄</ion-icon></a></td>
                </tr>";
            }

?>
</tbody>
</body>
</html>
