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
	<h3>Voorbeeld van een php-functie</h3>
	<?php
	function maxGetal($getal1, $getal2)
	{
		if($getal1 > $getal2)
		{
			return($getal1);
		}
		elseif($getal2 > $getal1)
		{
			return($getal2);
		}
		else
		{
			return("gelijk");
		}
	}
	
	function minGetal($getal1, $getal2)
	{
		if($getal1 < $getal2)
		{
			return($getal1);
		}
		elseif($getal2 < $getal1)
		{
			return($getal2);
		}
		else
		{
			return("gelijk");
		}
	}
	?>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<p>Typ eerste tempratuur in: <input type="text" name="temp1"></p>
		<p>Typ tweede tempratuut in: <input type="text" name="temp2"></p>
		<p><input type="submit" name="versturen" value="Versturen"></p>
		<p>---------------------------------------------------------------------</p>
	</form>
	
	<p>
		De maximum tempratuur is: 
		<?php
			if(isset($_POST["temp1"]) && isset($_POST["temp2"]))
			{
				echo maxGetal($_POST["temp1"],$_POST["temp2"]);
			}
		?>
	</p>
		<p>
		De minimum tempratuur is: 
		<?php
			if(isset($_POST["temp1"]) && isset($_POST["temp2"]))
			{
				echo minGetal($_POST["temp1"],$_POST["temp2"]);
			}
		?>
	</p>
</body>
</html>