<?php
session_start();

if(!isset($_SESSION['zalogowany_admin']))
{
	header('Location: index.php');
	exit();
}

?>


<!DOCTYPYE HTML>
<html lang="pl">
<head> 
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>Wykonaj przelew</title>
</head>
<body>

<?php

     echo"<p>Witaj ".$_SESSION['loginadmin'].'! <br />Tutaj możesz wykonać przelew<br /></p><p align="right">[<a href="logout.php">Wyloguj się!</a>]</p>';


?>
<form action="wysylanieadmin.php" method="post">

		Imię i nazwisko nadawcy<br /><input type="text" name="nadawcaad"/> <br />
		Adres nadawcy<br /><input type="text" name="adres_nadawcaad"/> <br />
		Numer rachunku nadawcy:<br /><input type="tekst" name="rachunek_nadawcyad"/> <br />
		Kwota<br /><input type="number" step="0.01" name="kwotaad"/> <br />
		Imię i nazwisko odbiorcy:<br /><input type="tekst" name="odbiorcaad"/> <br />
		Adres odbiorcy<br /><input type="text" name="adres_odbiorcaad"/> <br />
		Numer rachunku odbiorcy:<br /><input type="tekst" name="rachunek_odbiorcyad"/><br /><br />
		
		<input type="submit" value="Wykonaj przelew"/>
		
		
	</form>


</body>	
</html>	