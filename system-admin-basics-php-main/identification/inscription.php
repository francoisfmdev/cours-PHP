<?php

include "bdd.php";
if(isset($_POST["sub"])){
    if(!empty($_POST["mail"]) AND !empty($_POST["passw"])){
        // recupérer la data
        $mail = htmlspecialchars($_POST['mail']);
        $passw = htmlspecialchars($_POST['passw']);
        
        $passw =  hash('sha256',$passw);
        
        // BDD
        $insertUser = $bdd->prepare('INSERT INTO users(mail,passw)VALUES(? , ?)');
        $insertUser->execute(array($mail,$passw));
       
    }else{
        echo "veuillez complétez tous les champs !";
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
    <h1>inscription</h1>
    <form method="POST",action=''>
        <div>
            <label>Votre mail :</label>
            <input name='mail' type="mail">
        </div>
        <div>
            <label>votre mot de passe</label>
            <input name="passw" type="password">
        </div>
        <input type='submit' name="sub">
    </form>
</body>
</html>