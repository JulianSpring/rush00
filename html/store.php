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
            <li><a href="#contact">Contact</a></li>
            <li><a href="#news">About</a></li>
            <li><a href="#contact">Browse</a></li>
            <li><a href="../index.php">Home</a></li>
            <li class="icon">
                <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
            </li>
        </ul>
    </section>
        <!-- table content -->
    <html>
<head>
  <title>
    PHP MySQL Test
  </title>
</head>
<body>

<?php
  $db_host = '127.0.0.1';
  $db_user = 'root';
  $db_pwd = '123456';
  $database = 'rush00';
  $table_name = 'tbl_store';

  if (!mysql_connect($db_host, $db_user, $db_pwd)) {
    die("Can't connect to database");
  }

  if (!mysql_select_db($database)) {
    die("Can't select database");
  }

  $result = mysql_query("SELECT * FROM $table_name") or die("Query to show fields from table failed");
  $fields_num = mysql_num_fields($result);

  echo "<h2>Table: $table_name</h2>";
  echo "<table border='1'><tr>";

  for($i=0; $i<$fields_num; $i++) {
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
  }
  echo "</tr>\n";

  while($row = mysql_fetch_row($result)) {
    echo "<tr>";
    foreach($row as $cell) {
      echo "<td>$cell</td>";
    }
    echo "</tr>\n";
  }
  mysql_free_result($result);
?>

</body>
</html>
</body>

</html>