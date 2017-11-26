





<?php

	session_start();
	
	//if((!isset($_POST['login'])) || (!isset($_POST['haslo'])));
	//{
	//	header('Location: index.php');
	//	exit();
	//}
	$id_uzytkownika = $_SESSION['id'];
	require_once "connect.php";
	echo"<p>Witaj ".$_SESSION['login'].'! <br />Tutaj możesz zobaczyć swoje przelewy<br /></p><p align="right">[<a href="logout.php">Wyloguj się!</a>]</p>';
	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
	
	if($polaczenie->connect_errno!=0)
	{
		echo "Error:".$polaczenie->connect_errno;
	}
	else
	{
		
		
		//$sql = "SELECT*FROM uzytkownicy WHERE login='$login' AND haslo ='$haslo'";
		
		$rezultat = @$polaczenie->query("SELECT*FROM przelewy WHERE id_uzytkownika='$id_uzytkownika'");
		
	
		
		$ilu_uzytkownikow = $rezultat->num_rows;
		
			
			while($wiersz = $rezultat->fetch_assoc())
{
   
	   
	    echo "<p>Imię i nazwisko nadawcy: ".$wiersz['nadawca']."<br />";
	 echo "<p>Adres nadawcy: ".$wiersz['adres_nadawca']."<br />";
	 echo "<p>Rachunek nadawcy: ".$wiersz['rachunek_nadawcy']."<br />";
	 echo "<p>Kwota: ".$wiersz['kwota']."<br />";
	 echo "<p>Imię i nazwisko odbiorcy: ".$wiersz['odbiorca']."<br />";
	 echo "<p>Adres odbiorcy: ".$wiersz['adres_odbiorca']."<br />";
	 echo "<p>Rachunek odbiorcy: ".$wiersz['rachunek_odbiorcy']."<br /><br /><br />";

}
				
			
			
		
		$rezultat->free_result();
		$polaczenie->close();
	}

	

    //echo $login."<br />";
	//echo $haslo;

	

?>