<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>九九の計算</h1>

  <?php

    for ($i = 1; $i <= 9; $i ++) {
      for ($j = 1; $j <= 9; $j ++) {
        $ans = $i * $j;
        echo "{$i} x {$j} = {$ans}&nbsp;&nbsp;";//&nbsp = 半角スペースです。
      }
      echo "<br>";
    }
  ?>
</body>
</html>