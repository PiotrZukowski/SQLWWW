<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Rejestroanie nowego urzytkownika</title>
	<meta charset=utf-8 />
</head>
<body>
	<p>Dodanie urzytkownika</p>
<?php
$imie = $_REQUEST["imie"];
$nazwisko = $_REQUEST["nazwisko"];
$login = $_REQUEST["login"];
$haslo = $_REQUEST["haslo"];
$mail = $_REQUEST["mail"];
require_once("connect_dane.php");
$haslo = md5($haslo);
$status = 1;
srand(time());
$kod = uniqid(rand());
$serwer = mysqli_connect($host, $user, $password, $baza);
if($serwer){
	$wynik = $serwer -> query("INSERT INTO users
	(imie, nazwisko, login, haslo, kod, status, mail)
	VALUES ('$imie', '$nazwisko', '$login', '$haslo', '$kod', '$status', '$mail')");
	if($wynik){
		$list ="Dziękujemy za rejestracje w naszym serwisie.
		Aby potwierdzić rejestrację kliknij poniższy link
		
			http://localhost/strona/reboot/potwierdzenie.php?kod=$kod
		
		W przeciwnym wypadku zignoruj ten mail.";
		$from = "ja@ktotam.pl";
		$headers = "From: ".$from;
		mail($mail, "Witamy w serwisie RAJ", $list, $headers);
		echo "na twoją poczte został wysłany link aktywacyjny";
	}
	else{
		echo "Użytkownik NIE zostałdodany do bazy";
	}
}
else{
	echo "Database connection ERROR";
}
?>
</body>
</html>