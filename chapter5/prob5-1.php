<?php
  function showStrs($num, $str){
    for ($i = 0; $i < $num; $i++){
      echo $str . "<br>";
    }
  }

  showStrs(5,"HelloPHP");
?>