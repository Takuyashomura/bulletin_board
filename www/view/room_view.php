<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ルーム</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/head.css">
    <link rel="stylesheet" href="assets/css/room.css">
</head>
<body>
<header>
    <div class="image">
        <img src="/assets/images/logo.png">
    </div>
</header>
<div class="center">

    <div class="menu">
        <p>ルームID【<?php print $room_data['room_id']; ?>】番</p>
        <p>【<?php print $room_data['administrator'];?>】さんのルームです。</p>
        <a href="main.php">ロビー画面へ戻る</a>
    </div>

    <?php print $err_msg;?>

    <?php
    foreach($room_comment_data as $value){?>
    <div class=<?php if($_SESSION['name'] === $value['user_name']){
        print "my_contents";
        }else{
            print "contents";
        } ?>>
        <div class="flex-1">
            <h2><?php print $value['user_name']; ?></h2>
        </div>
        <div class="flex-2">
            <small><?php print $value['created']; ?></small>
        </div>
        <p><?php print $value['user_comment']; ?></p>
        <?php if($_SESSION['name'] === $value['user_name']){?>
            <form method="post">
                <input type="submit" value="コメントを削除">
                <input type="hidden" name="type" value="delete">
                <input type="hidden" name="delete_comment" value=<?php print $value['comment_id'];?>>
            </form>
        <?php } ?>
    </div>
    <?php } ?>
    <div class="comment-form">
        <form method="POST">
            <input type="text" name="comment" placeholder="コメントを入力してください" size="40px">
            <input type="submit" value="送信">
            <input type="hidden" name="type" value="comment">
            <input type="hidden" name="room_id" value=<?php print $room_data['room_id']; ?>>
            <input type="hidden" name="administrator" value=<?php print $room_data['administrator']; ?>>
        </form>
    </div>
</div>
</body>
</html>