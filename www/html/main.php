<?php
require_once '../conf/const.php';
require_once '../model/functions.php';
require_once '../model/main_model.php';

session_start();
if($_SESSION['name'] === ''){

    header('login.php');
}
$room_data = array();

$db = get_db_conect();
$rows = get_room($db);

foreach($rows as $row){
    $room_data[] = $row;
}
include_once '../view/main_view.php';