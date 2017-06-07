<!DOCTYPE html>
<html lang="nl">
<head>
	<!--Kevin Esser-->
	<meta charset=utf-8>
	<meta name=description content="beschrijving van de webpagina">
	<meta name=keywords content="trefwoorden, gescheiden, door, komma's">
	<meta name="author" content="Kevin Esser">
	<meta http-equiv=refresh content="1">
	<style>
	html {background-color: black; color: azure; font-family: sans-serif; font-size: 66px; font-weight: bold; cursor: none;}
	
	</style>
	<title> KLOOKKIIIEEE </title>
</head>
<body>
	<h6>KLOKIIEEE</h6>

	<?php
		$datum = time();
		$nu = getdate($datum);
		echo("</br>Tijd: " . $nu["hours"] . ":" . $nu["minutes"] . ":" . $nu["seconds"]);
		
	?>
</body>
</html>