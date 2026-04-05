<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
        function sort_2way(array $array, bool $order): void {
        if ($order === true) {
        // 昇順
        sort($array);
        } else {
        // 降順
        rsort($array);
        }

        // 結果を1行ずつ表示
        foreach ($array as $value) {
        echo $value . "<br>"; 
        }
        }

        // 使用例
        $data = [10, 4, 23, 18, 15];

        echo "昇順にソートします。<br>";
        sort_2way($data, true);

        // 改行
        echo "<br>";

        echo "降順にソートします。<br>";
        sort_2way($data, false);
      ?>
    </p>
</body>

</html>