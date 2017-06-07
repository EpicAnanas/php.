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
		echo date("D")."<br>";
		//geeft de weekdag weer (Mon, Tue)
		echo date("H:i:s:") . "<br><br>";
		//geeft het uur weer (13:42:08)
		
		$weekdag = array();
		$weekdag["Mon"] = "maandag";
		$weekdag["Tue"] = "dinsdag";
		$weekdag["Wed"] = "woensdag";
		$weekdag["Thu"] = "donderdag";
		$weekdag["Fri"] = "vrijdag";
		$weekdag["Sat"] = "zaterdag";
		$weekdag["Sun"] = "zondag";
		
		echo "Welkom. Het is vandaag: ";
		echo date("l")."<br>";
	?>
</body>
</html>