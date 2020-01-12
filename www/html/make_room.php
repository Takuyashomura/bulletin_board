<?php
require_once '../conf/const.php';
require_once '../model/functions.php';
require_once '../model/main_model.php';
session_start();
$result = '';
$err_message = array();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(mb_strlen(get_post('room_name')) > 20){
        $err_message[] = '２０文字以内で入力してください。';
    }else{
        $room_name = get_post('room_name');
        $user_name = get_post('user_name');
        $db = get_db_conect();

        make_room($db,$room_name,$user_name);
            $result = 'ルームを作成しました。.';
    }
    }

include_once '../view/make_room_view.php';