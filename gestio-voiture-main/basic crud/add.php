<?php 
 include 'bdd.php';
if(isset($_POST['add'])){
    if(
        !empty($_POST['band']) && !empty($_POST['modele']) &&
        !empty($_POST['ni']) && !empty($_POST['year'])  &&
        !empty($_POST['color'])
    )
    {
        // traitement des données reçu 
        $band = htmlspecialchars($_POST['band']);
        $model = htmlspecialchars($_POST['modele']);
        $ni = htmlspecialchars($_POST['ni']);
        $year = htmlspecialchars($_POST['year']);
        $color = htmlspecialchars($_POST['color']);
        // Préparation de la requête
        $req = $bdd->prepare('INSERT INTO cars(marque,modele,immatriculation,annee,couleur)VALUES(?,?,?,?,?)');
        // éxécution de la requête 
        $req->execute(array($band,$model,$ni,$year,$color));
        // libère la connexion 
        $req->closeCursor();
        // redirection
        header("location:index.php");
    }
    else{
        echo 'Tous les champs de sont pas remplis ';
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Ajouter un véhicule</title>
    
</head>
<body>
    <div class="">
        <div class="row">
            <h1 class="text-center">Ajouter un véhicule</h1>
        </div>
        <div class="row">
            <div class=" offset-4 col-6">
                <form action="add.php" method="post">
                    <div>
                        <label class="" for="band">Marque</label>
                        <input id="band" class="" name='band' type="text">
                    </div>
                    <br>
                    <div>
                        <label class="" for="modele">Modele</label>
                        <input id="modele" class="" name='modele' type="text">
                    </div>
                    <br>
                    <div>
                        <label class="" for="ni">immatriculation</label>
                        <input id="ni" class="" name='ni' type="text">
                    </div>
                    <br>
                    <div>
                        <label class="" for="year">Année</label>
                        <input id="year" class="" name='year' type="text">
                    </div>
                    <br>
                    <div>
                        <label class="" for="color">couleur</label>
                        <input id="color" class="" name='color' type="text">
                    </div>
                    <br>
                    <div>
                        <button name="add" class="btn btn-primary">AJouter
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
           <p class="text-center">
               <a  href='index.php'>Liste des véhicules</a>
            </p> 
        </div>
    </div>
</body>
</html>