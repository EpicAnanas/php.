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
	<h3>Voorbeeld van de for lus</h3>
	
	<?php
	$weekdag = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
	
	echo "We willen de FOR-lus 10 rondjes later lopen </br>";
	
	echo "Klaar voor de START....</br>";
	foreach($weekdag as $value)
	{
		echo "Dit is " . $value . "<br>";
	}
	echo "Finish";
	?>
</body>
</html>