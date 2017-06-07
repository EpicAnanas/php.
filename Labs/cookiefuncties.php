	<?php
		function welkom()
    {
        global $user;
        $user = $_POST["user"];

        if($user != "Kevin")
        {
            setcookie("Kevin", "Kevinator");
            echo "Welkom <strong>" . $_POST["user"] . "</strong> ,dit is je eerste bezoek";
        }
        elseif(isset($_COOKIE["Kevin"]))
         {
            echo "Hallo <strong>" . $_COOKIE["Kevin"] . "</strong>. Welkom terug bij de XXL Computers website.";
        }
    }
	?>