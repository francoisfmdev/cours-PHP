

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Liste des véhicules</title>
</head>
<body>
  <div class="container">
      <div class="row">
          <div class="col-12">

          </div>
        </div>
      <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marque</th>
                <th scope="col">modéle</th>
                <th scope="col">année</th>
                <th scope="col">immatriculation</th>
                <th scope="col">couleur</th>
                <th scope="col">action 1</th>
                <th scope="col">action 2</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        include 'bdd.php';
        // utilisation d'une requête pour récuperer les données 
        $req = $bdd->query("SELECT * FROM cars ");
        //  boucle pour afficher les données 
        while ($car = $req->fetch())
        {
        ?>
           <tr>
                <th scope="row"><?php echo $car["id"] ;  ?> </th>
                <td><?php echo $car["marque"] ;  ?></td>
                <td><?php echo $car["modele"] ;  ?></td>
                <td><?php echo $car["annee"] ;  ?></td>
                <td><?php echo $car["immatriculation"] ;  ?></td>
                <td><?php echo $car["couleur"] ;  ?></td>
                <td> <a href="del.php?id=<?php echo $car["id"] ;  ?>">Suprimer</a></td> 
                <td><a href="car.php?id=<?php echo $car["id"] ;  ?>">Modifier</a></td>
            </tr>    
          <?php
          
       }
       $req->closeCursor();
       ?>
  </tbody>
  
    </table>  
    <div>
       <p class="text-center"> 
           <a class="text-center"href="add.php">Ajouter un véhicule</a>
        </p>
    </div>
</div>
</body>
</html>