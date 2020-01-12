<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ルーム作成画面</title>
</head>
<header>
    <img src="/assets/images/logo.png">
</header>
<body>
    <h1>ルーム作成</h1>
    <?php print $result; ?>
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
</body>
</html>