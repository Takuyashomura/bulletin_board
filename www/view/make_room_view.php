<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ルーム作成画面</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/head.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <style>
        h1{
            font-size: 50px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<header>
    <div class="image">
    <img src="/assets/images/logo.png">
    </div>
</header>
<h1>ルーム作成画面</h1>
<div class="center">
    <p><?php print $result; ?></p>
    <?php foreach($err_message as $err){ ?>
        <ul>
            <li><?php print $err;?></li>
        </ul>
    <?php } ?>
    <form method="post">
        <label>ルーム名<input type="text" name="room_name"></label>
        <input type="hidden" name="user_name" value="<?php print $_SESSION['name']; ?>">
        <input type="submit" value="作成">
    </form>
    <a href="main.php">メインページへ</a>
</div>
</body>
</html>