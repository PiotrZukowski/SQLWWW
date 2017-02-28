<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Dodawanie nowego użytkownika </title>
	<meta charset="utf-8" />
</head>
<p>Dodawanie użytkownika</p>
<?php
$imie = $_REQUEST["imie"];
$nazwisko = $_REQUEST["nazwisko"];
$login = $_REQUEST["login"];
$haslo = $_REQUEST["haslo"];
$mail = $_REQUEST["email"];
require_once("connect_dane.php");
$haslo= md5($haslo);
$status = 1;
srand(time());
$kod = uniqid(rand());
$serwer = mysqli_connect($host, $user, $password, $baza);
if($serwer)
{
	$wynik = $serwer -> query("INSERT INTO users 
	(imie, nazwisko, login, haslo, kod, status, mail)
	VALUES ('$imie','$nazwisko','$login','$haslo','$kod','$status','$mail')
	");
	if($wynik){}
	else echo '<h3>Uzytkownik nie zostal dodany</h3>';
	
}
else
{
	echo 'brak połączenia z bazą';
}

?>
</body>
</html>