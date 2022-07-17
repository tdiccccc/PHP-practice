<?php
  function max_number($n1, $n2){
    if ($n1 > $n2){
      return $n1;
    }

    return $n2;
  }

  function stars($n){
    for ($i = 0; $i < $n; $i++){
      echo "★";
    }
    echo "<br>";
    return;
  }

  function hello(){
    echo "HelloPHP<br>";
    return;
  }

  echo "*** max_number関数 ***<br>";
  $num1 = 4;
  $num2 = 3;

  $max = max_number($num1, $num2);
  echo "{$num1}と{$num2}のうち大きいのは{$max}です。<br>";

  stars(7);

  hello();
?>