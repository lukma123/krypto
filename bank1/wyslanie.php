<?php

	session_start();
	
	
	require_once "connect.php";
	
	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
	
	if($polaczenie->connect_errno!=0)
	{
		echo "Error:".$polaczenie->connect_errno;
	}
	else
	{
		
		$nadawca1 = $_SESSION['login'];
		
		$adres_nadawca = $_SESSION['adres1'];
		$rachunek_nadawcy = $_SESSION['numer_rachunku1'];
		
		$kwota = $_SESSION['kwota'];
		$odbiorca = $_SESSION['odbiorca'];
		$adres_odbiorca = $_SESSION['adres_odbiorca'];
		$rachunek_odbiorcy = $_SESSION['rachunek_odbiorcy'];
		$id_uzytkownika = $_SESSION['id'];

		
		 
         $result = $polaczenie->query("INSERT INTO przelewy VALUES (NULL, '$id_uzytkownika', '$nadawca1', '$adres_nadawca', '$rachunek_nadawcy', '$kwota', '$odbiorca', '$adres_odbiorca', '$rachunek_odbiorcy')");
	
		header('Location:potwierdzenie.php');
		
		$polaczenie->close();
		
		
		
	}
	

?>