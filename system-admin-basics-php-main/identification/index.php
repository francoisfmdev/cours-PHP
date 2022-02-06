<?php
session_start();
var_dump($_SESSION["pseudo"]['mail']);

if(isset($_POST['sub'])){
    session_destroy();
    header('location:connexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>Deconnexion</h1>
        <form method="POST" action="index.php">
            <input type='submit' name="sub" value="se deconnecter">
        </form>
            
        </div>
        
    </form>
</body>
</html>