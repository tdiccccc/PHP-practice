<?php
  //挿入・追加する値のチェックする関数の定義
  function check_input($id, $name, $grade, &$error) {
    $error = "";    
    //空欄がないかどうかのチェック
    if($id === "" or $name === "") {
      $error = "入力されていない値があります。";
      return false;
    }
    //idが正しく入力されているかをチェック
    if (preg_match("/^[1-3][0-9]{3}$/", $id) != true) {
      $error = "idには1~3で始まる4桁の整数を入力してください";
      return false;
    }
    return true;
  }
?>