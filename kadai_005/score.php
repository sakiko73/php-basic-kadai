<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_課題_005</title>
</head>
<body>
    <p>
         <?php
         // 変数に値を代入する
         $score_1 = '80';
         $score_2 = '60';
         $score_3 = '55';
         $score_4 = '40';
         $score_5 = '100';
         $score_6 = '25';
         $score_7 = '80';
         $score_8 = '95';
         $score_9 = '30';
         $score_10 = '60';

 
         // 変数の中身を出力する
         echo $score_1;
         echo '<br>';
         echo $score_2;
         echo '<br>';
         echo $score_3;
         echo '<br>';
         echo $score_4;
         echo '<br>';
         echo $score_5;
         echo '<br>';
         echo $score_6;
         echo '<br>';
         echo $score_7;
         echo '<br>';
         echo $score_8;
         echo '<br>';
         echo $score_9;
         echo '<br>';
         echo $score_10;
         echo '<br>';
         ?>
    </p>

    <p>合計点
         <?php
         echo 80+60+55+40+100+25+80+95+30+60;
        ?>
    </p>
    <p>平均点
        <?php
        // 変数に値を代入する
        $total_score = 625;

        // 変数と数値を計算し、その結果を出力する
        echo $total_score / 10;
        ?>
    </p>

</body>
</html>