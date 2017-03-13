<?php
if(isset($_COOKIE["zalogowany"]))
{
	$zalogowany = $_COOKIE["zalogowany"];
}
else
{
	$zalogowany = "nie";
	setcookie("zalogowany",$zalogowany,time()+60*60*24);
}

if(isset($_COOKIE["login"]))
	{
		$login = $_COOKIE["login"];
	}
	else
	{
		$login = "anonim";
		setcookie("login",$login, time()+60*60*24);
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if($zalogowany == "tak")
	{
	echo "zalogowany jako:".$login;
	}

else
	{
	echo <<<KONIEC
	<form action="logowanie.php" method="post"> <br /><br />
	Login <input type="text" name="login" value="" /><br /><br />
	Hasło <input type="paswsord" name="password" value="" /><br /><br />
	<input type="submit" name="" value="ślij to " />
	</form>
KONIEC;
	}
?>
</body>

</html>
