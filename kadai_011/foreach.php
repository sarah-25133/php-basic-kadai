<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_011</title>
</head>
<body>

    <p>
        <?php
        $product_data = [ '名前' => '玉ねぎ', '価格' => 200, '産地' => '北海道'];

        // 連想配列$product_dataのキーと値を1つずつ順番に出力する
        foreach ($product_data as $key => $value) {
            echo "{$key}：{$value}<br>";
        }
        ?>
    </p>
    
</body>
</html>