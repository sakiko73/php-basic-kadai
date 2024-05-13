<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_課題_016</title>
</head>

<body>

    <p>
        <?php

        // クラスを定義する
        class Food{
            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct($name,$price) {
                $this->name = $name;
                $this->price = $price;  
            }
            // メソッド
            public function show_price() {
                echo $this->price . '<br>';
            }

        }

        // インスタンス化する
        $food = new Food('potato',250);

        // 各プロパティの値を出力
        print_r($food);
        ?>
    </p>

    <p>
        <?php
        // クラスを定義
        class Animal{
            // プロパティを定義
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義
            public function __construct($name,$height,$weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッド
            public function show_height() {
                echo $this->height . '<br>';
            }
        }
        // インスタンス化する
        $animal = new Animal('dog',60,5000);

        // 各プロパティの値を出力
        print_r($animal);

        // メソッド
        $food->show_price();
        $animal->show_height();
        ?>
    </p>

</body>

</html>

