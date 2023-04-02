<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: sesja.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="favicon32.png" sizes="32x32" type = "image/png">
	<title>E-Kantyna</title>
</head>

<body>
	<h1 class="title"> <img src="ekantynalogo.png"> </h1> </br>
	
	<div class="box">

		<form action="zaloguj.php" method="post">
	
			</br>
			<input type="text" name="login" placeholder="Login"/> <br /> </br>
			<input type="password" name="haslo" placeholder="Hasło" /> <br /><br />
			<input type="submit" value="Zaloguj się" id="but"/>

		</form>

		<br>
		<a href="rejestracja.php">Zarejstruj się tutaj.</a>

		<img src="anim.gif">
		<br>

<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

	<br>
	</div>

</body>
</html>