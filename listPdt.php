<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border>

	
	
	
	
	
<!--Liste des différents produits de la Sté Lafleur-->
        
		<?php        
            $idConnexion=mysqli_connect("localhost", "root", "");

            if($idConnexion){
                mysqli_select_db($idConnexion, "lafleur");
                mysqli_set_charset($idConnexion, 'utf8' );
                mysqli_query($idConnexion,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
                
                $requete = "SELECT * FROM produit WHERE pdt_categorie='".$_GET['cat']."';";
                $resultat = mysqli_query($idConnexion, $requete);
                $ligne = mysqli_fetch_assoc($resultat);
                while($ligne){
                    echo "<tr><td><img src='../Images/".$ligne['pdt_image'].".jpg'></td><td>".$ligne['pdt_ref']."</td><td>".$ligne['pdt_designation']."</td><td>".$ligne['pdt_prix']." €"."</td></tr>";
                    $ligne = mysqli_fetch_assoc($resultat);
                }  
            }
        ?>
		
		</table>
		
		
            <form action="panier.php" target="menu" method="get">

			
<!-- Remplissage de la liste déroulante à partir de la base de données -->

            <select name="refPdt">

			<?php
                if($idConnexion){
                    mysqli_select_db($idConnexion, "lafleur");
                    mysqli_set_charset($idConnexion, 'utf8' );
                    mysqli_query($idConnexion,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
                    $requete = "SELECT * FROM produit WHERE pdt_categorie='".$_GET['cat']."';";
                    echo $requete;
                    $resultat = mysqli_query($idConnexion, $requete);
                    $ligne = mysqli_fetch_assoc($resultat);
                while($ligne){
                    echo "<option name='refPdt' value='".$ligne['pdt_designation']."'>".$ligne['pdt_designation']."</option>";
                    $ligne = mysqli_fetch_assoc($resultat);
                }
            }                
            mysqli_close($idConnexion);
            ?>
              
			 
			 <?php   
        	
			echo '</select>';
        	echo '&nbsp&nbsp&nbsp';
				
				
				
				
//Sélection de la quantite de produit

			echo "Quantité :";
        	echo '<input type="text" name="quantite" size="5" value="1" />';

			
			
			
//Bouton d'ajout au panier

        	echo '<p><input type="submit" name="panier" value="Ajouter au panier" />';
        	echo '</form>';
			
			?>
				
</body>

</html>