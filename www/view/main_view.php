<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>掲示板ロビー</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/head.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header>
    <div class="image">
    <img src=<?php print logo_img?>>
    </div>
</header>
<div class="main">
    <p>ようこそ【<?php print $_SESSION['name'];?>】さん！</p>
        <div class="menu">
            <a href="make_room.php">部屋を作成する</a>
            <a href="logout.php">ログアウト</a>
        </div>
<table>
    <tr>
        <th>ルームID</th>
        <th>ルーム名</th>
        <th>作成者</th>
    </tr>
    <div class="contents-area">
    <?php foreach($room_data as $room){?>
     <tr class="contents">
         <td><?php print $room['room_id'];?></td>
         <td><?php print $room['room_name'];?></td>
         <td><?php print $room['administrator'];?></td>
         <td>
            <div class="submit_button">
            <form method="POST" action="room.php">
                <input class="submit" type="submit" value="入室">
                <input type="hidden" name="room_id" value=<?php print $room['room_id'];?>>
            </form>
            </div>
            <?php if($_SESSION['name'] === $room['administrator']){?>
            <div class="submit_button">
            <form name="delete_room" method="POST" action="room_delete.php">
                <input class="submit" name="btn" type="submit" value="削除">
                <input type="hidden" name="room_id" value=<?php print $room['room_id'];?>>
            </form>
            </div>
            <?php } ?>
        </td>
     </tr>   
   <?php } ?>
    </div>
</table>
</div>
</body>
</html>