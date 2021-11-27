<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Board</title>
</head>
<body>
    <h1>投稿一覧</h1>
    <a href="post.php" class="btn-square-little-rich blue-btn">投稿する</a>

    <div class="padding-bottom20"></div>

    <!--  ↓ここから  -->
    <div class="flex-container">
        <p class="flex-item"><span class="bold">投稿者</span>：名前名前</p>
        <p class="flex-item"><span class="bold">投稿日時</span>：2021-12-31</p>
    </div>
    <div class="post-content margin-bottom10">
        <p class="bold margin-bottom10">投稿内容</p>
        <p>adfasdfaefjaisdfjaiongioaveiorvgkanerifiojwaeiofjaiodjfaiwehgioajsdfmaiwehgviaohwerioghaidsgnkvadfughaiejfajs</p>
    </div>

    <div class="flex-container">
        <form action="post.php" class="margin-right10">
            <input type="submit" name="edit" value="編集する" class="btn-square-little-rich green-btn">
        </form>
        <form action="boards.php">
            <input type="submit" name="delete" value="削除する" class="btn-square-little-rich red-btn">
            <input type="hidden" value="1">
        </form>
    </div>

    <hr class="cp_hr10" />
    <!-- ↑ここまで繰り返し  -->

</body>
</html>