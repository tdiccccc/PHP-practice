<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>配列からリストを作る</h1>
  <ul>
    <?php
      $country = ["日本", "アメリカ", "中国"];
      foreach($country as $v){
        echo <<<LOOP
          <li>{$v}</li>
        LOOP;
      }
    ?>
  </ul>
</body>
</html>