<?php
  function avg($n1, $n2){
    $n = ($n1 + $n2) / 2.0;
    return $n;
  }

  $num1 = 11;
  $num2 = 16;

  $avg1 = avg($num1, $num2);
  $avg2 = avg(1.1, 5.2);

  echo "{$num1}と{$num2}の平均値は{$avg1}です。<br>";
  echo "1.1と5.2の平均値は{$avg2}です。<br>";
?>