<?php
/*
 * Cart: include cart.php then use the below
 * Cart is stored as a serialize array
 * functions to add/remove/recieve the cart
 * TODO Format for recieving the cart needs to be discussed
 * TODO HAS NOT BEEN TESTED
 */

function add_to_cart($item_id)
{
	$conn = mysqli_connect("127.0.0.1", "root", "15891589");
	mysqli_select_db($conn, "rush00");

	if (!$_SESSION["cart"])
		$_SESSION["cart"] = array();
	$len = 0;
	foreach ($_SESSION["cart"] as $item)
		$len++;
	$query_fetch = mysqli_query($conn,
		"SELECT * FROM tbl_store WHERE id = '$item_id';");
	$item = mysqli_fetch_assoc($query_fetch);
}


?>
