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
	<h3>php lab 04 </h3>
	<table border=0 cellpadding=0 cellspacing=0 width=100%>
	<form name="orderform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<tr>
			Korting </br>
			<input type="checkbox" name="korting15" value="15%">Student 15% </br>
			<input type="checkbox" name="korting10" value="10%">Senior 10% </br>
			<input type="checkbox" name="korting5" value="5%">Klant 5% </br>
		</tr>
	<hr />
		<tr>
			<td>
				<img src="http://www.clipartkid.com/images/408/kde-pinheiro-back-to-our-basic-desktop-icon-s-Va61Tz-clipart.png" style=width:150px;height:150px />
			</td>
		</tr>
		<tr>
			<td>
				Toshiba Satellite A100-510	Basisprijs 999.999
			</td>
		</tr>
		<tr>
			<td><!--Shopping Cart Begin-->
				<input type="hidden" name="toshibaproduct" value="001" />
				<input type="hidden" name="toshibamerk" value="Toshiba" />
				<input type="hidden" name="toshibamodel" value="Satellite A100-510" />
				Aantal: <input type="text" size=2 maxlength=3 name="toshibaaantal" value="0" />
				<input type="hidden" name="toshibaprijs" value="999.99" />
				
				<input type="image" src="http://www.torq-king.nl/images/users/18045/bestelknop.png" style=width:70px;height:50px border=0 value="bestellen" />
			</td><!--Shopping Cart End-->
		</tr>
	
	</form>
	</table>
	<hr />
	<?php
		if(isset($_POST["korting15"]) || isset($_POST["korting10"]) || isset($_POST["korting5"]))
		{
			$korting = 0;
			if(isset($_POST["korting15"]))
			{
				$korting = $korting + 15;
			}
			if(isset($_POST["korting10"]))
			{
				$korting = $korting + 10;
			}
			if(isset($_POST["korting5"]))
			{
				$korting = $korting + 5;
			}
		echo "Korting is: $korting%";
		}
	?>
</body>
</html>