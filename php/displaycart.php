<?php

echo'
<html>

<head>
<title>ARQ | Store</title>
<link href="../css/mystyle.css" rel="stylesheet">
<link href="../css/store.css" rel="stylesheet">
</head>
<body>
<body id="page-id" style="background-image: url()">
<!-- Head =========================== -->
<section class="main-header">
<ul class="topnav" id="myTopnav">
<li><a href="../index.php">Home</a></li>
<?php if (!$_SESSION["logged_on_user"] || $_SESSION["logged_on_user"] == "")
echo "<li><a href=\'login.php\'> Login </a></li>";
else
	echo "<li><a href=\'logout.php\'> Logout </a></li>"; ?>
</ul>
	</section>
	<!-- table content -->
	<body>';

if (empty($_SESSION["cart"]))
	echo "<h1 align='center'> Your cart is empty </h1>";
else
	echo "<h1 align='center'> My Cart </h1>";
	foreach($_SESSION["cart"] as $item)
	{
		echo $item["name"]." R".$item["price"] ."<br />";
	}
	if ($_SESSION["logged_on_user"] == "")
		echo "<input type='submit' value='Please log in to validate' action='login.php'/> <br />";
	else
	{
		echo "<input type='submit' value='Validate' action='store.php'/>";
	}
?>
