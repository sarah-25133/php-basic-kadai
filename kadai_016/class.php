<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>

<p>
        <?php
        // クラスを定義する
        class Food {
              // プロパティを定義する
              private $name;
              private $price;
              // メソッドを定義する
              public function show_price() {
                     echo $this->price;
              }
              // コンストラクタを定義する
              public function __construct(string $name, int $price) {
                     $this->name = $name;
                     $this->price = $price;
              }
            }

            // インスタンス化する
            $food = new Food('potato', 250);


            class Animal {
                // プロパティを定義する
                private $name;
                private $height;
                private $weight;
                // メソッドを定義する
                public function show_height() {
                       echo $this->height;
                }
                // コンストラクタを定義する
                public function __construct(string $name, int $height, int $weight) {
                       $this->name = $name;
                       $this->height = $height;
                       $this->weight = $weight;
                }
              }
  
              // インスタンス化する
              $animal = new Animal('dog', 60, 5000);


              // インスタンス$userの各プロパティにアクセスする
              print_r($food);
              echo '<br>';
              print_r($animal);
              echo '<br>';
              // メソッドにアクセスして実行する
              echo $food->show_price() . '<br>';
              echo $animal->show_height() . '<br>';
              
        ?>
</p>

</body>
</html>