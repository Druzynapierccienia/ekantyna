<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="icon" href="favicon32.png" sizes="32x32" type = "image/png">
	<title>E-Kantyna</title>
</head>

<body>
	
<h1 class="title"> <img src="ekantynalogo.png"> </h1> </br>

<div class="box">

<?php
	echo "<h2>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</h2>';
	echo "</br>";
	echo "<h2>Moje ostatnie zamówienie:".$_SESSION['zamowienia'].'</h2>';
?>

<form action="final.php" method="post">
<h2>Złóż zamówienie:</h2>
<input type="radio" name="wybor" value="zupa">Tylko Zupa</input></br>
<input type="radio" name="wybor" value="drugie danie">Drugie danie</input></br>
<input type="radio" name="wybor" value="cały obiad">Cały obiad</input></br>
</br>
<input type="submit"></input>
</br> </br>
</form>

</div>

</body>
</html>