
<?php

session_start();




/* Initialisation du panier */

$i=count($_SESSION['reference']);
$_SESSION['reference'][$i]=$_GET['refPdt'];
$_SESSION['quantite'][$i]=$_GET['quantite'];

for ($i=0;$i<count ($_SESSION['reference']);$i++)
{
		echo $_SESSION['reference'][$i];
}

for ($i=0;$i<count($_SESSION['quantite']);$i++)
{
	if ($_SESSION['reference'][$i]==$_GET['refPdt'])
	{	
		$_SESSION['quantite'][$i]=$_SESSION['quantite'][$i]+$_GET['quantite'];
	}
	else
	{
		($_SESSION['reference'][$i]);
	}
}
//header("Location: menu.php");

?>