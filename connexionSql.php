<?php

$idConnexion=mysqli_connect("localhost", "lafleur", "secret");




//Connexion à la base de données

if($idConnexion){
    mysqli_select_db($idConnexion, "lafleur");
    $requete = "SELECT * FROM produit;";
    $resultat = mysqli_query($idConnexion, $requete);
    $ligne = mysqli_fetch_assoc($resultat);
    while($ligne){
        echo $ligne['pdt_ref']."<br>";
        $ligne = mysqli_fetch_assoc($resultat);
    }
}
mysqli_close($idConnexion);

?> 