<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>

<body>



<!--Texte-->

    <div>
        <p>Sté LaFleur</p>
    </div>
    <div>
        <h3><a href="logo.php" target="logo">Accueil</a></h3>
    </div>
    <div class="ecrire">
        <a href="mailto:commercial@lafleur.com">Nous écrire</a>
    </div>

    <hr>
    <div class="produits">
        <h4><u>Nos produits :</u></h4>
    </div>
   



   
<!--Affichage des catégorie de produits-->	
	
	<form action="listPdt.php" target="logo" >
 
 <?php

 $idConnexion=mysqli_connect("localhost", "root", "");

if($idConnexion){
    mysqli_select_db($idConnexion, "lafleur");
            mysqli_set_charset($idConnexion, 'utf8' );
            mysqli_query($idConnexion,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
            
    $requete = "SELECT* FROM categorie;";
    $resultat = mysqli_query($idConnexion, $requete);
    $ligne = mysqli_fetch_assoc($resultat);
    while($ligne){
        echo "<a href='listPdt.php?cat=".$ligne['cat_code']."' target='logo'>".$ligne['cat_libelle']."</a><br>";
        $ligne = mysqli_fetch_assoc($resultat);
    }
}
mysqli_close($idConnexion);

?>
    </form>



	
<!--Tableaux "référence" et "quantité" déclarés et initialisés-->	

<?php

if (!isset($_SESSION["reference"]))
    	{
        		$_SESSION["reference"]=array();
        		$_SESSION["quantite"]=array();
    	}

?>
	
    <hr>





	
<!--Bouton "Vider le panier"-->

    <form action="panier.php" target="menu" method="get">
        <input type="submit" name="action" value="Vider le panier" />
    </form>
	



	
<!--Bouton "Commander"-->

    <form action="commande.php" target="logo" method="get">
        <input type="submit" value="Commander" />
    </form>

</body>
</html>