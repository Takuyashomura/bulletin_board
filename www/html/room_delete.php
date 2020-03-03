<?php
require_once '../conf/const.php';
require_once '../model/functions.php';
session_start();

$room_id = get_post('room_id');

include_once('../view/room_delete_view.php');