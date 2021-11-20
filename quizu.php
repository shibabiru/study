<?php 
require_once('quizu_validate.php');

if($_SERVER["REQUEST_METHOD"] === "GET") {
    $wrongs = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quizu</title>
</head>
<body>
<h1>クイズ</h1>
<form action="" method="post">
    <p>Q.私の飼っていた犬の種類は？</p>
    <input type="text" name="q1" value="<?php echo $q1 ?>">
    <?php if(in_array("q1", $wrongs)) { ?>
        <p>違います！！</p>
    <?php } ?>
    <?php if(in_array("q1", $corrects)) { ?>
        <p>正解！！</p>
    <?php } ?>

    <p>Q.私の行った国を全て答えなさい</p>
    <input type="checkbox" name="q2[]" value="1">デンマーク
    <input type="checkbox" name="q2[]" value="2">ニュージーランド
    <input type="checkbox" name="q2[]" value="3">オーストラリア
    <input type="checkbox" name="q2[]" value="4">スウェーデン
    
    <?php if(in_array("q2", $wrongs)) { ?>
        <p>違います！！</p>
    <?php } ?>
    <?php if(in_array("q2", $corrects)) { ?>
        <p>正解！！</p>
    <?php } ?>
    
    <p>Q.私の好きなコーヒーはどれか答えなさい</p>
    <input type="radio" name="q3" value="1">コロンビア
    <input type="radio" name="q3" value="2">ブラジル
    <input type="radio" name="q3" value="3">エチオピア<br>
    
    <?php if(in_array("a3", $wrongs)) { ?>
        <p>違います！！</p>
    <?php } ?>
    <?php if(in_array("a3", $corrects)) { ?>
        <p>正解！！</p>
    <?php } ?>
    

    <p><input type="submit" value="送信"></p>

</form>

</body>
</html>
