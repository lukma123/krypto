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
	<title>Potwierdzenie przelewu</title>
</head>
<body>

<?php
     
	 
     echo"<p>Witaj ".$_SESSION['login'].'! <br />Przelew został wykonany <br /></p><p align="right">[<a href="logout.php">Wyloguj się!</a>]</p>';

     
	
	    //$nadawca = $_SESSION['nadawca'];
		//$adres_nadawca = $_SESSION['adres_nadawca'];
		//$rachunek_nadawcy = $_SESSION['rachunek_nadawcy'];
		$kwota = $_SESSION['kwota'];
		$odbiorca = $_SESSION['odbiorca'];
		$adres_odbiorca = $_SESSION['adres_odbiorca'];
		$rachunek_odbiorcy = $_SESSION['rachunek_odbiorcy'];
		$id_uzytkownika = $_SESSION['id'];
		
		
		
	echo "Nazwa nadawcy: ".$_SESSION['login'].'<br />';
     //echo "<p>Imię i nazwisko nadawcy: ".$nadawca."<br />";
	 //echo "<p>Adres nadawcy: ".$adres_nadawca."<br />";
	 //echo "<p>Rachunek nadawcy: ".$rachunek_nadawcy."<br />";
	 echo "<p>Kwota: ".$kwota."<br />";
	 echo "<p>Imię i nazwisko odbiorcy: ".$odbiorca."<br />";
	 echo "<p>Adres odbiorcy: ".$adres_odbiorca."<br />";
	 echo "<p>Rachunek odbiorcy: ".$rachunek_odbiorcy."<br />";
	 
	 unset($_SESSION['nadawca']);
	 unset($_SESSION['adres_nadawca']);
	 unset($_SESSION['rachunek_nadawcy']);
	 unset($_SESSION['kwota']);
	 unset($_SESSION['odbiorca']);
	 unset($_SESSION['adres_odbiorca']);
	 unset($_SESSION['rachunek_odbiorcy']);
	 


?>
<form action="wykonaj_przelew.php" >

	
		
		<input type="submit" value="Wykonaj nowy przelew"/>
		
		
	</form>


</body>	
</html>	