<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoie de fichier</title>
</head>
<body>
    <h1>Envoie de fichier sur le serveur</h1>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="picture" >Votre capture d'écran</label>
            <input type="file" name="picture" />
        </div>
        <div>
            <button type="submit" >Envoyer</button>
        </div>
    
    </form>

    <?php

   
        if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0)
        {
        
            // On vérifie si le fichier est égal ou inférieur à  5 000 000 d'octets 5mo. 
            if ($_FILES['picture']['size'] <= 5000000)
            {   
                // pathinfo permet de récuperer des informations sur le chemin de l'image
                $fileInfo = pathinfo($_FILES['picture']['name']);
                $extension = $fileInfo['extension'];
                $EXTENSION_AUTORIZED = ['jpg', 'jpeg', 'gif', 'png'];
                //in_array permet de trouver si une valeur existe dans un tableau
                if (in_array($extension, $EXTENSION_AUTORIZED ))
                {
                    // permet de déplacer un fichier 
                    move_uploaded_file($_FILES['picture']['tmp_name'],
                    './uploads/'.$_FILES['picture']['name']);
                    echo "L'envoi a bien été effectué !";
                }
            }
        }

    ?>
</body>
</html>