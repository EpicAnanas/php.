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
	<h3>Voorbeeld van de do while-lus</h3>
	
	<?php		
		$saldo = 100;
		$rente = 0.1;
		$maand = 1;
		echo "Begin saldo is:" . $saldo;
		echo "<br>START...";
		
		do
		{
			$saldo = $saldo + ($saldo * $rente);
			if($maand === 2)
			{
				echo "<br> Februari telt niet mee";
				$maand++;
				continue;
			}
			
			if($saldo >= 2000)
			{
				break;
			}
			
			if($maand == 6 && $saldo <1000)
			{
				echo "<br>Je saldo is te laag!";
				break;
			}
			
			echo " <br> Maand " . $maand . " je saldo is:" . $saldo;
			$maand++;
		}
		while($saldo < 2000);
		echo " <br> Maximale saldo is berijkt!";
		
	?>
</body>
</html>