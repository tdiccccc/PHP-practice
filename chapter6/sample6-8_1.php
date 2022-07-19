<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>セッション値の生成</h1>
  <?php
    session_start();
    $_SESSION["data"] = "PHP";
    echo "<p>セッションID:" . session_id() . "</p>";
    echo "<p>設定した値:{$_SESSION["data"]}</p>";
  ?>
  <a href="sample6-8_2.php">次へ</a>
</body>
</html>