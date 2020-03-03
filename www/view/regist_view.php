<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規登録</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/head.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<header>
    <div class="image">
    <img src=<?php print logo_img?>>
    </div>
</header>
<body>
    <div class="center">
    <h1>新規登録</h1>
    <?php
    if(count($err_msg) !== 0){
        foreach($err_msg as $err){ ?>
        <ul>
            <li><?php print $err; ?></li>
        </ul>
        <?php } } elseif($result !== '') { ?>
        <ul>
            <li><?php echo $result; ?></li>
        </ul> 
    <?php } ?>  
    <form method="POST">
        <div class="form">
            <div>
                <label>お　名　前：<input type="text" name="user_name"></label>
            </div>
            <div>
                <label>パスワード：<input type="password" name="user_password"></label>
            </div>
            <div class="submit">
                <input type="submit" value="登録">
            </div>
        </div>
    </form>
    <a href="login.php">ログイン画面へ戻る</a>
    </div>
</body>
</html>