<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Rejestrowanie nowego użytkownika </title>
	<meta charset="utf-8" />
</head>
<p>Formularz rejestracji nowego użytkownika</p>
<?php
echo <<<KONIEC
<form>
imie: &nbsp; <input type="text" name="imie" value="" /><br />
nazwisko: &nbsp; <input type="text" name="nazwisko" value=""/><br /> 
login: &nbsp; <input type="text" name="login" value=""/><br />
mail: &nbsp; <input type="email" name="email" value=""/><br />
haslo: &nbsp; <input type="password" name="haslo" value=""/><br />
kod: &nbsp; <input type="text" name="kod" value=""/><br />

<input type="submit" value="ŚLIJ TO">

</form>

KONIEC;

?>
</body>
</html>