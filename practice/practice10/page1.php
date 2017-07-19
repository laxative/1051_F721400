<?php
  session_start();
  $url = "https://www.google.com.tw/search?q=".$_POST['keyword'];
  $out = file_get_contents($url);
  $store_file_name = "./search_result.html";
  $store_file = fopen($store_file_name,"w") or die("cannot open");
  $fout = fwrite($store_file,$out);

  $_SESSION['out'] = $out;
  fclose($store_file);

  echo "done.";
  echo "<form action=\"page2.php\" method=\"post\"><input type=\"submit\" name=\"Submit\" value=\"go\"></form>"
?>
