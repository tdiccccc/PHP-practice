<?php
  $temp = -1;

  if ($temp >= 100){
    echo "水の温度{$temp}度<br>水蒸気（気体）です。";
  } else if ($temp <= 0){
    echo "水の温度{$temp}度<br>氷（個体）です。";
  } else {
    echo "水の温度{$temp}度<br>水（液体）です。";
  }
?>