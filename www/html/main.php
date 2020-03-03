<?php
require_once '../conf/const.php';
require_once '../model/functions.php';
require_once '../model/main_model.php';

session_start();
if(isset($_SESSION['room_id']) === true){
    unset($_SESSION['room_id']);
}
is_logined();

$room_data = array();

$db = get_db_conect();
$room_data = get_room($db);

$room_data = entity_assoc_array($room_data);

if($_SERVER['REQUEST_METHOD'] === "POST"){
    if($_POST['type'] === "delete"){
    if(isset($_POST['room_id']) === true){
            $room_id = get_post('room_id');
            $is_delete = get_post('is_delete');

            if($is_delete === 'yes'){
                delete_room($db,$room_id);
                header('Location: main.php');
            } else {
                header('Location: main.php');
            }
    }
}
}

include_once '../view/main_view.php';