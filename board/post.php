<?php
require_once ("validate.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>投稿画面</title>
</head>
<body>
    <h1>投稿画面</h1>
    <form method="post" action="">
        <p>名前</p>
        <input type="text" name="name" value="<?php echo $name ?>">
        <?php if ($errors["name"] === BLANK) { ?>
            
            <p>※名前を書け</p>
        <?php } ?>

        <?php if ($errors["name"] === MAX_LENGTH) { ?>
            <p>※10文字以内で書け</p>
        <?php } ?>

        <p>投稿内容</p>
        <p><textarea name="content" cols="50" rows="10" ></textarea></p>
        <?php if ($errors["content"] === BLANK) { ?>
            
            <p>※投稿内容を書け</p>
        <?php } ?>

        <?php if ($errors["content"] === MAX_LENGTH) { ?>
            <p>※140文字以内で書け</p>
        <?php } ?>

        <div class="padding-top20"></div>

        <input class="btn-square-little-rich" type="submit" value="投稿する">
    </form>
</body>
</html><?php
require_once ("validate.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>投稿画面</title>
</head>
<body>
    <h1>投稿画面</h1>
    <form method="post" action="">
        <p>名前</p>
        <input type="text" name="name" value="<?php echo $name ?>">
        <?php if ($errors["name"] === BLANK) { ?>
            
            <p>※名前を書け</p>
        <?php } ?>

        <?php if ($errors["name"] === MAX_LENGTH) { ?>
            <p>※10文字以内で書け</p>
        <?php } ?>

        <p>投稿内容</p>
        <p><textarea name="content" cols="50" rows="10" ></textarea></p>
        <?php if ($errors["content"] === BLANK) { ?>
            
            <p>※投稿内容を書け</p>
        <?php } ?>

        <?php if ($errors["content"] === MAX_LENGTH) { ?>
            <p>※140文字以内で書け</p>
        <?php } ?>

        <div class="padding-top20"></div>

        <input class="btn-square-little-rich" type="submit" value="投稿する">
    </form>
</body>
</html>