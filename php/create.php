<?php

## Create a user account
# Post method. Takes in variables 'email', 'passwd', 'full_name'
# User should only be able to create an account if they are NOT logged in. 
$link = mysqli_connect('127.0.0.1', 'root', '123456', 'rush00');
//include("/install.php");

/* Checking to see that all post values are present and are not empty
 * TODO Post values required from html: 'email', 'passwd', 'full_name' 
 */

$check = false; // Check variable to see if input is valid
if (isset($_POST))
{
	if (!isset($_POST["email"]) || $_POST["email"] == "")
	{
		/* TODO User didn't enter an email address */
	}
	else if (!isset($_POST["passwd"]) || $_POST["password"] == "")
	{
		/* TODO User didn't enter a password */
	}
	else if (!isset($_POST["full_name"]) || $_POST["full_name"] == "")
	{
		/* TODO User didn't enter a full name */
	}
	else
		$check = true; /* All values are good so check set to true */
}
else
{
	/* TODO Variables not set, user first opened page, display html form*/
}

if ($check == true && $_SESSION["logged_on_user"] == "")
{
	$email = $_POST["email"];
	$passwd = hash("whirlpool", $_POST["passwd"]);
	$hash = md5(rand(0, 1000));

	/* Check if the user already exists */
	$sql_check = mysqli_query($link, "SELECT id FROM tbl_user WHERE email='$email'';");
}

?>
