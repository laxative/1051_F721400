<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if($_POST["num"]*$_POST["price"]!=0) {
      	echo "<h2>Your Input:</h2>";
      	echo "you buy: ";
      	echo $_POST["thing"];
      	echo "<br>";
      	echo "num: ";
      	echo $_POST["num"];
      	echo "<br>";
      	echo "price: ";
      	echo $_POST["price"];
      	echo "<br>";
      	echo "total price: ";
		echo $_POST["num"]*$_POST["price"];
		echo "<br>";
		echo "<form action=\"result.php\" method=\"post\"><input type=\"submit\"></form>";
	  } else {
		echo "Thanks for buying.";
	  }
    ?>
  </body>
</html>
