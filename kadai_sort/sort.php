<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          // ソートする配列を宣言
          $nums = [15, 4, 18, 23, 10 ];
        

          function sort_2way($array, $order) {
            if ($order) {
              sort($array);  // 昇順に並べ替える
            } else {
              rsort($array); // 降順に並べ替える
            }
            return $array;   // 並び替えた配列を返す
            }

          // 昇順（true を渡す）
            $sorted = sort_2way($nums, true);

            echo "昇順にソートします<br>";
            foreach ($sorted as $value) {
              echo $value . "<br>";
            }

            // 降順（false を渡す）
            $sorted_desc = sort_2way($nums, false);

            echo "降順にソートします<br>";
            foreach ($sorted_desc as $value) {
              echo $value . "<br>";
            }

        ?>
            </p>
</body>

</html>