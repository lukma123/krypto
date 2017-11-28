<?php

	session_start();
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
		header('Location: wykonaj_przelew.php');
		exit();
	}
?>

<!DOCTYPYE HTML>
<html lang="pl">
<head> 
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>Bank</title>
</head>
<body>

Logowanie

	<form action="zaloguj.php" method="post">

		Login:<br /><input type="text" name="login"/> <br />
		Hasło:<br /><input type="password" name="haslo"/> <br /><br />
		
		<input type="submit" value="Zaloguj się jako Uzytkownik"/>
		
		
	</form>

	<form action="zalogujadmin.php" method="post">

		Login:<br /><input type="text" name="loginadmin"/> <br />
		Hasło:<br /><input type="password" name="hasloadmin"/> <br /><br />
		
		<input type="submit" value="Zaloguj się jako Administrator"/>
		
		
	</form>
	
<?php
	if(isset($_SESSION['blad']))
		echo $_SESSION['blad'];
?>

</body>	
</html>	