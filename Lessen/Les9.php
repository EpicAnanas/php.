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
	<h3>Voorbeeld van include</h3>
	<?php
		include("Les9mijnfunctie.php");
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<p>Typ eerste temperatuur in: <input type="text" name="temp1"></p>
		<p>Typ tweede temperatuur in: <input type="text" name="temp2"></p>
		<p>Typ derde temperatuur in: <input type="text" name="temp3"></p>
		<p><input type="submit" name="versturen" value="Versturen"></p>
	
		<p>------------------------------------------------------------</p>
	</form>
	<p>
		De maximum temperatuur is:
		<?php
			if(isset($_POST["temp1"]) && isset($_POST["temp2"]) && isset($_POST["temp3"]))
			{
				echo max3($_POST["temp1"],$_POST["temp2"],$_POST["temp3"]);
			}

		?>
	</p>
	
</body>
</html>