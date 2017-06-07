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
	<?php
		function max3($getal1, $getal2, $getal3)
		{
			if($getal1 > $getal3 && $getal2)
			{
				return($getal1);
			}
			elseif($getal2 > $getal3 && $getal1)
			{
				return($getal2);
			}
			elseif($getal3 > $getal2 && $getal1)
			{
				return($getal3);
			}
			else
			{
				return("Gelijk");
			}
		}

	?>
</body>
</html>