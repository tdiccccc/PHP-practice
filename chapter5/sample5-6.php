<?php
  function match_zip($zip){
    if (preg_match("/^[0-9]{3}-[0-9]{4}$/",$zip) == 1){
      echo "{$zip}は郵便番号です。<br>";
    } else {
      echo "{$zip}は郵便番号ではありません。<br>";
    }
  }
  match_zip("101-0051");
  match_zip("1071-0051");
  match_zip("1010051");
  match_zip("13-0051-2251");
  ?>