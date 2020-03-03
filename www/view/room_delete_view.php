<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ルーム削除</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/head.css">
    <style>
        .form{
            border:solid 1px;
            border-radius: 10px;
            margin: 20px auto;
            width: 300px;
        }
        h1{
            text-align: center;
            font-size: 20px;
        }
        .button{
            width: 200px;
            display: inline-flex;
            margin: 20px auto;
            padding-left: 60px;
        }
        .button > div{
            margin-left: 20px;
        }
    </style>
</head>
<body>
<header>
    <div class="image">
    <img src=<?php print logo_img?>>
    </div>
</header>
    <div class="form">
        <form method="post" action="main.php">
            <h1>削除しますか？</h1>
            <div class="button">
                <div>
                    <button name="is_delete" value="yes">はい</button>
                </div>
                <div>
                    <button name="is_delete" value="no">キャンセル</button>
                </div>
            </div>
            <input type="hidden" name="type" value="delete">
            <input type="hidden" name="room_id" value=<?php print $room_id;?>>
        </form>
    </div>
</body>
</html>