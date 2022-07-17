<?php
  $a = (int)2;
  echo "\$a={$a}<br>";
  if ($a > 0){
    echo "\$aは正の整数です";
  } else if ($a < 0) {
    echo "\$aは負の数です";
  } else if ($a === 0){
    echo "\$aは0です";
  }
?>