<?php
require_once '../conf/const.php';
require_once '../model/functions.php';
require_once '../model/login_model.php';

session_start();

$db = get_db_conect();
$err_msg = array();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(get_post('user_name') === '' || get_post('user_pass') === ''){
        $err_msg[] = 'ユーザー名,パスワードを入力してください。';
    } else {
        $user_name = get_post('user_name');
        $user_password = get_post('user_pass');
    }
$user_data = get_user_data($db,$user_name);
if(count($err_msg) === 0 && count($user_data) === 0){
    $err_msg[] = 'ユーザー名、パスワードが違います。';
}

foreach($user_data as $row){
    $name = $row['user_name'];
    $pass = $row['user_password'];
}

if(password_verify($user_password,$pass)){
    $_SESSION['name'] = $name;
    header('Location:main.php');
    exit();
} else {
    $err_msg[] = 'ユーザー名、パスワードが違います。';
}
}
include_once '../view/login_view.php';