<?php
require_once"connect.php";
$conn= @new mysqli($host, $db_user, $db_password, $db_name);

if($conn->connect_errno!=0)
{
    echo"Error";
}
else
{
$zamowienie=$_POST['spraw'];   
if(!isset($zamowienie)){
    echo"coś";
}
else{
$sql="Select * FROM uzytkownicy WHERE zamowienia='$zamowienie'";

if($rezultat=@$conn->query($sql))
{
$ilu=$rezultat->num_rows;
if($ilu>0)
{
$wiersz=$rezultat->fetch_assoc();
$rezultat->close();
echo "<h1 class='title'> <img src='ekantynalogo.png'> </h1> </br>";
echo"<h1 class='box'>Wykonywanie zamówienia:</h1>";
echo"</br>";
echo "<h1 class='box'>$zamowienie</h1>";
echo"</br>";
$query="UPDATE uzytkownicy SET zamowienia=''  WHERE zamowienia='$zamowienie'";
mysqli_query($conn,$query);
}
else{
echo "<img class='box' src='ekantynalogo.png'>";
echo "</br>";
echo "<h2 class='box'>Takie zamowienie nie istnieje!</h2>"; 
}

$conn->close();
}
else{
   echo "Błąd"; 
}
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="icon" href="favicon32.png" sizes="32x32" type = "image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdzanie</title>
    
</head>
<body>   


    </br>
<div class="box">
</br>
<a href="index.php">Wróć na stronę sprawdzania</a>
</br>
E-Kantyna 2023
</br></br>
</div>

</body>
</html>