<?php
 include 'bdd.php';
// verification qu'un id à bien été passé en get (dans l'url)
if(!empty($_GET["id"])){
    // traitement des données 
    $id = htmlspecialchars($_GET["id"]);
    //préparation de la requête
    $delReq  = $bdd->prepare('DELETE FROM cars WHERE id = :id');
    //exécution de la requête:
   $delReq->execute(['id'=>$id]);
   // libère la connexion au serveur
   $delReq->closeCursor();
   // redirection 
   header("location:index.php");

}