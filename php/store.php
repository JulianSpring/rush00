<?php session_start() ?>
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
echo "<li><a href='login.php'> Login </a></li>";
else
	echo "<li><a href='logout.php'> Logout </a></li>"; ?>
<li><a href="displaycart.php">Cart</a></li>
		</ul>
	</section>
		<!-- table content -->
<body>
<!-- drop 
<div class="dropdown-cat">
	<button class="dropbtn">Category</button>
	<div class="dropdown-content">
	  <a href="#">Link 1</a>
	  <a href="#">Link 2</a>
	  <a href="#">Link 3</a>
	</div> -->
  </div> 
<!-- php code -->
<?php

$conn = mysqli_connect("127.0.0.1", "root", "15891589");
if (!$conn)
	die("Connection failed: " . msyqli_connect_error());

mysqli_select_db($conn, "rush00");
$sql = "SELECT * FROM tbl_store";
$result = mysqli_query($conn, $sql) or die("Query to show fields from table failed");

$types = array();
$num_rows = mysqli_num_rows($result);
if ($num_rows > 0)
{
	while ($rows = mysqli_fetch_array($result))
	{
		$URLS[] = array('id' => $rows['id'], 'category' => $rows['category'], 'name' => $rows['name'], 'price'=> $rows['price'], 'image' => $rows['image'] );
	}

}
?>
<!-- Grid for products -->
  <div id="table_admin" class="span7">
		<h3>Discover</h3>

		<table class="table table-striped table-condensed">

				<thead>
				<tr>
				<th>Category</th>
				<th>Name</th>
				<th>Price </th>
				</tr>
				</thead>
			<tbody>
<?php
foreach ($URLS as $URL){
	$id = $URL["id"];
	echo'<tr>';
	echo'<td>'. $URL['category']."</td>";
	echo'<td>'. $URL['name'].'</td>';
	echo'<td>'. $URL['price'].'</td>';
	echo"<td> <input type='submit' method='post' name='cart' value='$id' >addtocart</input> </td>";
	echo'</tr>';
}
?>
			</tbody>


		</table>

	</div>


</body>
</html>
