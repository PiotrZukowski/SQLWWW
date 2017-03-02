<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Rejestrowanie nowego użytkownika</title>
	<meta charset="utf-8" />
</head>
<body>
	<p>Formularz rejestracji nowego użytkownika</p>
	
<?php
echo <<<KONIEC
<form action="dodaj_usera.php" method="post">
Imie:&nbsp;<input type="text" name="imie" value="" /><br />
Nazwisko:&nbsp;<input type="text" name="nazwisko" value="" /><br />
Login:&nbsp;<input type="text" name="login" value="" /><br />
Hasło:&nbsp;<input type="password" name="haslo" value="" /><br />
Mail:&nbsp;<input type="email" name="mail" value="" /><br />
<input type="submit" value="Wyślij" />
</form>
KONIEC;
?>
</body>
</html>