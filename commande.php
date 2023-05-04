<?php

session_start();

echo $_SESSION['quantite'];

?>

<form action="envoyer.php" target="logo" method="get">

<?php

if($idConnexion){
                mysqli_select_db($idConnexion, "lafleur");
                mysqli_set_charset($idConnexion, 'utf8' );
                mysqli_query($idConnexion,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
                
                $requete = "SELECT FROM  WHERE ='".$_GET['']."';";
                $resultat = mysqli_query($idConnexion, $requete);
                $ligne = mysqli_fetch_assoc($resultat);
                while($ligne){
                    echo "<tr><td><img src='../Images/".$ligne['pdt_image'].".jpg'></td><td>".$ligne['pdt_ref']."</td><td>".$ligne['pdt_designation']."</td><td>".$ligne['pdt_prix']." €"."</td></tr>";
                    $ligne = mysqli_fetch_assoc($resultat);
                }  
}

?>

</form>