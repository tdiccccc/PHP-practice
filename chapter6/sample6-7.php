<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>都道府県のリスト</h1>
  <?php
    require_once("ullist.php");

    $ls = new UlList();
    $data = ["東京都","大阪府","愛知県"];
    $ls->show($data);
  ?>
</body>
</html>