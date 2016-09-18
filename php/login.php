<?php

/*
 * $_POST VARIABLES: email, passwd
 */

include("auth.php");
session_start();
if (!empty($_POST))
{
	if (auth($_POST["email"], $_POST["passwd"], "tbl_users"))
	{
		$_SESSION["logged_on_user"] = $_POST["email"];
		header("Location: ../index.php");
	}
	else
	{
		header("Location: login.php");
	}
}
else
{
	echo '
	<html>
		<body>
		<form action="login.php" method="post">
		Email: <br />
		<input type="text" name="email" value=""/> <br />
		Password: <br />
		<input type="text" name="passwd" value="" /> <br />
		<input type="submit" name="submit" value="OK" /> 
		</form>
		</body>
		</html>
		';
}
?>
