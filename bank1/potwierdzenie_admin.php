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
	<title>Potwierdzenie przelewu</title>
</head>
<body>

<?php
     
	 
     echo"<p>Witaj ".$_SESSION['loginadmin'].'! <br />Przelew został wykonany <br /></p><p align="right">[<a href="logout.php">Wyloguj się!</a>]</p>';

     
	
	    $nadawca = $_SESSION['nadawcaadmin'];
		$adres_nadawca = $_SESSION['adres_nadawcaadmin'];
		$rachunek_nadawcy = $_SESSION['rachunek_nadawcyadmin'];
		$kwota = $_SESSION['kwotaadmin'];
		$odbiorca = $_SESSION['odbiorcaadmin'];
		$adres_odbiorca = $_SESSION['adres_odbiorcaadmin'];
		$rachunek_odbiorcy = $_SESSION['rachunek_odbiorcyadmin'];
		
		
		
		
	
     echo "<p>Imię i nazwisko nadawcy: ".$nadawca."<br />";
	 echo "<p>Adres nadawcy: ".$adres_nadawca."<br />";
	 echo "<p>Rachunek nadawcy: ".$rachunek_nadawcy."<br />";
	 echo "<p>Kwota: ".$kwota."<br />";
	 echo "<p>Imię i nazwisko odbiorcy: ".$odbiorca."<br />";
	 echo "<p>Adres odbiorcy: ".$adres_odbiorca."<br />";
	 echo "<p>Rachunek odbiorcy: ".$rachunek_odbiorcy."<br />";
	 
	 unset($_SESSION['nadawcaadmin']);
	 unset($_SESSION['adres_nadawcaadmin']);
	 unset($_SESSION['rachunek_nadawcyadmin']);
	 unset($_SESSION['kwotaadmin']);
	 unset($_SESSION['odbiorcamin']);
	 unset($_SESSION['adres_odbiorcaadmin']);
	 unset($_SESSION['rachunek_odbiorcyadmin']);
	 


?>
<form action="wykonaj_przelew_admin.php" >

	
		
		<input type="submit" value="Wykonaj nowy przelew"/>
		
		
	</form>


</body>	
</html>	