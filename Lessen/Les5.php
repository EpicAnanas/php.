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
	<h3>de if opdracht </h3>
	<?php
		$gewerkteuren = 41;
		$uurtarief = 15.00;
		$bruto = $gewerkteuren * $uurtarief;
		
		if($gewerkteuren > 40)
		{
			$bonus = 90;
			echo("Uw salaris met bonus is:"."€".($bruto+$bonus) . "<br />");
		}
		else{
			echo("Uw salaris is: " . "&euro;" . $bruto);
		}
				
		if($bruto+$bonus > 700)
		{
			echo("U kunt maximaal 100 euro's sparen");
		}
		else
		{
			echo("U kunt maximaal 50 euro's sparen");
		}

	?>
</body>
</html>