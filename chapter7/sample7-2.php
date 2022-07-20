<?php

  try {
    $db = new PDO('mysql:host=localhost;dbname=school', 'root','root');

    $id = 3003;
    $name = "山崎聡";
    $grade = 3;

    $stmt = $db->prepare("INSERT INTO student VALUES(?, ?, ?);");
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    $stmt->bindParam(2, $name, PDO::PARAM_STR);
    $stmt->bindParam(3, $grade, PDO::PARAM_INT);

    $res = $stmt->execute();

    $db = null;
  } catch(PDOException $e) {
      echo "データベース接続失敗<br>";
      echo $e->getMessage();
  }

?>