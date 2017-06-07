<!DOCTYPE html>
<html lang="nl">
<head>
	<!--Kevin Esser-->
	<meta charset=utf-8>
	<meta name=description content="beschrijving van de webpagina">
	<meta name=keywords content="trefwoorden, gescheiden, door, komma's">
	<meta name="author" content="Kevin Esser">
	<link rel="stylesheet" href="Home.css">
	<title> TIETLEELLLL </title>
</head>
<body>
	<h3>Variabelen </h3>
	<?php
		$breedte = 10;
		$lengte = 2*$breedte;
		$hoogte = 5;
		$oppervlakte = $lengte * $breedte;
		$volume = $oppervlakte * $hoogte;
		echo("Oppervlakte is: ".$oppervlakte."<br />");
		echo("Volume is: ".$volume."<br />");
		echo("Half volume is: ".$volume / 2 ."<br />");
	?>
</body>
</html>