<?php
require_once '../conf/const.php';
require_once '../model/functions.php';
require_once '../model/main_model.php';

session_start();
is_logined();

$err_message[] = array();
$db = get_db_conect();
if(isset($_SESSION['room_id']) === false){
$_SESSION['room_id'] = get_post('room_id');
}
$room_id = $_SESSION['room_id'];
$room_data = get_room_data($db,$room_id);
$nowdate = date('Y-m-d H:i:s');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if($_POST['type'] === "comment"){

        if(isset($_POST['comment']) === true){
        $user_comment = get_post('comment');
        $user_name = $_SESSION['name'];
            if(mb_strlen($user_comment) > 100){
                $err_msg = "コメントは１００文字以内で入力してください。";
            } elseif(mb_strlen($user_comment) === 0){
                $err_msg = "コメントを入力してください。";
            } else {
                insert_comment($db,$room_id,$user_name,$user_comment,$nowdate);
                header('Location: /room.php');
            }
        }

    }elseif($_POST['type'] === "delete"){
        $comment_id = get_post('delete_comment');
        delete_comment($db,$comment_id);
        header('Location: /room.php');
    }
}
$room_comment_data = get_room_comment($db,$room_id);

include_once '../view/room_view.php';