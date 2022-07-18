<?php
  //自動車クラスの呼び出し
  require_once("car.php");
  //インスタンス生成
  $car = new Car();
  
  //ナンバー、スピードの設定
  $car->number = "あ12-34";
  $car->speed = 50;

  //自動車の走行と停車
  $car->drive();
  $car->stop();
?>
