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
	<h3>Hash-arrays </h3>
	<?php
		$hoofdstad = array("DE"=>"Berlijn", "BE"=>"Brussel", "FR"=>"Parijs", "GB"=>"London");
		
		echo($hoofdstad["DE"] . "<br />");
		echo($hoofdstad["BE"] . "<br />");
		echo($hoofdstad["FR"] . "<br />");
		echo($hoofdstad["GB"] . "<br />");
	?>
</body>
</html>