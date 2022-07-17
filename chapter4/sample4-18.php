<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <title>Document</title>
</head>
<body>
  <h1>簡単なテーブルのサンプル</h1>
  <table border="1" style="border-collapse:collapase">
    <tr>
      <th>名前</th>
      <th>性別</th>
      <th>年齢</th>
      <th>住所</th>
      <?php
        $member = [
          ["山田太郎", "男", "18", "東京都"],
          ["佐藤花子", "女", "16", "大阪府"],
          ["鈴木次郎", "男", "17", "愛知県"]
        ];
        foreach ($member as $v) {
          echo <<<LOOP
          <tr>
            <td>{$v[0]}</td>
            <td>{$v[1]}</td>
            <td>{$v[2]}</td>
            <td>{$v[3]}</td>
          </tr>
          LOOP;
        }
      ?>
    </tr>
  </table>
</body>
</html>