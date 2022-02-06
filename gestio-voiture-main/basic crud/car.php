<?php 
 include 'bdd.php';


if(isset($_POST['modify'])){
    if(
        !empty($_POST['id']) && 
        !empty($_POST['band']) && !empty($_POST['modele']) &&
        !empty($_POST['ni']) && !empty($_POST['year'])  &&
        !empty($_POST['color'])

    ){
        // Preparation de la requête de mise à jour
        $updateCar = $bdd->prepare("UPDATE cars SET
         marque =:marque, modele =:modele,immatriculation =:immatriculation,annee =:annee,couleur =:couleur WHERE id =:id ");
    
        $updateCar->execute(Array(
            "id"          =>  htmlspecialchars($_POST['id']),
            "marque"          => htmlspecialchars($_POST['band']),
            "modele"         => htmlspecialchars($_POST['modele']),
            "immatriculation" => htmlspecialchars($_POST['ni']),
            "annee"           => htmlspecialchars($_POST['year']),
            "couleur"           => htmlspecialchars($_POST['color']),
            
        ));
       
        header("location:index.php");

    }else{
        echo 'Tous les champs de sont pas remplis ';
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Modifier un véhicule</title>
    
</head>
<body>
    <div class="container-flex">
        <div class="row">
            <h1 class="text-center">Modifier un véhicule</h1>
        </div>
        <div class="row">
            <div class=" offset-4 col-6">
                <form action="car.php" method="post">
                    <?php
                        // verification qu'un id à bien été passé en get (dans l'url)
                    if(!empty($_GET["id"])){
                        // traitement des données 
                            $id = htmlspecialchars($_GET["id"]);
                            $req  = $bdd->prepare('select * FROM cars WHERE id = :id');
                            //exécution de la requête:
                        $req->execute(['id'=>$id]);
                        while ($car = $req->fetch())
                            { 
                            
                            
                            
                        
                        
                    ?>
                    <div>
                        <input value="<?php echo $car['id']; ?>" id="id" class="" name='id' type="hidden">
                    </div>
                    <div>
                        <label class="form-label" for="band">Marque</label>
                        <input value="<?php echo $car['marque']; ?>" id="band" class="" name='band' type="text">
                    </div>
                    <br>
                    <div>
                        <label class="" for="modele">Modele</label>
                        <input value="<?php echo $car['modele']; ?>" id="modele" class="" name='modele' type="text">
                    </div>
                    <br>
                    <div>
                        <label class="" for="ni">immatriculation</label>
                        <input value="<?php echo $car['immatriculation']; ?>" id="ni" class="" name='ni' type="text">
                    </div>
                    <br>
                    <div>
                        <label class="form-label" for="year">Année</label>
                        <input value="<?php echo $car['annee'];?>" id="year" class="" name='year' type="text">
                    </div>
                    <br>
                    <div>
                        <label class="form-label" for="color">couleur</label>
                        <input value="<?php echo $car['couleur'];?>" id="color" class="form-control" name='color' type="text">
                    </div>
                    <br>
                    <?php
                        } 
                           
                    }else {
                        echo 'aucune recette trouvée';
                    } 
                        ?>
                    <div>
                        <input name="modify" value="modifier" type="submit" class="">
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