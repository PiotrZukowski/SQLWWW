<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Aktywacja konta</title>
	<meta charset="utf-8"/>
</head>
<body>
<p> Aktywacja konta nowego użytkownika
<?php
$kod = $_REQUEST["kod"];
require_once("connect_dane.php");
$serwer = mysqli_connect($host,$user,$password,$baza)
if($serwer){
	$wynik = $serwer -> query("UPDATE users SET status = 2 WHERE kod = '$kod'");
	mysqli_close($serwer);
	if($wynik){
		echo "Konto zostało aktywowane";
	}
}
else{
	echo "Database connection ERROR";
}
?>
</body>
</html>
