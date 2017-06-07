<?php
	error_reporting(error_reporting() & ~E_NOTICE & ~E_DEPRECATED );
	$email = trim($_POST['email']);
	$naam = trim($_POST['naam']);
	$adres = trim($_POST['adres']);
	$woonplaats = trim($_POST['woonplaats']);
	$postcode = trim($_POST['postcode']);
	$commentaar = $_POST['commentaar'];
	
	$email = strtolower($email);
	$emailarray = explode('@', $email);
	$user = $emailarray[0];
	$domain = $emailarray[1];
	
	if(isset($_POST['email']))
	{
		echo("</br>user: " . $user);
	}
	if(isset($_POST['email']))
	{
		echo("</br>domain: " . $domain);
	}
	$naam = ucfirst($naam);
	//$commentaar = nl2br($commentaar);
	
	$postcodeprefix = substr($postcode, 0,4);
	$postcodesufix = substr($postcode, 4,2);
	
	if(isset($_POST['postcodeprefix']))
	{
		echo "<br>postcodeprefix: " . $postcodeprefix;
	}
	if(isset($_POST['postcodesufix']))
	{
		echo "<br>postcodesufix: " . $postcodesufix;
	}
	
	
	$nl = strpos($email, ".nl");
	$be = strpos($email, ".be");
	$fr = strpos($email, ".fr");
	if($nl > 0)
	{
		echo "<br>Nationaliteit is Nederlands";
	}
	elseif($br > 0)
	{
		echo "<br>Nationaliteit is Belgisch";
	}
	elseif($fr > 0)
	{
		echo "<br>Nationaliteit is Frans";
	}
	
	$scheldwoorden = array("debiel", "laaf", "gestoord");
	$commentaar = str_replace($scheldwoorden, "*#@#!%!", $commentaar);
	if(isset($_POST['commentaar']))
	{
		echo"<br>Gefilterd commentaar is: " . $commentaar;
	}
	
	
	function emailcheck()
	{
		global $email;
		if(eregi('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-\.]+\.[a-zA-Z]{2,3}$' , $email))
			{
				echo("<br>email adres is correct");
				return(true);
			}
			else
				{
					echo("<br>email adres niet geldig");
					return(false);
				}
	}
	
	function postcodecheck()
	{
		global $postcode;
		if(eregi('^[1-9]{1}[0-9]{3}[a-zA-Z]{2}$' , $postcode))
		{
			echo("<br>postcode is correct");
			return(true);
		}
		else
			{
				echo("<br>postcode is niet geldig");
				return(false);
			}
	}
	
	function commentaarvalueren()
	{
		//$negativewoorden = array("jammer", "moeder", "papa");
		//$positivewoorden = array("cool", "goeie", "pikkie");
		$commentaar = trim($_POST['commentaar']);
		
		$negativewoorden = 0;
		$positivewoorden = 0;
		
		echo "<br>" . $commentaar;
		echo "<br>" . $negativewoorden;
		
		if(preg_match("geweldig" . $commentaar))
		{
			$positivewoorden++;
			echo $positivewoorden;
		}
	}
	
?>