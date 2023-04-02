<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	else{
		require_once "connect.php";
		$conn = new mysqli($host, $db_user, $db_password, $db_name);
			if($conn->connect_errno!=0)
{
    echo"Error";
}
			else{
		$id=$_SESSION['id'];
        $user=$_SESSION['user'];
        $wybor=$_POST['wybor'];
			if (!isset($wybor)) {
			echo "<h2>Nie wybrałeś zamówienia-Błąd</h2>";
			mysqli_close($conn);
			$_SESSION = array();
			session_destroy();
		}
			else{
			$wynik=$wybor.$id.rand(0,255);
			$final="UPDATE uzytkownicy SET zamowienia='$wynik'  WHERE id='$id'";
			mysqli_query($conn,$final);
			echo "<h1 class='title'> <img src='ekantynalogo.png'> </h1>";

            echo "<div class='box'> <h1>Twoje zamówienie zostało wykonane</h1>
 			<h2>Jest to $wybor</h2
			<h2>Twój kod zamówienia to</h2>
 			<h2>$wynik</h2> </div>";

			mysqli_close($conn);
			$_SESSION = array();
			session_destroy();
			}
			}
			}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="icon" href="favicon32.png" sizes="32x32" type = "image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Kantyna - Finalizacja</title>


</head>
<body>

</br> </br> </br>

<div class="box">
<h2>Dziękujemy za skorzystanie z naszej usługi!</h2>
<a href="zaloguj.php">Wróć do strony logowania</a>
<h4 id="f">E-Kantyna 2023</h4>
</div>
</body>
</html>