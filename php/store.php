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
				echo "<li><a href='login.php'> Login </a></li>"; ?>
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

  $conn = mysqli_connect("127.0.0.1", "root", "123456");
  if (!$conn)
    die("Connection failed: " . msyqli_connect_error());

   mysqli_select_db($conn, "rush00");
   $sql = "SELECT * FROM tbl_store";
   $result = mysqli_query($conn, $sql) or die("Query to show fields from table failed");

   $types = array();
   print_r($result);
   $types = array();

while ($row = mysqli_fetch_assoc($result))
{
}
?>
<!-- Grid for products -->

</body>
</html>
