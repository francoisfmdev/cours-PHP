<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>GET</title>
</head>
<body>
    <h1>Envoie de données en get</h1>

    <form action="index.php" method="GET">
        <div>
            <label  for="firstname-input">prenom:</label>
            <input   type="text" name="firstname" id="firstname-input">
        </div>
        <div>
        <label  for="lastname-input">nom:</label>
            <input  type="text" name="lastname" id="lastname-input">
        </div>
        <input type="submit" name="sub" value="envoyer">
    </form>
    <?php
    if(isset($_GET['sub'])){
      $firstname =  htmlspecialchars($_GET['firstname']);
      $lastname =  htmlspecialchars($_GET['lastname']);
      $completeName = $firstname." ".$lastname;
      echo $completeName; 
    }
    ?>
</body>
</html>