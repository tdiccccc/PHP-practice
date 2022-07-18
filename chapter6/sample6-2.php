<?php
  require_once("car.php");

  $car1 = new Car();
  $car2 = new Car();

  //ナンバー、スピードの設定($car1)
  $car1->number = "あ12-34";
  $car1->speed = 50;

  //自動車の走行と停車($car1)
  $car1->drive();
  $car1->stop();

  //ナンバー、スピードの設定($car2)
  $car1->number = "い56-78";
  $car1->speed = 40;

  //自動車の走行と停車($car2)
  $car1->drive();
  $car1->stop();
?>