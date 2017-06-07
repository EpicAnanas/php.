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
	echo "Achternaam: " . $_POST["achternaam"] . "<br />";
	echo "Voornaam: " . $_POST["voornaam"] . "<br />";
	echo "Adres: " . $_POST["adres"] . "<br />";
	echo "Postcode: " . $_POST["postcode"] . "<br />";
	echo "Plaats: " . $_POST["plaats"] . "<br />";
	echo "email adres: " . $_POST["email"] . "<br />" . "<br />";

	if(isset($_POST["opleiding"]))
		{
			if($_POST["opleiding"]=="ICT")
			{
				echo " ICT-opleidingen zijn vol. Kies een andere opleiding " ;
			}
			else if($_POST["opleiding"]!="ICT")
			{
				echo " U wordt ingeschreven voor de volgende opleiding " . $_POST["opleiding"];
			}

		}
	?>

</body>
</html>