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
	<h3>PHP Lab 12</h3>

	<table border=0 cellpadding=0 cellspacing=0 >
		<form name="inloggen" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<tr>
				<td>gebruikersnaam: </td>
				<td><input type="text" name="user" /></td>
				<td><input type="submit" name="send" value="inloggen" /></td>
			</tr>
		</form>
	</table>
	
	<?php
	if(isset($_POST['user']))
	{
		Include("cookiefuncties.php");
		welkom();
	}
	?>
</body>
</html>