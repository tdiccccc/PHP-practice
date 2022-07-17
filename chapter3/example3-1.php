<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>文字列変数へのデータの追加</h1>
  <p>
    <?php
      // $sに初期値を代入
      $str = "Hello";
      // $strの末尾に"World"を追加
      $str .= "World";
      //結果を表示
      echo $str;
    ?>
  </p>
</body>
</html>