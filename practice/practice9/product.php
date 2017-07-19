<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "Welcome laxative~";
    ?>
      <form id="form" action="result.php" method="post">
    	<div id="user"></div>
    	商品名稱: <br>
    	<input type="text" name="thing"> <br>
    	數量: <br>
    	<input tpye="text" name="num"> <br>
    	價格: <br>
    	<input type="text" name="price"> <br><br>

      <input type="submit" name="submit">
  </body>
</html>
