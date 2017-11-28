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
		$nadawcaadmin = $_POST['nadawcaad'];
		$adres_nadawcaadmin = $_POST['adres_nadawcaad'];
		$rachunek_nadawcyadmin = $_POST['rachunek_nadawcyad'];
		$kwotaadmin = $_POST['kwotaad'];
		$odbiorcaadmin = $_POST['odbiorcaad'];
		$adres_odbiorcaadmin = $_POST['adres_odbiorcaad'];
		$rachunek_odbiorcyadmin = $_POST['rachunek_odbiorcyad'];
		
		$_SESSION['nadawcaadmin'] = $nadawcaadmin;
		$_SESSION['adres_nadawcaadmin'] = $adres_nadawcaadmin;
		$_SESSION['rachunek_nadawcyadmin'] = $rachunek_nadawcyadmin;
		$_SESSION['kwotaadmin'] = $kwotaadmin;
		$_SESSION['odbiorcaadmin'] = $odbiorcamin;
		$_SESSION['adres_odbiorcaadmin'] = $adres_odbiorcaadmin;
		$_SESSION['rachunek_odbiorcyadmin'] = $rachunek_odbiorcyadmin;	
		
		
		
		

		 $resul = $polaczenie->query("SELECT * FROM uzytkownicy1 WHERE login='$nadawcaadmin'");
      $wiersz = $resul->fetch_assoc();
	   $_SESSION['iddd'] = $wiersz['id'];
	
		$iddd = $_SESSION['iddd'];
		 
         $result = $polaczenie->query("INSERT INTO przelewy VALUES (NULL, '$iddd', '$nadawcaadmin', '$adres_nadawcaadmin', '$rachunek_nadawcyadmin', '$kwotaadmin', '$odbiorcaadmin', '$adres_odbiorcaadmin', '$rachunek_odbiorcyadmin')");
	
		header('Location:potwierdzenie_admin.php');
		
		$polaczenie->close();
		
		
		
	}
	

?>