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
	<h3>Voorbeeld van de foreach-lus met $key</h3>
	
	<?php
		$color["Oranje"] = "Orange";
		$color["Rood"] = "Red";
		$color["Paars"] = "Violet";
		$color["Groen"] = "Green";
		$color["Blauw"] = "Blue";
		$color["Geel"] = "Yellow";
		
		foreach($color as $key => $value)
		{
			echo "</br><font color=$value>Dezelfde tekst in <strong>$key</strong></font>";
		}
	?>
</body>
</html>