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
	<form action="Les6verwerken.php" method="post">
		Uw naam: <input type="text" name="naam">
	<p>
		<input type="hidden" name="taal" value="false">
		Kies een taal
		<input type="radio" name="taal" value="N"> Nederlands
		<input type="radio" name="taal" value="E"> Engels
		<input type="radio" name="taal" value="S"> Spaans
	</p>
		<input type="submit" value="versturen">
	</form>
</body>
</html>