<?php
$link = mysqli_connect('127.0.0.1', 'root', '123456', 'rush00');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$sql = "INSERT INTO tbl_user(email, passwd, ful, hash, act)
	VALUES ('springjulian@gmail.com', 'password', 'Julian Spring', '1', 'FALSE')";
mysqli_query($link, $sql);
?>