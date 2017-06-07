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
	
	<form action="PO1verwerken.php" method="post">
	<p>
		<table border=1>
			<tr>
				<td>Achternaam: </td> 
				<td><input type="text" name="achternaam"></td>
			</tr>
			<tr>
				<td>Voornaam: </td>
				<td><input type="text" name="voornaam"></td>
			</tr>
			<tr>
				<td>Adres: </td>
				<td><input type="text" name="adres"></td>
			</tr>
			<tr>
				<td>Postcode: </td>
				<td><input type="text" name="postcode"></td>
			</tr>
			<tr>
				<td>Plaats: </td>
				<td>
					<select name="plaats">
						<option disabled>Kies</option>
						<option>Rotterdam</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>email adres: </td>
				<td><input type="text" name="email"></td>
			</tr>
		</table>
	</p>
	
	<p>
		<input type="hidden" name="opleiding" value="false">
		Kies een opleiding <br>
		<input type="radio" name="opleiding" value="ICT"> ICT <br>
		<input type="radio" name="opleiding" value="Engels"> Engels <br>
		<input type="radio" name="opleiding" value="Techniek"> Techniek <br>
		<input type="radio" name="opleiding" value="Nederlands"> Nederlands	<br>
	</p>
		<input type="submit" value="versturen">
		<input type="reset" value="reset">
	</form>
</body>
</html>