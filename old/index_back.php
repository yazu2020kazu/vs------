<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>
    <?php 
    echo 'testです';
    
    ;?>

<?php
// 朝のあいさつを出力する関数を作成する
function say_good_morning() {
    echo 'おはようございます！';
    echo '昨日はよく眠れましたか？';
    echo '今日も一日頑張りましょう！';
}

// 関数を呼び出す（1回目）
say_good_morning();

// 関数を呼び出す（2回目）
say_good_morning();
?>
    </p>
</body>
</html>