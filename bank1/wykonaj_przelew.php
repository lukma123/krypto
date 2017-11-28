<?php
session_start();

if(!isset($_SESSION['zalogowany']))
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

     echo"<p>Witaj ".$_SESSION['login'].'! <br />Tutaj możesz wykonać przelew<br /></p><p align="right">[<a href="logout.php">Wyloguj się!</a>]</ br>[<a href="historia.php">Historia przelewów</a>]</p>';
     echo "Nazwa nadawcy: ".$_SESSION['login'].'<br />';
	

?>
<form action="zatwierdzenie_przelewu.php" method="post">

		<!--Imię i nazwisko nadawcy<br /><input type="text" name="nadawca"/> <br />
		Adres nadawcy<br /><input type="text" name="adres_nadawca"/> <br />
		Numer rachunku nadawcy:<br /><input type="tekst" name="rachunek_nadawcy"/> <br />-->
		Kwota<br /><input type="number" step="0.01" name="kwota"/> <br />
		Imię i nazwisko odbiorcy:<br /><input type="tekst" name="odbiorca"/> <br />
		Adres odbiorcy<br /><input type="text" name="adres_odbiorca"/> <br />
		Numer rachunku odbiorcy:<br /><input type="tekst" name="rachunek_odbiorcy"/><br /><br />
		
		<input type="submit" value="Wykonaj przelew"/>
		
		
	</form>


</body>	
</html>	