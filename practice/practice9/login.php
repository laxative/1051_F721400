<html>
  <head></head>
  <body>
	<?php
		if($_POST["account"] == "laxative" && $_POST["pwd"] == "123") {
			header('Location: product.php');
		}else{
			echo "Account or password wrong!!";
		}
	?>
  </body>
</html>
