<?php
  $a = ["apple"=>"リンゴ", "banana"=>"バナナ", "orange"=>"オレンジ"];
  foreach ($a as $key=>$value){
    echo $key . ":" . $value ."<br>";
  }
  echo "<br>";

  $a = ["犬", "猫", "サル"];
  foreach ($a as $key=>$value){
    echo $key . ":" . $value ."<br>";
  }
?>