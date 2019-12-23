<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="assets/css/html5reset-1.6.1.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<header>
    <img src="/assets/images/logo.png">
</header>
<body>
<?php
    foreach($err_msg as $err){ ?>
    <ul>
        <li><?php print $err; ?></li>
    </ul>
    <?php } ?>
<div class="form">
<p>ようこそ</p>
<form method="POST">
<label>お名前：<input type="text" name="user_name"></label>
<label>パスワード：<input type="password" name="user_pass"></label>
<label><input type="submit" value="ログイン"></label>
<a href="regist.php">新規登録</a>
</form>
</div>
</body>
</html>
