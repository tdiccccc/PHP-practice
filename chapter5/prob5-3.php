<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>郵便番号の確認</h1>
  <form method="POST" action="prob5-3.php">
    <p><b>郵便番号を入力してください</b></p>
    <input type="text" name="postalCode" placeholder= "例)101-0051">
    <br>
    <p>
      <?php
        if (isset($_POST["postalCode"])){
          $p = $_POST["postalCode"];
          
          if (preg_match("/^[0-9]{3}-[0-9]{4}$/",$p) == 1){
            echo "{$p}は郵便番号です。<br>";
          } else if ($p == null) {
            echo "値を入力してください。<br>";
          } else {
            echo "{$p}は郵便番号ではありません。<br>";
          }
        }       
      ?>

    </p>
    <input type="submit" value="確認">
  </form>
</body>
</html>