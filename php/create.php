<?php
##Create a user account
# Post method. Takes in variables 
# User should only be able to create an account if they are NOT logged in and have tried to check out. 
//include("install.php");

/* Checking to see that all post values are present and are not empty
 * TODO Post values required from html: 'email', 'passwd', 'full_name' 
 */
$i = 0;
foreach ($_POST as $key => $value)
{
	if (($key == "email" && $value != "") || ($key == "passwd" && $value != "")
		|| ($key = "full_name" && $value != ""))
		$i++;
}
if ($i == 3)
{
	$email = $_POST["email"];
	$passwd = hash("whirlpool", $_POST["passwd"]);
	$hash = md5(rand(0, 1000));
}
else
	/* TODO Error */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Penisland | Sign Up</title>
</head>
<body>
	<form>
	<p>Email: </p> <input name="email" value=""/>
	<p>Password </p> <input name="passwd" type="password" value=""/> 
	<p>Full Name : </p>
	</form>>
</body>
</html>
