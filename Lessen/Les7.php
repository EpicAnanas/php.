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
	<h3>Voorbeeld van de switch-opdracht</h3>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<p>Select een plaats:</p>
		<select name="Plaats" value="true">
			<option value=" "></option>
			<option value="a">Almere</option>
			<option value="b">Amstelveen</option>
			<option value="c">Amsterdam</option>
			<option value="d">Bussum</option>
			<option value="e">Hilversum</option>
			<option value="f">Huizen</option>
			<option value="g">Laren</option>
			<option value="h">Weesp</option>
		</select>
		<p>
			<input type="submit" name="versturen" value="Versturen">
		</p>
	<hr>
	</form>
	
	<?php
		if(isset($_POST['Plaats']))
		{
			switch($_POST['Plaats'])
			{
				case "a" :
					echo "<p>U heeft Almere gekozen</p>";
					break;
				case "b" :
					echo "<p>U heeft Amstelveen gekozen</p>";
					break;
				case "c":
					echo "<p>U heeft Amsterdam gekozen</p>";
					break;
				case "d":
					echo "<p>U heeft Bussum gekozen</p>";
					break;
				case "e":
					echo "<p>U moet een plaats kiezen</p>";
					break;
				case "f":
					echo "<p>U moet een plaats kiezen</p>";
					break;
				case "g":
					echo "<p>U moet een plaats kiezen</p>";
					break;
				case "h":
					echo "<p>U moet een plaats kiezen</p>";
					break;
			}
		}
	?>
</body>
</html>