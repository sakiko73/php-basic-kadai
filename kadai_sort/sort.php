<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編 課題_sort</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array,$order =true){
            // 昇順(sort)、降順(rsort)ソート
            if($order){
                sort($array);
            } else{
                rsort($array);
            }

            // ソート後の配列を出力、改行する
            foreach ($array as $element) {
                echo $element .'<br>';
            }
        }

        // 対象の配列
        $nums =[15,4,18,23,10];

        // 昇順でソート、出力
        echo'昇順ソートします<br>';
        sort_2way($nums,TRUE);

        // 降順ソート、出力
        echo'<br>降順ソートします<br>';
        sort_2way($nums,false);
        ?>

    </p>
</body>

</html>

<!-- $nums = [15, 4, 18, 23, 10]; -->
