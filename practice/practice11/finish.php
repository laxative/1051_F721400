<?php
	session_start();
	include "./config.php";
	$id = $_SESSION["id"];
	$item = $_SESSION["item"];
	$price = $_SESSION["price"];
	$num = $_SESSION["num"];
	$connection = mysql_connect($host, $user, $upwd) or die ("Unable to connect!");
		mysql_select_db($db) or die ("Unable to select database!");

		$query = "INSERT INTO `item` (`id`, `name`, `price`, `amount`) VALUES('".$id."','".$item."','".$price."','".$num."')";
		$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
		mysql_close($connection);
	
?>
