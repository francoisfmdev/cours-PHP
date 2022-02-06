<?php
session_start();
include "bdd.php";

if(isset($_POST['sub'])){

    if(!empty($_POST['mail']) AND !empty($_POST['passw']) ){
          // recupérer la data
          $mail = htmlspecialchars($_POST['mail']);
          $passw = htmlspecialchars($_POST['passw']);
          $passw =  hash('sha256',$passw);
          // BDD 
          $getUserDb = $bdd->prepare('SELECT *FROM users WHERE mail = ? AND passw = ?');
          $getUserDb->execute(array($mail,$passw));
 
          if($getUserDb->rowCount() > 0 ){
            $_SESSION["pseudo"] =  $getUserDb->fetch();
            var_dump($_SESSION["pseudo"]['mail']);
            header("location:index.php");
             
          }else{
              
              echo "les informations demandées ne sont pas correcte";
          }


    }
    else{
        echo "veillez compléter tous les champs ";
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecte toi !</title>
</head>
<body>
    <h1>connection</h1>
    <form method="POST",action=''>
        <div>
            <label> votre mail</label>
            <input name='mail' type="mail">
        </div>
        <br>
        <div>
             <label> votre mot de passe</label>
            <input name="passw" type="password">
        </div>
        <br>
        <div>
            <input type='submit' name="sub">
        </div>
        
    </form>
</body>
</html>