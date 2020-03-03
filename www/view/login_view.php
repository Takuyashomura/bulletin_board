<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/head.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<header>
    <div class="image">
    <img src=<?php print logo_img?>>
    </div>
</header>
<main>
<div class="center">
    <?php if($err_msg !== ''){?>
    <ul>
        <li><?php print $err_msg; ?></li>
    </ul>
    <?php } ?>
<form method="POST">
    <div class="form">
        <div>
            <label>お　名　前：<input type="text" name="user_name"></label>
        </div>
        <div>
            <label>パスワード：<input type="password" name="user_pass"></label>
        </div>
        <div class="submit">
            <input class="submit_button" type="submit" value="ログイン">
        </div>
    </div>
    </form>
<a href="regist.php">新規登録</a>
</div>
    </main>
</body>
</html>
