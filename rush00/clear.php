<?php
	session_start();
	unset($_SESSION['panier']);
	$_SESSION['panier']= array();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Attention</title>
	<link rel="stylesheet" type="text/css" href="./connexion.css">
</head>
<body  style= "background-image:url(http://www.arcturius.org/chroniques/wp-content/uploads/2015/04/Flat-Ocean.jpeg)">
	<form methode="post" action="./panier.php" class="box">
	<h1>
		Panier vidé
		<input class="button" type="submit" value="Retour Panier" style="color:white"/>
	</h1>
	</form>
</div>	
</body>
</html>