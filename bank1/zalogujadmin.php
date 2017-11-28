<?php

	session_start();
	
	//if((!isset($_POST['login'])) || (!isset($_POST['haslo'])));
	//{
	//	header('Location: index.php');
	//	exit();
	//}
	require_once "connect.php";
	
	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
	
	if($polaczenie->connect_errno!=0)
	{
		echo "Error:".$polaczenie->connect_errno;
	}
	else
	{
		$loginadmin = $_POST['loginadmin'];
		$hasloadmin = $_POST['hasloadmin'];
		
		//$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	      
		//($rezultat = @$polaczenie->query(
		//sprintf("SELECT * FROM uzytkownicy WHERE login='%s'",
		//mysqli_real_escape_string($polaczenie,$login))))
		
		
		if ($rezultat = @$polaczenie->query("SELECT * FROM administratorzy WHERE login='$loginadmin' AND haslo='$hasloadmin'"))
		
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				
				//if (password_verify($haslo, $wiersz['haslo']))
				//{
					$_SESSION['zalogowany_admin'] = true;
					$_SESSION['id'] = $wiersz['id'];
					$_SESSION['loginadmin'] = $wiersz['login'];
					
					
					
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: wykonaj_przelew_admin.php');
			}
			else 
			{
					
					//$haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);
			//$_SESSION['haslo_hash'] = $haslo_hash;
				
					$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					
					header('Location: index.php');
			}
				
			}
			else {
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				
					
				header('Location: index.php');
				
			}
			
		//}
		
		$polaczenie->close();
	}

	

    //echo $login."<br />";
	//echo $haslo;

	

?>