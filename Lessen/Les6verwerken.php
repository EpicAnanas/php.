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
	<h3>Formulier </h3>

	<?php
		if(isset($_POST["naam"]))
		{
			if($_POST["taal"]=="N")
			{
				echo " Goedendag " . $_POST["naam"];
			}
			else if($_POST["taal"]=="E")
			{
				echo " Good morning " . $_POST["naam"];
			}
			else if($_POST["taal"]=="S")
			{
				echo " Buenos dias " . $_POST["naam"];
			}
			else
			{
				echo "U moet een taal kiezen " . $_POST["naam"];
			}
		}
	?>
</body>
</html>