<?php
  $item = $_REQUEST[item];
  $number = $_REQUEST[number];
  $price = $_REQUEST[price];
  $total = $number * $price;
  echo "you buy $item<br />price: $price<br />number: $number<br />total: $total<br />";
?>
