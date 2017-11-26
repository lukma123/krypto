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
		$nadawca = $_SESSION['nadawca'];
		$adres_nadawca = $_SESSION['adres_nadawca'];
		$rachunek_nadawcy = $_SESSION['rachunek_nadawcy'];
		$kwota = $_SESSION['kwota'];
		$odbiorca = $_SESSION['odbiorca'];
		$adres_odbiorca = $_SESSION['adres_odbiorca'];
		$rachunek_odbiorcy = $_SESSION['rachunek_odbiorcy'];
		$id_uzytkownika = $_SESSION['id'];

		
    
	
	
		
		 $mysqli = @new mysqli($host,$db_user,$db_password,$db_name);
         $result = $mysqli->query("INSERT INTO przelewy VALUES (NULL, '$id_uzytkownika', '$nadawca', '$adres_nadawca', '$rachunek_nadawcy', '$kwota', '$odbiorca', '$adres_odbiorca', '$rachunek_odbiorcy')");
	
		header('Location:potwierdzenie.php');
		
		$polaczenie->close();
		
		
		
	}
	

?>