<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $tab =  [    ['name'=>'francois','age'=>33,'photo'=>"photo.png"],
        ['name'=>'francois','age'=>33,'photo'=>"photo.png"],
        ['name'=>'francois','age'=>33,'photo'=>"photo.png"],
        ['name'=>'francois','age'=>33,'photo'=>"photo.png"]
    ];
     ?>
            
     <?php
        foreach($tab as $elem){ ?>
        <p>  <?php echo $elem["name"] ?> </p>
        <p>  <?php echo $elem["age"] ?> </p>   
        <img src="<?php $elem["photo"] ?>" >
           
       <?php    
        }?>

    ?>



</body>
</html>