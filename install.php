<?PHP
	
	/* Connect to server */
	$GLOBALS["conn"] = mysqli_connect("127.0.0.1", "root", "15891589");
	if (!$GLOBALS["conn"])
		die("Connection failed: " . msyqli_connect_error());

	/* Create database rush00 */
	$sql_create = "CREATE DATABASE IF NOT EXISTS rush00";
	if (!mysqli_query($GLOBALS["conn"], $sql_create))
		echo "Error creating database\n";
	mysqli_select_db($GLOBALS["conn"], "rush00");

	/* Create table tbl_users */
	$sql_create_table = 
		"CREATE TABLE IF NOT EXISTS tbl_users
		( id int NOT NULL AUTO_INCREMENT,
		email varchar(128) NOT NULL,
		passwd varchar(512) NOT NULL,
		full_name varchar(128) NOT NULL,
		PRIMARY KEY (id)
		);";
	if (!mysqli_query($GLOBALS["conn"], $sql_create_table))
		echo "Error creating table " . mysqli_error($GLOBALS["conn"]) . "\n";
?>
