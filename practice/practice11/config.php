<?php
	$host = "localhost";
	$user = "root";
	$upwd = "1234";
	$db = "student";

	$link = mysql_connect($host,$user,$upwd) or die("Unable to connect!");
	mysql_select_db($db, $link) or die("Unable to select database!");

?>
