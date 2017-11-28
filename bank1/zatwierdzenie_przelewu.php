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
	<title>Zatwierdzenie przelewu</title>
</head>
<body>

<?php

     echo"<p>Witaj ".$_SESSION['login'].'! <br />Tutaj możesz zatwierdzic dane<br /></p><p align="right">[<a href="logout.php">Wyloguj się!</a>]</p>';

        //$nadawca = $_POST['nadawca'];
		//$adres_nadawca = $_POST['adres_nadawca'];
		//$rachunek_nadawcy = $_POST['rachunek_nadawcy'];
		
		
		$kwota = $_POST['kwota'];
		$odbiorca = $_POST['odbiorca'];
		$adres_odbiorca = $_POST['adres_odbiorca'];
		$rachunek_odbiorcy = $_POST['rachunek_odbiorcy'];
	
		//$_SESSION['nadawca'] = $nadawca;
		//$_SESSION['adres_nadawca'] = $adres_nadawca;
		//$_SESSION['rachunek_nadawcy'] = $rachunek_nadawcy;
		$_SESSION['kwota'] = $kwota;
		$_SESSION['odbiorca'] = $odbiorca;
		$_SESSION['adres_odbiorca'] = $adres_odbiorca;
		$_SESSION['rachunek_odbiorcy'] = $rachunek_odbiorcy;
	
	echo "Nazwa nadawcy: ".$_SESSION['login'].'<br />';
     //echo "<p>Imię i nazwisko nadawcy: ".$nadawca."<br />";
	 //echo "<p>Adres nadawcy: ".$adres_nadawca."<br />";
	 //echo "<p>Rachunek nadawcy: ".$rachunek_nadawcy."<br />";
	 echo "<p>Kwota: ".$kwota."<br />";
	 echo "<p>Imię i nazwisko odbiorcy: ".$odbiorca."<br />";
	 echo "<p>Adres odbiorcy: ".$adres_odbiorca."<br />";
	 echo "<p>Rachunek odbiorcy: ".$rachunek_odbiorcy."<br />";
	 
	 
	 
	 

?>
<form action="wyslanie.php" >

	
		
		<input type="submit" value="Potwierdz"/>
		
		
	</form>


</body>	
</html>	
		
		
		
