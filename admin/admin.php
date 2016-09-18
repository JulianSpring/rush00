<?php
	
echo "<html>
<head>
<h1 align='center'>Admin</h1>

<style>
	
	div.item {
		border-style: solid;
		border-color: black;
		border-width: 3px;
		float: left;
		height: 2%;
		text-align: center;
	}

	div.row {
		align: horizontal;
		width: 50%
	}
</style>

</head>
<body>";

	function delete_from($table, $id)
	{
		$query = 
			"DELETE FROM $table WHERE id='$id';";
		if (!mysqli_query($conn, $query))
			echo "Error executing delete query";
	}

	$conn = mysqli_connect("127.0.0.1", "root", "15891589");
	mysqli_select_db($conn, "rush00");
	$query_fetch_users = "SELECT * FROM tbl_users;";
	if(!($query_fetch_users = mysqli_query($conn, $query_fetch_users)))
		echo "Error executing query ";
	else
		echo "Executed query";

	echo "<br />
		<h2> Users </h2> <br />
		<b>id	email	full_name </b> <br />";

	while ($row = mysqli_fetch_assoc($query_fetch_users))
	{
		echo "<div class='row'>";
		echo "<div class='item'>" .  $row["id"] . "</div>";
		echo "<div class='item'>".$row["email"]."</div>";
		echo "<div class='item'>".$row["full_name"]."</div>";
		echo "</div>";
		echo "<br />";
	}
echo "</body></html>";
?>
