<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>

<p>
        <?php
        function sort_2way($array, $order) {
            if ($order === TRUE) {
                sort($array);
            } else {
                rsort($array);
            }
            return $array;
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // sort_2way関数を呼び出し、昇順にソート
        echo '昇順にソートします<br>';

        $sorted_array = sort_2way($nums, TRUE);
        foreach ($sorted_array as $num) {
            echo $num . ' <br>';
        }
        echo '<br>';

        // sort_2way関数を呼び出し、降順にソート
        echo '降順にソートします<br>';
        
        $sorted_array = sort_2way($nums, FALSE);
        foreach ($sorted_array as $num) {
            echo $num . ' <br>';
        }
        ?>
</p>

</body>
</html>