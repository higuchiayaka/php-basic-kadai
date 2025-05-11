<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_011</title>
</head>

<body>
  
<?php
  // 連想配列を作成
  $food = ['名前' => '玉ねぎ', '値段' => '200', '値' => '北海道'];

  //  foreachでキーと値を入力
  foreach ($food as $key => $value) {
    echo $key . ':' . $value . '<br>';
  }
?>



</body>

</html>