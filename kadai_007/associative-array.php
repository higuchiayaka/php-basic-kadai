<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // 連想配列に値を代入する
       $food_item = ['name' => 'onion', 'price' => 200, 'weight' => '160'];


       // 改行する
       echo '<br>';

      
       // 連想配列の値を出力する
       print_r($food_item);


       ?>
   </p>
</body>

</html>