<?php
  session_start();
  $reg = '/<\s*a\s*href="([^\"]+)"/';
  $matchresult = preg_match_all($reg, $_SESSION["out"], $match_array, PREG_SET_ORDER);

  foreach ($match_array as $found) {
    echo $found[1];
  }
?>
