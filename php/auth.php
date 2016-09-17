<?php

	function auth($login, $passwd)
	{
		session_start();
		$conn = mysqli_connect("127.0.0.1", "root", "15891589");
		mysqli_select_db($conn, "rush00");

		$hashed = hash("whirlpool", "kyriakos".$passwd);
		if (!($quer = mysqli_query("SELECT id FROM tbl_users WHERE email = '$email'
			&& passwd = '$hashed';")))
			echo "Query error " . mysql_error($conn);

		if (mysqli_num_rows($conn, $quer) > 0)
			return true;
		return false;
	}

?>
