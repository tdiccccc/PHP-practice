<?php
  function min_number($n1, $n2){
    if ($n1 < $n2){
      return $n1;
    } else {
      return $n2;
    }
  }

  $a = 10;
  $b = 5;
  echo "\$a={$a}<br>\$b={$b}<br>";

  $ans = min_number($a, $b);

  echo "\$aと\$bのうち最小のものは{$ans}です。";
?>