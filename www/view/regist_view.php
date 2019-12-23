<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規登録</title>
</head>
<header>
    <img src="/assets/images/logo.png">
</header>
<body>
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
        <label>お名前：<input type="text" name="user_name"></label>
        <label>パスワード：<input type="password" name="user_password"></label>
        <input type="submit" value="登録">
    </form>
    <a href="login.php">ログイン画面へ戻る</a>
</body>
</html>