<?php
	session_start();
	$_SESSION['item']=$_POST[item];
	$_SESSION['price']=$_POST[price];
	$_SESSION['num']=$_POST[num];
	include "./config.php";
	$total = $_POST[price] * $_POST[num];
	if($total != 0) {
		echo "Hi~";
		echo "<br>";
		echo "you buy $_POST[item]";
		echo "<br>";
		echo "price: $_POST[price]";
		echo "<br>";
		echo "number: $_POST[num]";
		echo "<br>";
		echo "total price: $total";
		echo "<br>";
		echo "<form action=\"finish.php\" method=\"post\">
			<input type=\"submit\" name=\"submit\">
			</form>";
	}else{
		echo "thank you for purchasing.";
	}
?>
