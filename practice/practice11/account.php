<html>
<?php
	session_start();
	$_SESSION['id'] = $_POST[id];
	include "./config.php";

	function valid($user, $pwd) {
		if($user and $pwd) {
			$result = mysql_query("SELECT * FROM 'user' WHERE id= '$user'", $link);
			if($rows = mysql_fetch_array($result,MYSQL_ASSOC)) {
				if($rows[passwd] == $pwd) {
					return 1;
				}
			}
			return 0;
		}
	}

	if(valid($_POST[id],$_POST[pwd])) {
		echo "Welcome, $_POST[id]";
		echo "<br>";
		echo "<form action=\"list.php\" method=\"post\">
			item: <input type=\"text\" name=\"item\"><br>
			price: <input type=\"text\" name=\"price\"><br>
			num: <input type=\"text\" name=\"num\"><br>
			<input type=\"submit\" name=\"submit\">
			</form>";
	}else{
		echo "wrong account or password.<br>Please check again.";
	}

?>
</html>
